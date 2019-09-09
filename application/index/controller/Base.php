<?php 
namespace app\index\controller;

use \think\Controller;
use \think\Db;

/**
 * 基类
 */
class Base extends Controller
{
	
	public function _initialize()
	{

    	if(session('user_id')) {
    		$user_id = session('user_id');
    		$user = db('user')->where('id', $user_id)->find();
    		
    	} else {
    		$user = "";
    	}

		$cates = db('cate')->where('is_open', 'on')->select();
		$this->assign('user', $user);
		$this->assign('cates', $cates);
	}

	public function getListBlogs($cid)
	{
		$lists = Db::name('Blog')->where('cid', $cid)->where('is_open', 'on')->order('u_time', 'desc')->paginate(9);
		return $lists;
	}

	public function getBlog($id)
	{
		$blog = Db::name('Blog')->where('id', $id)->find();
		return $blog;
	}

	// 获取点击高的博客
	public function getTopBlogs($limit)
	{
		$lists = Db::name('Blog')->where('is_open', 'on')->order('click', 'desc')->limit($limit)->select();
		return $lists;
	}



}