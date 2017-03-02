<?php
namespace App\Http\Controllers\Lg;
header('content-type:text/html;charset=unicode');

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Request;
use Validator;
use App\User;
use Auth;
use Session;
use Illuminate\Support\Facades\Mail;  

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
		$members=new \App\Models\Members;
		// dd($members);
		$arr['reg_time']=time();
		$arr['reg_ip']=$_SERVER['REMOTE_ADDR'];
		//获取本机IP
		$arr['password']=md5($arr['password']);	
		$arr['username']=$arr['email'];
		$aa=$members->insert($arr);
		// dd($aa);die;	 
		if($aa){
			session(['email'=>$arr['email'],'uid'=>$aa,'utype'=>$arr['utype']]);
			return redirect('/')->with('注册成功');				
		}else{
			return redirect()->back()->withInput()->withErrors('注册失败！');
		}
	}				
	//验证邮箱的唯一性
	public function check_email()
	{
		$email=Request::all()['email'];
		// $email='2297@qq.com';
		$members=new \App\Models\Members;
		// dd($members->email($email));
		if(empty($members->email($email))){
			echo 0;
		}else{
			echo 1;
		}
	}
	//登录页面
	public function login()
	{
		return view('lg.login');
	}
	//登录验证
	public function login_do()
	{
		$email=Request::all()['email'];
		$password=md5(Request::all()['password']);
		$remember=Request::all()['remember'];
		// echo $remember;die;
		$members=new \App\Models\Members;
		$arr=$members->check_login($email,$password);
		if(empty($arr)){
			echo 0;
		}else{
			// dd($arr->toArray());
			// dd($arr['utype']);			
			if($remember==1){
				$lifeTime = 3*24 * 3600; // 保存一天
				session_set_cookie_params($lifeTime); 
			}
			session(['email'=>$email,'uid'=>$arr['uid'],'utype'=>$arr['utype']]);
			echo 1;
		}		
	}
	//qq
	public function qq()
	{
    	return Socialite::with('qq')->redirect();
    }
    //qq登录

	public function qqlogin()
	{
	    $user = Socialite::driver('qq')->user();
	    dd($user);
	}
	//退出
	public function logout()
	{
		Session::flush();
		//销毁所有session
		return redirect('login')->with('退出成功');
	}
	//重置密码
	public function reset()
	{

		
		return view('lg.reset');
	}
	// 发送验证码
	public function send()
	{
		$email=Request::all()['email'];
		$members=new \App\Models\Members;
		if(empty($members->email($email))){
			echo 0;
		}else{
			$num = rand(1000,9999);
			//发送邮件
	        $flag = Mail::send('lg.email',['num'=>$num],function($message)
	        {
	            $to = Request::all()['email'];
	            $message ->to($to)->subject('重置密码');
	        });
	        if($flag){
	        	session(['code'=>$num]);
	            echo 1;
	        }else{
	            echo 2;
	        }
		}
	}
	//验证验证码
	public function code()
	{
		$code=Request::all()['code'];
		$num=Session::get('code');
		if($code==$num){
			echo 1;
		}else{
			echo 0;
		}
	}
	//重置密码
	public function reset_pwd()
	{
		$email=Request::all()['email'];
		$password=md5(Request::all()['password']);
		$members=new \App\Models\Members;
		$aa=$members->reset_pwd($email,$password);
		if($aa){
			echo '<script>alert("重置成功！！！")</script>';
			return redirect('login');
		}else{
			echo '<script>alert("重置失败！！！")</script>';
			return redirect('reset');
		}
	}
}