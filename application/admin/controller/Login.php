<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use app\admin\model\User;
class Login extends Controller
{
	public function index(){
		return $this -> fetch();
	}
	//登入
	public function setLogin(){
		if ($_POST) {
			$name = input('post.user_name');
			$pass = input('post.user_pass');
			$login = controller('User');
			$re = $login::setLogin($name,$pass);
			if($re['error'])
			{
				$this -> error($re['error'],$re['errornum']);
			}else
			{
				_outPut(200, '登录成功');
			}			
			

		}
	}
	//登出
	public function outLogin(){
		$isTrue = input("get.isTrue");

		if(!$isTrue) 
		{
			$data['status']  = -1;
			$data['url']="/Login/outLogin/isTrue/1";
			$data['info'] = "您确定要退出吗？安全退出系统可是个好习惯哦！"; 
			return $data;
			die();
		}  
		session("market_user",null);
		cookie("market_key",null,array("path"=>"/","domain"=>get_domain())); 
		$this -> success();

	}
	

}