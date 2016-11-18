<?php

namespace App\Http\Controllers;
use Request;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ReportController extends BaseController
{
	/*
	自助报到
	*/
	public function report()
	{
		return view('self-report');
	}
	/*
	报到单
	*/
	public function reportcard()
	{
		$url="http://localhost/xiao/tpp/index.php/Home/user/reportcard";
        		// echo $url;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re=json_decode($json,true);  
        		// print_r($re);die;      	 	
        		$url="http://localhost/xiao/tpp/index.php/Home/user/arrive1";
        		// echo $url1;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re3=json_decode($json,true);  		
        		$data=$re['data']['data'];
        		// print_r($data);die;
        		$data3=$re3['data']['data'];
		return view('reportCard',['date'=>$data,'date3'=>$data3]);
		// return view('reportCard',);
	}
}