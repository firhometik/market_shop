<?php
namespace app\bis\controller;
use think\Controller;
use think\Request;
use app\admin\model\User;
class Register extends Controller
{
	public function index(){
		$category = model('Category') -> getparent();
		return $this -> fetch('',[
			'category' => $category,
			]);
	}
}