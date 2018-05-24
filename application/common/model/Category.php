<?php 
namespace app\common\model;
use think\Model;
class Category extends Model
{
	// protected $createTime = 'inputtime';
	// protected $updateTime = 'uptime';
	protected $autoWriteTimestamp = true;
	public function add($data){
		$data['status'] = 1;
		// $data['inputtime'] = time();
		return $this -> save($data);
	}

	public function getparent($parentId = 0){
		$data = [
			'status' => ['neq',-1],
			'parent_id' => $parentId ,
		];
		$order = [
			'listorder' => 'desc',
			'id' => 'desc',
		];
		return $this -> where($data) -> order($order) -> paginate(10);
	}
	public function getcategory(){
		$data = [
			'status' => 1,
		];
		$order = [ 
			'id' => 'desc',
		];
		return $this -> where($data) -> order($order) -> select();
	}
}