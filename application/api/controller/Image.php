<?php 
namespace app\api\controller;
use think\Controller;
use think\Request;
use think\File;
/**
* 
*/
class Image extends Controller
{
	public function upload(){
		$file = Request::instance()->file('file');
		//给定一个目录
		if ($file) {
			$info = $file->move('uploads'); 
		}
		// $info = $file->move($path);
		if ($info && $info -> getPathname()) {
			_outPut('200','上传成功',$info->getPathname());
		}
		_outPut('201','上传失败');
	}
}

