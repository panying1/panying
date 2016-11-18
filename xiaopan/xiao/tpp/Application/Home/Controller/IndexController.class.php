<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

	/*
	首页轮播
	*/
	
	public function index()
	{
		//get传值
		$limit=I('get.limit');
		$sign=I('get.sign');		
		$sign1=md5($limit);
		if ($sign==$sign1) {
			$user=M('file');
			$re=$user->select();
			// var_dump($re);die;
			$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
			echo $_GET['callback'].'('.$res.')';die;
		} else {
			return $res=\Org\Util\Response::show(400,'失败');
		}		
	}  

	/*
	校园简介
	*/

	public function brief()
	{
		//get传值
		$limit=I('get.limit');
		$sign=I('get.sign');		
		$sign1=md5($limit);
		if ($sign==$sign1) {
			$user=M('brief');
			$re=$user->select();
			// var_dump($re);die;
			$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		} else {
			return $res=\Org\Util\Response::show(400,'失败');
		}
	}

	/*
	校园资讯
	*/

	public function news()
	{
		//get传值
		$limit=I('get.limit');
		$sign=I('get.sign');		
		$sign1=md5($limit);
		if ($sign==$sign1) {
			$user=M('news');
			$re=$user->select();
			//var_dump($re);die;
			$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		} else {
			return $res=\Org\Util\Response::show(400,'失败');
		}
	}

	/*
	底部
	*/

	public function footer()
	{
		//get传值
		$limit=I('get.limit');
		$sign=I('get.sign');		
		$sign1=md5($limit);
		if ($sign==$sign1) {
			$user=M('footer');
			$re=$user->select();
			//var_dump($re);die;
			$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		} else {
			return $res=\Org\Util\Response::show(400,'失败');
		}
	}

	/*
	八大功能
	*/

	public function center()
	{
		//get传值
		$limit=I('get.limit');
		$sign=I('get.sign');		
		$sign1=md5($limit);
		if ($sign==$sign1) {
			$user=M('center');
			$re=$user->select();
			//var_dump($re);die;
			$res=\Org\Util\Response::show(200,'成功',array('data'=>$re));
		} else {
			return $res=\Org\Util\Response::show(400,'失败');
		}
	}
}