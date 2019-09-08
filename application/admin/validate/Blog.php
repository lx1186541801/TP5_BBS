<?php 
namespace app\admin\validate;

use think\Validate;

class Blog extends Validate
{
    protected $rule = [
        'cid'  =>  'require',
        'title' =>  'require|max:100',
        'content' =>  'require',
        'keywords' =>  'max:50',
    ];
    protected	$message = [
    	'cid.require'	=>	'分类必选',
        'title.require'   =>  '标题必填',
    	'title.max'	=>	'标题不能超过100个字符',
    	'keywords.max'	=>	'关键字不能超过50个字符',
    	'content.require'	=>	'内容必填',

    ];

}