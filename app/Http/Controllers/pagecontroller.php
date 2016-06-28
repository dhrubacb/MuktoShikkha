<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class pagecontroller extends Controller
{
   
    public function home()
    {
        return view('project.home');
       // return Redirect::to('home');
    }

    public function login()
    {
        return view('project.login');
    }

    public function register()
    {
        return view('project.register');
    }


    public function test()
    {
        return view('project.test');
        
    }


   

}
