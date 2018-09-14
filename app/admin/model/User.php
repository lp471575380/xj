<?php
namespace app\admin\model;

use think\Request;
use think\Model;
use think\Db;

class User extends Model
{


	public function reg()
	{
		if(request()->isPost())
		{
			$data=[
              'uid' => input('username'),
              'pwd' => input('password'),
			];


		  Db::name('user')->insert($data);
		 
		}
		
	}

	
}