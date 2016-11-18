<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class GreenController extends Controller {

	/*
	*绿色通道的图片
	*$re 查询的操作
	*/
	
	public function green()
	{
		//获取图片
		$filename=I('get.filename');
		$limit=I('get.limit');
		$sign=I('get.sign');
		$sign1=md5($limit);
		//判断是否成功
		if ($sign==$sign1) {
			$user=M('green');
			$re=$user->select();
			// var_dump($re);die;
			$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
			echo $_GET['callback'].'('.$res.')';die;
		} else {
			return $res=\Org\Util\Response::show(400,'失败');
		}
	}

	/*
	*家庭成员的添加
	*@user 数据表
	@$re 添加的操作
	*/

	public function index()
	{
		//获取所有数据添加入库
		$name=I('get.');
		// print_r($name);die;
		$user=M('user');
		$re=$user->add($name);
		// print_r($re);die;
		$username=I('get.');
		// print_r($username);die;
		$user=M('family');
		$re=$user->add($username);
		// $res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		// echo $_GET['callback'].'('.$res.')';die;
	}
}