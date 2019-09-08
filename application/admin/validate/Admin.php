<?php 
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate
{
    protected $rule = [
        'username'  =>  'require|max:20',
        'nickname' =>  'max:20',
        'o_password'    => 'require',
        'n_password'    => 'require|min:6',
        'n_password_2'    => 'require',
    ];
    protected	$message = [
    	'username.require'	=>	'用户名必填',
    	'username.max'	=>	'昵称不能超过20个字符',
    	'nickname.max'	=>	'昵称不能超过20个字符',
        'o_password.require'  =>  '旧密码不能为空',
        'n_password.require'  =>  '新密码不能为空',
        'n_password.min'  =>  '新密码不能少于6位',
        'n_password_2.require'  =>  '确认密码不能为空',
    	
    ];

    protected $scene = [
        'index'  =>  ['username','nickname'],
        'pwd'  =>  ['o_password','n_password', 'n_password_2'],
    ];

}