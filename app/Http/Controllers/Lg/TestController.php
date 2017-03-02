<?php

namespace App\Http\Controllers\Lg;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function qq()
    {
		return \Socialite::with('qq')->redirect();
	}



	public function qqlogin()
	{
	    $user = \Socialite::driver('qq')->user();
	    dd($user);
	}


}
