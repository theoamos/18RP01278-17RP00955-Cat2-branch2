<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Controllers\userAuth;

class userAuth extends Controller
{
    function userLogin(request $req)
    {
    	$data=$req->input();
    	$req->session()->put('user',$data['user']);
    	return redirect('profile');

    }
}
