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
	public function setcategory(){
		if (!request()->isPost()) {
			$this -> error('请求失败');
		}
		$data = input('post.');
		$validate = validate('Category');
		if (!$validate->check($data)) {
			$this -> error($validate->getError());
		}
		if (!empty($data['id'])) {
			$re = model('Category') -> save($data,['id'=>intval($data['id'])]);
			if (!$re) _outPut('201','修改失败');
			else _outPut('200','修改成功');
		}else{
			if (model('Category') -> add($data) !==false ) 
				_outPut('200','添加成功');
			else	_outPut('201','添加失败');
		}
	}
	public function listorder($id,$listorder){
		$re = model('Category') -> save(['listorder'=>$listorder],['id'=>$id]);
		if ($re) {
			$this -> result($_SERVER['HTTP_REFERER'],1,'success');
		}else{
			$this -> result($_SERVER['HTTP_REFERER'],0,'更新失败');
		}
	}
	public function status(){
		$id = input('get.id');
		$status = model('Category') -> where(['id'=>$id]) -> value('status');
		if ($status == 1) {
			$re = model('Category') -> save(['status'=>0],['id'=>$id]);	
		}else{
			$re = model('Category') -> save(['status'=>1],['id'=>$id]);
		}
		if ($re) {
			$this -> redirect($_SERVER['HTTP_REFERER'],1,'success');
		}else{
			$this -> redirect($_SERVER['HTTP_REFERER'],0,'更新失败');
		}
	}
	public function delcategory(){
		$id = input('get.id');
		$list = model('Category') ->where(['parent_id'=>$id]) -> find();
		if ($list) {
			$this -> error('请先删除下级栏目');
		}
		$re = model('Category') ->where(['id'=>$id]) ->delete();
		if ($re) {
			$this -> result($_SERVER['HTTP_REFERER'],1,'success');
		}else{
			$this -> result($_SERVER['HTTP_REFERER'],0,'删除失败');
		}
	}
}