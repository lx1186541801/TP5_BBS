<?php 
namespace app\admin\controller;

use \think\Controller;
use \think\Db;
use \think\Loader;

/**
 * 基础类
 */
class Base extends Controller
{
	// 数据插入
	public function addDate($table, $data)
	{
		$res = Db::name($table)->insert($data);
		return $res;
	}

	public function updateData($table, $data)
	{
		$res = Db::name($table)->where('id', $data['id'])->update($data);
		return $res;
	}

	// 数据验证
	
	public function dataValidate($table)
	{
		$validate = Loader::validate($table);
		return $validate;
	}

	// 获取所有数据并分页
	
	public function getData($table, $pages)
	{
		$datas = Db::name($table)->paginate($pages);
		return $datas;
	}

	// 获取所有数据条件+限制字段
	
	public function getWhereData($table, $where1, $where2, $field)
	{
		$datas = Db::name($table)->where($where1, $where2)->field($field)->select();
		return $datas;
	}

	// 获取一条数据
	public function getOne($table, $id)
	{
		$data = Db::name($table)->where('id', $id)->find();
		return $data;
	}

}