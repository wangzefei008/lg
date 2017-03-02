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
Route::get('want','Lg\Job_wantController@want_index');
Route::get('hotmore','Lg\Job_wantController@want_more');//求职信息热门查看更多
Route::get('wantInfo','Lg\Job_wantController@want_info');//求职信息查看详情
Route::get('wantSearch','Lg\Job_wantController@wantSearch');//求职信息查看详情

// //验证邮箱
// Route::get('/qqlogin','Lg\RegisterController@qqlogin');
// //qq登录
// Route::get('/qq','Lg\RegisterController@qq');

//qq链接
Route::get('/reset','Lg\RegisterController@reset');
//重置密码
Route::post('/send','Lg\RegisterController@send');
//发送验证码
Route::post('/code','Lg\RegisterController@code');
//验证验证码
Route::post('/reset_pwd','Lg\RegisterController@reset_pwd');
//重置密码


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
//待处理简历
Route::any('/labelresume','Lg\CompanyController@labelresume');
//已通知简历
Route::any('/notice','Lg\CompanyController@notice');
//不合适简历
Route::any('/unnotice','Lg\CompanyController@unnotice');
//有效职位
Route::any('effective','Lg\CompanyController@effective');
//失效职位
Route::any('online','Lg\CompanyController@online');

//验证邮箱的唯一性
Route::get('/logout','Lg\RegisterController@logout');
//退出
Route::get('/job_list','Lg\JobController@index');
//招聘信息首页
Route::any('/get_district','Lg\JobController@get_district');
//获取城市
Route::any('/toudi','Lg\JobController@toudi');
//投递简历
Route::any('/toudi_add','Lg\JobController@toudi_add');
//投递简历处理


//全部公司展示
Route::any('/companylist','Lg\CompanyListController@index');

//第三方登录
Route::get('/qqlogin','Lg\TestController@qqlogin');
Route::get('/qq','Lg\TestController@qq');

