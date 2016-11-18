<?php

namespace App\Http\Controllers;
use Request;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class GreenController extends BaseController
{
	/*
	*绿色通道
	*$url 地址
	*$json 获取数据
	*/
	public function green()
	{
		$limit=4;
		$sign=md5($limit);
		$url="http://localhost/xiao/tpp/index.php/Home/green/green?limit=$limit&sign=$sign";
        		// echo $url;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re=json_decode($json,true);  
        		// print_r($re);die;      		
        		$data=$re['data']['data'];
		return view('green',['date'=>$data]);
	}
}