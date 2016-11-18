<?php

namespace App\Http\Controllers;
use Request;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RouteController extends BaseController
{
	/*
	推迟报到
	*/
	public function route()
	{
		$limit=4;
		$sign=md5($limit);
		$url="http://localhost/xiao/tpp/index.php/Home/route/route?limit=$limit&sign=$sign";
        		// echo $url;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re=json_decode($json,true);
        		// print_r($re);die;      		
        		$data=$re['data']['data'];
		return view('route',['date'=>$data]);
		// return view('route');
	}
}