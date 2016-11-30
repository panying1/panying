<?php
namespace Home\Controller;
use Think\Controller;
session_start();
class CommonController extends Controller {
public function __construct() 
{
	parent::__Construct(); 
        if(empty($_SESSION['admin_user'])) {
            echo "<script>alert('请先登录');</script>";
            $this->display('login/login');die;
        }
}
}