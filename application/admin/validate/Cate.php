<?php 
namespace app\admin\validate;

use think\Validate;

class Cate extends Validate
{
    protected $rule = [
        'catename'  =>  'require|max:20',
        'keywords' =>  'max:50',
        'des' =>  'require|max:100',
    ];
    protected	$message = [
    	'catename.require'	=>	'分类名称必填',
    	'catename.max'	=>	'分类名称不能超过20个字符',
    	'keywords.max'	=>	'关键字不能超过50个字符',
    	'des.require'	=>	'分类描述必填',
    	'keywords.max'	=>	'分类描述不能超过100个字符',

    ];

}