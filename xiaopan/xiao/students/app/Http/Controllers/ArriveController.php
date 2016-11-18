<?php

namespace App\Http\Controllers;
use Request;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ArriveController extends BaseController
{
	/*
	抵校登记
	*/
	public function arrive()
	{
		$url="http://localhost/xiao/tpp/index.php/Home/user/arrive2";
        		// echo $url;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re=json_decode($json,true); 
        		$data=$re['data']['data'];
		return view('arrive',['date'=>$data]);
	}
}	