<?php
namespace app\admin\controller;
use think\Controller;
class Admin extends Controller
{
	public function _initialize(){
		if (!cookie('user')) {
			$this -> redirect('Login/index');
		}
		$user = cookie('user');
		$web_set = config("WEB_SET");
		$web_set['sidebar_collapse'] = cookie("admin_sidebar");
		$this -> assign("web",$web_set); 
	}
}