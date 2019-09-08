<?php 
namespace app\admin\controller;

/**
 * 博客类
 */
class Setting extends Base
{
	
	public function index()
	{
		return $this->fetch();
	}

	public function other()
	{
		return $this->fetch();
	}
}