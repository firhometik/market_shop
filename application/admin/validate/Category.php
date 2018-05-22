<?php
namespace app\admin\validate;
use think\Validate;
class Category extends Validate
{
	protected $rule = [
		['name','require','分类名称不能为空'],
		['parend_id','number'],
		['id','number'],
		['status','number|in:-1,0,1','状态必须是数字|状态不合法'],
		['top','number']
	];

	//场景设置
	protected $scene = [
		'add' => ['name','parend_id'], //添加
		'top' =>['id','top']
	];
}