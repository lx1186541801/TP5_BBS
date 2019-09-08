<?php 
namespace app\admin\controller;

/**
 * 用管理员控制器
 */
class Admin extends Base
{
	
	protected $table = 'Admin';

	// 修改个人资料动作
	public function index()
	{

		$data = request()->post();
		if($data) {
			//数据验证
			$validate = $this->dataValidate($this->table);

			if(!$validate->scene('index')->check($data)){
			    return $this->error($validate->getError());
			}

			if($file = request()->file('icon')) {
				 $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads'. DS . 'icons');
				 if($info){
		            $data['icon'] = DS. 'uploads'. DS . 'icons'. DS . $info->getSaveName();
		        }else{
		            // 上传失败获取错误信息
		            return $this->error($file->getError());
		        }
			}

			//更新数据
			$res = $this->updateData($this->table, $data);
			if($res) {
				return $this->success('数据更新成功！', 'index');
			} else {
				return $this->error('数据更新失败或未修改！');
			}
		}


		return $this->fetch();
	}

	/**
	 * 修改密码
	 * @return [type] [description]
	 */
	public function pwd()
	{
		$data = request()->post();
		if($data) {
			//数据验证
			$validate = $this->dataValidate($this->table);

			if(!$validate->scene('pwd')->check($data)){
			    return $this->error($validate->getError());
			}

			$admin = $this->getOne('Admin', 1);

			$o_pwd = md5(md5($data['o_password']).$admin['salt']);

			if($data['n_password'] == $data['n_password_2']) {
				if($o_pwd === $admin['password']) {
					$salt = $this->getRandString();
					//更新数据
					$pwd = array();
					$pwd['id'] = 1;
					$pwd['salt'] = $salt;
					$pwd['password'] = md5(md5($data['n_password']).$salt);
					$res = $this->updateData($this->table, $pwd);
					if($res) {
						return $this->success('数据更新成功！', 'index');
					} else {
						return $this->error('数据更新失败或未修改！');
					}

				} else {
					return $this->error('旧密码填写错误');
				}
			} else {
				return $this->error('新密码两次填写不同');
			}
		}
		return $this->fetch();
	}

}