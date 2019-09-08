<?php 
namespace app\admin\controller;

/**
 * 分类控制器
 */
class Cate extends Base
{

	protected $table = 'Cate';
	/**
	 * 首页 列表
	 * @return [type] [description]
	 */
	public function index()
	{

		// 获取所有分类数据并分页
		$cates = $this->getData($this->table, 10);

		$this->assign('cates', $cates);
		return $this->fetch();
	}

	/**
	 * 添加动作
	 */
	public function add()
	{
		//获取post数据
		$data = request()->post();

		// 判断是否有数据提交
		if($data) {
			
			if( ! isset($data['is_open'])) {
				$data['is_open']	= 'off';
			}
			//数据验证
			$validate = $this->dataValidate($this->table);

			if(!$validate->check($data)){
			    return $this->error($validate->getError());
			}

			$data['c_time']	= $data['u_time'] = time();

			//插入数据
			$res = $this->addDate($this->table, $data);
			
			if($res) {
				return $this->success('数据添加成功！', 'index');
			} else {
				return $this->error('数据添加失败！');
			}
		}

		return $this->fetch();
	}

	/**
	 * 删除动作
	 * @return [type] [description]
	 */
	public function del()
	{
		$id = input('cid');
		if(db($this->table)->delete($id)) {
			return $this->success('删除分类成功！', 'index');
		} else {
			return $this->error('删除分类失败！');
		}
	}


	/**
	 * 修改动作
	 */
	
	public function edit()
	{
		$id = input('cid');

		//获取post数据
		$data = request()->post();

		// 判断是否有数据提交
		if($data) {

			if( ! isset($data['is_open'])) {
				$data['is_open']	= 'off';
			}
			//数据验证
			$validate = $this->dataValidate($this->table);

			if(!$validate->check($data)){
			    return $this->error($validate->getError());
			}

			$data['u_time'] = time();

			//更新数据
			$res = $this->updateData($this->table, $data);
			
			if($res) {
				return $this->success('数据更新成功！', 'index');
			} else {
				return $this->error('数据更新失败！');
			}
		}

		$cate = $this->getOne($this->table, $id);
		$this->assign('cate', $cate);
		return $this->fetch();
	}
}