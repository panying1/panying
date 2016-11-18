<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class RouteController extends Controller {

	/*
	到校路线的图片
	*/
	
	public function route()
	{
		$filename=I('get.filename');
		$limit=I('get.limit');
		$sign=I('get.sign');		
		$sign1=md5($limit);
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
}