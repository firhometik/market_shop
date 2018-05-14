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
		$id = input('get.id');
		$cate = model('Category') ->get($id);
		$category = model('Category') -> getparent();
		return view('getCategory',['category'=>$category,'cate'=>$cate]);
	}
}