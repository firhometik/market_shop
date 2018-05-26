<?php
namespace app\api\model;

use think\Model;

class City extends Model
{
	public function getparent($parentId = 0){
		$data = [
			'parent_no' => $parentId ,
		];
		return $this -> where($data) -> select();
	}
}