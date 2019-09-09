<?php
namespace app\index\controller;

use \think\Controller;
use \think\Loader;

class User extends Controller
{
    protected $table = 'User';

    public function login()
    {
        $data = request()->post();
        if($data) {
            $validate = Loader::validate($this->table);
            if(!$validate->scene('login')->check($data)){
                return $this->error($validate->getError());
            }

            $user = db($this->table)->where('username', $data['username'])->find();
            
            if(isset($user)) {
             $pwd = md5(md5($data['password']).$user['salt']);
             if($pwd === $user['password']) {
                 session('user_id',$user['id']);
                 return $this->success('登陆成功!', 'Index/index');
             } else {
                 return $this->error('密码错误！');
             }
            } else {
             return $this->error('用户名不存在！');
            }
        }
    	
        return $this->fetch();
    }   

    public function register()
    {
        $data = request()->post();

        if($data) {

            $validate = Loader::validate($this->table);
            if(!$validate->scene('register')->check($data)){
                return $this->error($validate->getError());
            }


            $user = db($this->table)->where('username', $data['username'])->find();
            
            if( ! isset($user)) {

             if($data['n_password'] === $data['n_password_2']) {

                $data['salt'] = $this->getRandString();

                $data['password'] = md5(md5($data['n_password']).$data['salt']);

                $data['c_time'] = $data['u_time'] = time();

                unset($data['n_password']);
                unset($data['n_password_2']);
                // 插入表数据
                $uid = db('user')->insertGetId($data);
                
                session('user_id',$uid);

                return $this->success('注册成功!', 'Index/index');
             } else {
                 return $this->error('两次密码不同');
             }
            } else {
             return $this->error('用户名重复');
            }
        }
        
        return $this->fetch();
    }


    public function logout()
    {
        session(null);
        return $this->success('退出成功！', 'index/index');
    }




        /**
     * 获取随机字符串
     * @param  string $value [description]
     * @return [type]        [description]
     */
    public function getRandString()
    {
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $rand_string = "";

        for($i=0; $i<8; $i++) {
            $index = mt_rand(0, strlen($chars)-1);
            $rand_string .= $chars[$index];
        }
        return $rand_string;
    }

}
