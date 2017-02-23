<?php
namespace App\Http\Controllers\Lg;

use App\Http\Controllers\Controller;
use Session;

class IndexController extends Controller
{
	public function index(){
		$email=Session::get('uname');
		// echo $email;die; 
		return view('lg.index',compact($email));
	}
}