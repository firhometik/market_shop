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
			if (!$name) {
				_outPut('201','用户名不能为空!');
			}
			if (!$pass) {
				_outPut('201','密码不能为空!');
			}
			$pass = strtoupper(md5($pass));
			//判断用户是否存在
			$user = User::getuserinfo('id,username,password,status',['username'=>$name]);
			if (empty($user)) {
				_outPut('201','用户不存在！');
			}
			if ($user['password']!==$pass) {
				$s = _outPut('201','密码错误请重新尝试');
			}
			if ($user['status'] == 2 ) {
				_outPut('301','您的账号已被锁定，请联系管理员处理！');
			}
			if ($user['status'] == 0) {
				_outPut('301','您的账号未通过审核，请联系管理员处理！');
			}
			//更新登录时间和ip
			$add['last_login_time'] = time();
			$add['last_login_ip'] = Request::instance()->ip();
			$re = User::modUserinfo(['id'=>$user['id']],$add);
			cookie('user',$user,3600*8);
			_outPut(200, '登录成功');

		}
	}
}