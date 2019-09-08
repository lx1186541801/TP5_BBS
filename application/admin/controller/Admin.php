<?php 
namespace app\admin\controller;

/**
 * 用户控制器
 */
class Admin extends Base
{
	
	public function index()
	{
		return $this->fetch();
	}
}