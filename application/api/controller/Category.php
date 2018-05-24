<?php
namespace app\api\controller;
use think\Controller;
class Category extends Controller
{
	public function index(){
		echo "123";
	}
	public function getCategoryID(){
		$id = input('post.id',0,'intval');
		if (!$id) {
			_outPut('201','ID不合法');
		}
		$re = model('Category') -> getparent($id);
		dump($re);die;
		if (!re) {
			_outPut('201','查询错误');
		}
		_outPut('200','数据获取成功',$re);
	}
}