<?php 
namespace app\common\model;
use think\Model;
class BisAccount extends Model
{
	// protected $createTime = 'inputtime';
	// protected $updateTime = 'uptime';
	protected $autoWriteTimestamp = true;
	public function add($data){
		$data['status'] = 0;
		// $data['inputtime'] = time();
		$this -> save($data);
		return $this -> id;
	}

}