<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function login(){
        return view('user/login');
    }
    public function register(){
        return view('user/register');
    }
    public function resetPassword(){
        return view('user/resetPassword');
    }
    public function userCart(){
        return view('viewCart');
    }
}
