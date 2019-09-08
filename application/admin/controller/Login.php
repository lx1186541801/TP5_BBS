<?php 
namespace app\admin\controller;

use \think\Controller;
use \think\Loader;
use \think\Session;
/**
 * 登陆类
 */
class Login extends Controller
{
 	protected	$table = 'Admin';
	public function login()
	{
		$data = request()->post();

		if($data) {
			$validate = Loader::validate($this->table);
			if(!$validate->scene('login')->check($data)){
			    return $this->error($validate->getError());
			}

			$admin = db($this->table)->where('username', $data['username'])->find();
			
			if(isset($admin)) {
				$pwd = md5(md5($data['password']).$admin['salt']);
				if($pwd === $admin['password']) {
					Session::set('login_id',$admin['id']);
					return $this->success('登陆成功!', 'Index/index');
				} else {
					return $this->error('密码错误！');
				}
			} else {
				return $this->error('用户名不存在！');
			}
		}
		return $this->fetch('login');
	}

	public function logout()
	{
		session(null);
		return $this->success('退出成功！', 'Login/login');

	}

}