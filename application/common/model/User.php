<?php
namespace app\common\model;
use think\Db;
use think\Model;

class User extends Model
{
	//查询用户信息
	public static function getUserinfo($table,$field='*', $where)
    {
        return Db::table($table)
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
    public static function modUserinfo($table,$where, $data, $limit = 1)
    {
        return Db::table($table)
            ->where($where)
            ->data($data)
            ->limit($limit)
            ->update();
    }
    //登陆日志添加
    public static function record_log($data)
    {
        return Db::table('o2o_login_record')
            ->data($data)
            ->insert();
    }

}