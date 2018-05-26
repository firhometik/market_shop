<?php
namespace app\common\model;

use think\Model;

class City extends Model
{
	public function getCityParent($parentId = 0,$levle =1){
		$data = [
			'parent_no' => $parentId ,
			'area_level' => $levle,
		];
		return $this -> where($data) -> select();
	}
}