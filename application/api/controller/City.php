<?php
namespace app\api\controller;
use think\Controller;
class City extends Controller
{
	public function getCityParent(){
		$id = input('post.id');
		if (!$id) {
			_outPut('201','ID不合法');
		}
		$re = model('City') -> getparent($id);
		if (!$re) {
			_outPut('201','查询错误');
		}
		_outPut('200','数据获取成功',$re);
	}
}