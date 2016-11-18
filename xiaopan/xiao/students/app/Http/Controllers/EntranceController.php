<?php

namespace App\Http\Controllers;
use Request;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EntranceController extends BaseController
{
	/*
	自助入学
	*/
	public function entrance()
	{
		return view('entrance');
	}
}