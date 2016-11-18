<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller {

	/*
	登陆
	*/
	
	public function index()
	{
		$user=M('personal');
		$name=$_GET['name'];
		// print_r($name);
		$phone=$_GET['phone'];
		// print_r($phone);die;
		$data=$user->where(['name'=>$name,'phone'=>$phone])->select();
		// print_r($data);die;
		if ($data) {
		$res=\Org\Util\Response::show(200,'成功',array('data'=>$data));
		echo $_GET['callback'].'('.$res.')';die;
		// $_SESSION['name']=$_POST['name'];
		} else {
			echo '失败';
			header('refresh:1;http://localhost/xiao/students/public/login');
		}
	}
}