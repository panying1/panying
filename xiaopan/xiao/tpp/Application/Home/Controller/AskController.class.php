<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class AskController extends Controller {

	/*
	图片的展示
	*/ 
	
	public function tu()
	{
		$filename=I('get.filename');
		$user=M('green');
		$re=$user->select();
		// var_dump($re);die;
		$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		echo $_GET['callback'].'('.$res.')';die;
	}

	/*常见问题展示
	*@user 表名
	*/

	public function ask()
	{
		$user=M('commonquestion');
		$re=$user->select();
		// var_dump($re);die;
		$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		echo $_GET['callback'].'('.$res.')';die;
	}

	/*
	添加提问的问题
	*/

	public function index()
	{
		
		$name=I('get.');
		// print_r($name);die;
		$user=M('tiwen');
		$re=$user->add($name);
		// print_r($re);die;
		$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		echo $_GET['callback'].'('.$res.')';die;
	}

	/*
	提问问题的查询
	*/

	public function ask1()
	{
		// $filename=I('get.filename');
		$user=M('tiwen');
		$re=$user->select();
		// var_dump($re);die;
		$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		echo $_GET['callback'].'('.$res.')';die;
	}
}