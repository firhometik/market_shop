<?php
namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{
    public function _initialize(){
		$web_set = config("WEB_SET");
		$web_set['sidebar_collapse'] = cookie("admin_sidebar");
		$this -> assign("web",$web_set); 
	}
    public function index()
    {
        return $this -> fetch();
    }
}
