<?php

namespace App\Http\Controllers;
use Request;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class IndexController extends BaseController
{
	/*
            首页
             */
	public function index()
	{
		header('content-type:text/html;charset=utf-8');
		$limit=4;
		$sign=md5($limit);
		//图片轮播
		$url="http://localhost/xiao/tpp/index.php/Home/index/index?limit=$limit&sign=$sign";
		// echo $url;die;
		$ss=file_get_contents($url);
        		// echo $ss;die;
        		$re=json_decode($ss,true);
        		$data=$re['data']['data'];
        		// print_r($data);die;
        		//校园简介
        		$url1="http://localhost/xiao/tpp/index.php/Home/index/brief?limit=$limit&sign=$sign";
        		// echo $url1;die;
        		$ss1=file_get_contents($url1);
        		// echo $ss1;die;
        		$re1=json_decode($ss1,true);
        		// print_r($re1);die;
        		$data1=$re1['data']['data'];
        		// print_r($data1);die;
        		//校园资讯
        		$url2="http://localhost/xiao/tpp/index.php/Home/index/news?limit=$limit&sign=$sign";
        		// echo $url2;die;
        		$ss2=file_get_contents($url2);
        		// echo $ss2;die;
        		$re2=json_decode($ss2,true);  
        		// print_r($re2);die;      		
        		$data2=$re2['data']['data'];
        		//八大功能
        		$url3="http://localhost/xiao/tpp/index.php/Home/index/center?limit=$limit&sign=$sign";
        		// echo $url3;die;
        		$ss3=file_get_contents($url3);
        		// echo $ss3;die;
        		$re3=json_decode($ss3,true);  
        		// print_r($re3);die;      		
        		$data3=$re3['data']['data'];
		return view('index',['date'=>$data,'date1'=>$data1,'date2'=>$data2,'date3'=>$data3]);
	}
}