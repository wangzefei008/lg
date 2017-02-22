<?php
namespace App\Http\Controllers\Lg;
header('content-type:text/html;charset=unicode');

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Request;
use Validator;
use App\User;
use Auth;

class RegisterController extends Controller
{
	//注册页面
	public function index()
	{
		return view('lg.register');
	}
	//验证注册信息 入库
	public function register_do()
	{
		$arr=Input::all();
		// dd($arr);
		//验证邮箱唯一性
		$val=Validator::make($arr,[
			'email'=> 'required|unique:members',
			]);
		if($val->fails()){
			return $val->errors();
			//输出验证的报错信息
		}else{
			$pms=new \App\Models\Members;
			$arr['reg_time']=time();
			$arr['reg_ip']=$_SERVER['REMOTE_ADDR'];
			//获取本机IP
			$arr['password']=md5($arr['password']);		 
			if($pms->insert($arr)){
				return redirect('/')->with('注册成功');				
			}else{
				return redirect()->back()->withInput()->withErrors('注册失败！');
			}
		}				
	}
	public function login(){
		return view('lg.login');
	}
	public function login_do(){
		$email=Request::all()['email'];
		$password=md5(Request::all()['password']);
		$arr=Input::all();
		$arr['password']=md5($arr['password']);	
		// dd(Auth::login($arr));
		$rules=[
			'email'=> 'exists:members,email',
			'password'=> 'exists:members,password',
			];
		$messages=[
			'exists'=>':attribute don\'t exists',
		];	
		$val=Validator::make($arr,$rules,$messages);
		if($val->fails()){
			return $val->messages();
			//输出验证的报错信息
		}else{
			return redirect('/')->with('登录成功');
		}

	}
}