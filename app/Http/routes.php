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
//验证邮箱的唯一性
Route::get('/logout','Lg\RegisterController@logout');
//退出
Route::get('/job_list','Lg\JobController@index');
//招聘信息首页
Route::any('/get_district','Lg\JobController@get_district');
//获取城市
