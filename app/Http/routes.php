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
//个人
Route::get('/person','Lg\PersonController@index');//到个人主页
Route::get('/person_add','Lg\PersonController@person_add');//到添加个人资料
Route::any('/person_adddo','Lg\PersonController@person_adddo');//到执行个人资料
Route::any('/person_update','Lg\PersonController@person_update');//修改个人资料
Route::any('/person_updatedo','Lg\PersonController@person_updatedo');//执行修改个人资料
Route::get('/create_resume','Lg\PersonController@create_resume');//到创建简历
Route::any('/create_resume_do','Lg\PersonController@create_resume_do');//到创建简历接值
Route::any('/my_resume','Lg\PersonController@my_resume');//到我的简历
Route::any('/del_resume','Lg\PersonController@del_resume');//删除简历
Route::any('/update_resume','Lg\PersonController@update_resume');//到修改简历
Route::any('/update_resume_do','Lg\PersonController@update_resume_do');//到修改简历执行
Route::any('/preview_resume','Lg\PersonController@preview_resume');//到简历预览
Route::any('/pms_sys','Lg\PersonController@pms_sys');//到我的消息
Route::any('/company_interview','Lg\PersonController@company_interview');//到我的邀请
Route::any('/del_inter','Lg\PersonController@del_inter');//到我删除我的邀请
Route::any('/jobs_apply','Lg\PersonController@jobs_apply');//到我已经申请职位
Route::any('/del_apply','Lg\PersonController@del_apply');//到删除我已经申请职位
Route::any('/personal_favorites','Lg\PersonController@personal_favorites');//到职位收藏夹
Route::any('/del_favorites','Lg\PersonController@del_favorites');//到删除职位收藏夹
Route::any('/pms_sys','Lg\PersonController@pms_sys');//到我的消息
Route::any('/del_pms','Lg\PersonController@del_pms');//删除我的消息

