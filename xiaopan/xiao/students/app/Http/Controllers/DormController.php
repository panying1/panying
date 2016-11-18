<?php

namespace App\Http\Controllers;
use Request;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DormController extends BaseController
{
	/*
	宿舍预定
	*/
	public function dorm()
	{
		$url="http://localhost/xiao/tpp/index.php/Home/user/yuding1";
        		// echo $url;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re=json_decode($json,true); 
        		$data=$re['data']['data'];
		return view('dorm-book',['date'=>$data]);
	}
}