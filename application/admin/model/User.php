<?php
namespace app\admin\model;
use think\Db;
use think\Model;

class User extends Model
{
	//查询用户信息
	public static function getUserinfo($field, $where)
    {
        return Db::table('o2o_user')
            ->field($field)
            ->where($where)
            ->find();
    }
    /**
     * 更新用户信息
     * @param $where
     * @param $data
     * @param int $limit
     * @return mixed
     */
    public static function modUserinfo($where, $data, $limit = 1)
    {
        return Db::table('o2o_user')
            ->where($where)
            ->data($data)
            ->limit($limit)
            ->update();
    }

}