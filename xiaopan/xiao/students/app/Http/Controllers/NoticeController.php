<?php

namespace App\Http\Controllers;
use Request;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class NoticeController extends BaseController
{
	/*
	通知公告
	*/
	public function notice()
	{
		return view('notice');
	}
	/*
	通知公告列表
	*/
	public function noticeDetail()
	{
		return view('noticeDetail');
	}
}