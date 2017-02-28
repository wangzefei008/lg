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

Route::get('/','Lg\IndexController@index');

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
//注册
Route::post('/register_do','Lg\RegisterController@register_do');
//注册处理
Route::get('/login','Lg\RegisterController@login');
//登录
Route::post('/login_do','Lg\RegisterController@login_do');
//登录处理
Route::post('/check_email','Lg\RegisterController@check_email');


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

//验证邮箱的唯一性
Route::get('/logout','Lg\RegisterController@logout');
//退出
Route::get('/job_list','Lg\JobController@index');
//招聘信息首页
Route::any('/get_district','Lg\JobController@get_district');
//获取城市
Route::any('/toudi','Lg\JobController@toudi');
//投递简历
