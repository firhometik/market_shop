<?php
namespace app\bis\controller;
use think\Controller;
use think\Request;
use app\admin\model\User;
class Register extends Controller
{
	public function index(){
		$category = model('Category') -> getCategoryParent();
		$city = model('City') ->getCityParent();
		return $this -> fetch('',[
			'category' => $category,
			'city' 	   => $city,
			]);
	}
}