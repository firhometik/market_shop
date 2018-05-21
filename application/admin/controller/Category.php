<?php
namespace app\admin\controller;
class Category extends Admin
{
	public function index(){
		$parentId = input("get.parent_id",0,'intval');
		$a = '';
		$category =  model('Category') ->getparent($parentId);
		$this -> assign('a',$a);
		return view('',['category'=>$category]);
	}
	public function getCategory(){
		$id = input('get.id');
		$cate = model('Category') ->get($id);
		$category = model('Category') -> getparent();
		// dump($category);die;
		return view('getCategory',['category'=>$category,'cate'=>$cate]);
	}
	public function setCategory()
	{
		
	}
}