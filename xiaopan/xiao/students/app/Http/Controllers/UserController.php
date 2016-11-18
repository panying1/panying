<?php

namespace App\Http\Controllers;
use Request;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends BaseController
{
	/*
	用户中心
	*/
	public function user()
	{
		return view('user-center');
	}
	/*
	个人信息
	*/
	public function info()
	{
		return view('user-info');
	}
}