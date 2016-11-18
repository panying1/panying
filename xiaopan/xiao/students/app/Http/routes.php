<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('add1','AddController@add1');
Route::post('/add','AddController@add');
Route::get('/del_one','AddController@del_one');
Route::post('/update','AddController@update');
Route::post('/delete','AddController@delete');


Route::get('/dd','DdController@index');
Route::get('/login','LoginController@login');
Route::get('/loginok','LoginController@loginok');

//用户中心
Route::get('user','UserController@user');
Route::get('info','UserController@info');//个人信息
//首页
Route::get('index1','IndexController@index');
//自助报到
Route::get('report','ReportController@report');
Route::get('reportcard','ReportController@reportcard');
//绿色通道
Route::get('green','GreenController@green');
//抵校登记
Route::get('arrive','ArriveController@arrive');
//推迟报到
Route::get('delay','DelayController@delay');
//入学须知
Route::get('know','KnowController@know');
//通知公告
Route::get('notice','NoticeController@notice');
Route::get('noticeDetail','NoticeController@noticeDetail');
//资料下载
Route::get('data','DataController@data');
//咨询帮助
Route::get('ask','AskController@ask');
Route::get('uploaDate','AskController@uploaDate');
Route::get('commonquestion','AskController@commonquestion');
Route::get('answer','AskController@answer');
Route::get('myanswer','AskController@myanswer');
Route::get('tiwen','AskController@tiwen');
//自助入学
Route::get('entrance','EntranceController@entrance');
//宿舍预定
Route::get('dorm','DormController@dorm');
//到校路线
Route::get('route','RouteController@route');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
