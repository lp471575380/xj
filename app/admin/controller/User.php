<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;

class User extends Controller
{
	

	public function register()
	{
		if(request()->isPost())
		{
			$data=[
                           'uid' => input('username'),
                           'pwd' => input('password'),
			];


		  if(Db::name('user')->insert($data))
		  {
			return $this->success('注册成功');
		  }
		    else
		  {
			return $this->error('注册失败');
		  }
		}
		

		return $this->fetch();
		
	}

	public function login()
	{
		return $this->fetch();
	}
}
