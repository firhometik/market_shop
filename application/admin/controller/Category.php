<?php
namespace app\admin\controller;
class Category extends Admin
{
	public function index(){
		$parentId = input("get.parent_id",0,'intval');
		$category =  model('Category') ->getparent($parentId);
		return view('',['category'=>$category]);
	}
	public function getCategory(){
		return $this -> fetch();
	}
}