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

Route::get('/',function(){
	$data['email']=Session::get('email');
	$data['utype']=Session::get('utype');
	// dd($data);
	return view('lg.index',$data);
});

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
Route::get('/register','Lg\RegisterController@index');
Route::post('/register_do','Lg\RegisterController@register_do');
Route::get('/login','Lg\RegisterController@login');
Route::post('/login_do','Lg\RegisterController@login_do');
Route::post('/check_email','Lg\RegisterController@check_email');
Route::get('test',function(){
	Session::put('uname','lisi');
	
});

//企业中心首页
Route::any('/company','Lg\CompanyController@index');
//职位招聘添加
Route::any('/company_create','Lg\CompanyController@add');
//职位招聘验证
Route::any('/company_add','Lg\CompanyController@add_pro');
//企业信息展示
Route::any('/company_mymessage','Lg\CompanyController@mymessage');
//企业信息完善
Route::any('/company_my_message','Lg\CompanyController@my_message');
//企业信息完善验证
Route::any('/company_my_message_pro','Lg\CompanyController@my_message_pro');
