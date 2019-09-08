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

    public function _initialize()
    {
        $admin = $this->getOne('Admin', 1);
       	$this->assign('admin', $admin);
    }


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
		$datas = Db::name($table)->order('id', 'desc')->paginate($pages);
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

	/**
	 * 获取随机字符串
	 * @param  string $value [description]
	 * @return [type]        [description]
	 */
	public function getRandString()
	{
		$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$rand_string = "";

		for($i=0; $i<8; $i++) {
			$index = mt_rand(0, strlen($chars)-1);
			$rand_string .= $chars[$index];
		}
		return $rand_string;
	}

}