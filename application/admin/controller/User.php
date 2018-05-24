<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\User as UserModel;
use think\Request;
class User extends Controller
{
	/*登录接口*/
	public static function setLogin($user_name,$user_pass,$user_yzm = null)
	{ 

		$where['username'] = $user_name;
		$where['disabled'] = 0;
		//判断帐号
		$user = UserModel::getUserinfo('o2o_user','',$where);

		if(!$user)
		{
			_outPut('201','账号密码错误');
		}
		//判断密码
		$check_pass =self::getLoginData("check_pass",array("pass" => $user_pass));
		if($check_pass != $user['password'])
		{
			_outPut('201','账号密码错误');
		}


		//判断用户状态
		if($user['status'] == 0) _outPut('301','您的账号未通过审核，请联系管理员处理！');
		if($user['status'] == 2) _outPut('201','您的账号已被锁定，请联系管理员处理！');

		//更新登陆时间和IP	
		$add['last_login_ip'] = Request::instance() -> ip();
		$add['last_login_time'] = date('Y-m-d H:i:s');

		//将登录信息写入数据库
		$re = UserModel::modUserinfo('o2o_user',['id'=>$user['id']],$add); 
		if(!$re) _outPut('302','登陆信息记录有误，请联系管理员处理！');
		
		$user['user_log_time'] = $add['last_login_time'];
		$user['user_log_ip']   = $add['last_login_ip'];

		//TODO 将登陆信息写入登陆表
		$logrecord['uid'] = $user['id'];
		$logrecord['log_time'] = date('Y-m-d H:i:s');
		$logrecord['log_ip'] = Request::instance() -> ip();
		$logrecord['type'] = 1;
		UserModel::record_log($logrecord);

		//记录登陆凭证
		$key = self::getLoginData("get_key",$user);
		cookie('market_key',$key,array('expire'=>3600*24*7,"path"=>"/","domain"=>get_domain()));
		 
 		$sessionid = input('post.sfkey') ? input('post.sfkey') : $_COOKIE['PHPSESSID'];
		
        $re = "ok";
        if($re == "ok")
        {
        	session("market_user",array("id" => $user["id"],"key" => $key));
	        session("market_sessid",$sessionid);
			return  array("error" => false);
        }else
        {
			_outPut('207','网络超时,请重新尝试!');
        }
        
	} 
	// 验证登录
	public static function checkLogin()
	{ 
 
        $thisurl = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];

		if(session("market_user")) //session验证登陆
		{

			$u = session("market_user");
			$key = $u["key"];
			$user = self::getLoginData("check_key",$key);
			if(!$user)
			{
				if(!$code = cookie('market_key')) return re(false,"您未登陆!");
		    	$user = self::getLoginData("check_key",$code); 
		    	if($user)
		    	{
					$session = array("id" => $user['id'],"key" => $code);
		    		session("market_user",$session);
		    	}
			} 
		}else//cookie验证登陆
		{
			if(!$code = cookie('market_key')) return re(false,"您未登陆!");
	    	$user = self:: getLoginData("check_key",$code);

	    	if($user)
	    	{
	    		session("market_user",$session = array("id" => $user['id'],"key" => $code));
	    	}
		}
		if(!$user)
        {
            session("market_user",null);
            session("errya_sessid",null);
            cookie("market_user",NULL,array('expire'=>3600*24*7,"path"=>"/","domain"=>get_domain()));
            _outPut('304','您的账号已经在别处登陆，请确保您的账号安全!',$thisurl);
        }
		return array("status" => '1', "info" => $user, "url" => $thisurl);
	}
	/*
	 * 登录验证和加密算法
	 * $type  string  类型
	 * $user  array 验证或者加密的数据
	 * 		check_pass   获取加密后的登录密码 md5 ( user_pass + errya + user_code )  参数 用户输入的密码，CODE码
	 *   	get_key  获取登陆凭证加密字符串  
	 *     	check_key 验证登陆凭证加密字符串合法，并返回详细用户信息
	*/
	public static function getLoginData($type="check_pass",$user)
	{
		if($type=="check_pass")
		{
			return strtoupper(md5($user['pass']."market_shop"));
		}
		if($type=="get_key")
		{
			$key = md5($user['username'].$user['password'].config("ENCRYPTION"));
			$id = $user['id'];
			$num = base_convert(substr($key,10,1),32,10);
			 
			$code = (int)($num * $id) . "." . $num % $id; 
			 
			return $code.".".$key;
		}
		
		if($type == "check_key")
		{ 
			if(!$user)return false;
			$code = explode(".", $user); 
			
			if(!isset($code[0]) || !isset($code[1]) || !isset($code[2])) return false;
			 
			$id = $code[0];
			$mod = $code[1];
			$str = $code[2];
			//获取ID
			$num = base_convert(substr($str,10,1),32,10);
			$id = (int)($id/$num);
			 
			$memberid = session("market_user.memberid");
			if($memberid)
			{
				$where['id'] = array("in",array($id,$memberid));
			}else
			{
				$where['id'] = array("in",array($id));
			}
			 
			if($num % $id == $mod)
			{
				$userTemp = UserModel::getUserinfo('o2o_user','',$where);
				 
				$user = $userTemp;
				// if(!$user) return false;
				//验证KEY是否合法	
				$key = md5($user['username'].$user['password'].config("ENCRYPTION"));
				if($key != $str) return false;
				return $user;
			}
			return false;
		}
	}
}