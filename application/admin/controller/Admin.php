<?php
namespace app\admin\controller;
use think\Controller;
class Admin extends Controller
{
	public function _initialize(){
		$user = controller('User');
		$user = $user::checkLogin();
		if(!$user['status'])
		{
			if($user['info'] == "您未登陆!"){
				header("Location:/login/index");exit;
			}else{
				$this -> error($user['info'],"/Login");exit;
			}
		}
		$user = $user['info'];
		$this -> user = $user;
		$this->assign('myuser', $user);

		$web_set = config("WEB_SET");
		$web_set['sidebar_collapse'] = cookie("admin_sidebar");
		$this -> assign("web",$web_set); 
	}

}