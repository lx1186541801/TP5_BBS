<?php
namespace app\index\controller;


class Index extends Base
{
    public function index()
    {

    	$top3_blogs =  $this->getTopBlogs(6);
    	$this->assign('top_blog', $top3_blogs[0]);
    	$this->assign('top3_blogs', $top3_blogs);
        return $this->fetch();
    }


    public function list()
    {

    	$request = request()->only(['cid']);
    	$cid = $request['cid'];
    	$blogs = $this->getListBlogs($cid);

    	$this->assign('blogs', $blogs);
    	return $this->fetch(); 	
    }

    public function show()
    {

    	$request = request()->only(['id']);
    	$id = $request['id'];
    	$blog = $this->getBlog($id);

    	$this->assign('blog', $blog);
    	return $this->fetch(); 	
    }
}
