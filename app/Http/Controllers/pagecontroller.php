<?php

namespace App\Http\Controllers;


use Input;
use App\User;
use App\Blog;
use App\message;
use Validator;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;




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

    public function userhome($email){

        return view('project.profile')->with('email' , $email);
    }


    public function postuserhome(Request $request ){

      if(Request::ajax()){

       $data = new Blog();

                   $data->blog       = $request->blog_detail;
                   $data->blog_title = $request->blog_title;
                   $data->email      = $request->email_id;
                   $data->upvote     = 9;
                   $data->downvote   = 9;
                   $data->created_date = "----------";

       $data->save();

    //   return response()->json(array('sms' => 'saved successfully'));
         return Response::json(Request::all());
    }

      // return response()->json(('project.userhome'));
       
/*
       return view('project.userhome')
       ->with('blog' ,      $data->blog)
       ->with('email' ,     $request->email)       //  Bullshit
       ->with('picture' ,   $request->picture);    //Bullshit
*/

 }


    public function messagestore(Request $request){

     $data = new message();

                 $data->receiver = $request->receiver;
                 $data->sender = $request->sender;
                 $data->message = $request->message;
                 $data->sending_date = $request->sending_date;

     $data->save();


    }


    public function userabout(){

        return view('project.userabout');
    }

    public function usercontact(){

        return view('project.usercontact');
    }
   

}
