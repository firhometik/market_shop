<?php
namespace app\admin\controller;
class Category extends Admin
{
	public function index(){
		$parentId = input("get.parent_id",0,'intval');
		$category =  model('Category') ->getparent($parentId);
		dump($category);die;
		return view('',['category'=>$category]);
	}
}