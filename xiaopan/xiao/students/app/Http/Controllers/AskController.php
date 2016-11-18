<?php

namespace App\Http\Controllers;
use Request;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AskController extends BaseController
{
	/*
	咨询帮助
	*/
	public function ask()
	{
		$url="http://localhost/xiao/tpp/index.php/Home/ask/tu";
        		// echo $url;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re=json_decode($json,true);
        		$data=$re['data']['data'];
		return view('ask',['date'=>$data]);
	}
                        /*
                        问题展示
                        */
	public function uploaDate()
	{
		$url="http://localhost/xiao/tpp/index.php/Home/ask/ask";
        		// echo $url;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re=json_decode($json,true);
        		$data=$re['data']['data'];
		return view('uploaDate',['date'=>$data]);
		// return view('uploaDate');
	}
	/*
	常见问题
	*/
	public function commonquestion()
	{
		$url="http://localhost/xiao/tpp/index.php/Home/ask/ask";
        		// echo $url;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re=json_decode($json,true);
        		$data=$re['data']['data'];
        		$url="http://localhost/xiao/tpp/index.php/Home/ask/tu";
        		// echo $url;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re1=json_decode($json,true);
        		$data=$re['data']['data'];
        		$data1=$re1['data']['data'];
		return view('commonquestion',['date'=>$data,'date1'=>$data1]);
		// return view('commonquestion');
	}
	/*
	咨询解答
	*/
	public function answer()
	{
		$url="http://localhost/xiao/tpp/index.php/Home/ask/ask";
        		// echo $url;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re=json_decode($json,true);
        		$data=$re['data']['data'];
        		$url="http://localhost/xiao/tpp/index.php/Home/ask/tu";
        		// echo $url;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re1=json_decode($json,true);
        		$data=$re['data']['data'];
        		$data1=$re1['data']['data'];
		return view('answer',['date'=>$data,'date1'=>$data1]);
	}
	/*
	我的提问
	*/
	public function myanswer()
	{
		$url="http://localhost/xiao/tpp/index.php/Home/ask/ask1";
        		// echo $url;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re=json_decode($json,true);
        		$data=$re['data']['data'];
        		$url="http://localhost/xiao/tpp/index.php/Home/ask/tu";
        		// echo $url;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re1=json_decode($json,true);
        		$data1=$re1['data']['data'];
		return view('myanswer',['date'=>$data,'date1'=>$data1]);
		// return view('myanswer');
	}
	/*
	我要提问
	*/
	public function tiwen()
	{
		$url="http://localhost/xiao/tpp/index.php/Home/ask/tu";
        		// echo $url;die;
        		$json=file_get_contents($url);
        		// echo $json;die;
        		$re=json_decode($json,true);
        		$data=$re['data']['data'];
		return view('tiwen',['date'=>$data]);
	}
}