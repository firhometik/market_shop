<?php
namespace app\admin\controller;
use think\Controller;
class Admin extends Controller
{
	public function _initialize(){
		if (!session('user')) {
			$this -> redirect('Login/index');
		}
		$web_set = config("WEB_SET");
		$web_set['sidebar_collapse'] = cookie("admin_sidebar");
		$this -> assign("web",$web_set); 
	}
}