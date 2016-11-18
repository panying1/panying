<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller {

	/*
	*个人信息的添加
	*/
	
	public function index()
	{
		//获取所有数据
		$name=I('get.');
		// print_r($name);die;
		$user=M('personal');
		$re=$user->add($name);
		print_r($re);die;
		$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		echo $_GET['callback'].'('.$res.')';
		// print_r($re);die;
	}

	/*
	*宿舍预定的添加
	*/

	public function yuding()
	{
		//获取所有数据
		$name=I('get.');
		// print_r($name);die;
		$user=M('yuding');
		$re=$user->add($name);
		// print_r($re);die;
		$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		echo $_GET['callback'].'('.$res.')';
	}

	/*
	*抵校登记的添加
	*/

	public function arrive()
	{
		//获取所有数据
		$name=I('get.');
		// print_r($name);die;
		$user=M('arrive');
		$re=$user->add($name);
		// print_r($re);die;
		$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		echo $_GET['callback'].'('.$res.')';
	}

	/*
	*报到单查询
	*/

	public function reportcard()
	{
		//get传值
		$user=M('personal');
		$re=$user->join('arrive on personal.p_id=arrive.p_id')
		->join('yuding on personal.p_id=yuding.p_id')->select();
		// var_dump($re);die;
		$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		echo $_GET['callback'].'('.$res.')';die;
	}

	/*
	*报到单的图片的展示
	*/

	public function arrive1()
	{
		$filename=I('get.filename');
		$user=M('green');
		$re=$user->select();
		// var_dump($re);die;
		$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		echo $_GET['callback'].'('.$res.')';die;
	}

	/*
	*抵校登记的图片展示
	*/

	public function arrive2()
	{
		$filename=I('get.filename');
		$user=M('green');
		$re=$user->select();
		// var_dump($re);die;
		$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		echo $_GET['callback'].'('.$res.')';die;
	}

	/*
	*宿舍预定的图片展示
	*/

	public function yuding1()
	{
		$filename=I('get.filename');
		$user=M('green');
		$re=$user->select();
		// var_dump($re);die;
		$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		echo $_GET['callback'].'('.$res.')';die;
	}
}