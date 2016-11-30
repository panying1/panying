<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
	/*
	后台详细页面
	 */
    public function index(){
        $this->display('index');
    }
}