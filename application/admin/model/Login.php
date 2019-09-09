<?php 
namespace app\admin\model;

use think\Model;
use \think\Session;

class Login extends Model
{
	protected $table = 'admin';

	/**
	 * 登陆
	 * @param  [type] $username [description]
	 * @param  [type] $password [description]
	 * @return [type]           [description]
	 */
	public function login($username, $password)
	{
		$admin = db($this->table)->where('username', $username)->find();
			
		if(isset($admin)) {
			$pwd = md5(md5($password).$admin['salt']);
			if($pwd === $admin['password']) {
				Session::set('login_id',$admin['id']);
				return 1;
			} else {
				return 2;
			}
		} else {
			return 3;
		}
	}

	public static function logout()
	{
		session(null);
	}
}