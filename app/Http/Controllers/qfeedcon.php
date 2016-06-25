<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class qfeedcon extends Controller
{
    //

     public function index()
    {
        $users10 = DB::table('question')->get();
         return view('ques_feed.new_ques')
                
                ->with('users10', $users10);
    }

    public function a2q($id)
    {
       

       

      $users = DB::table('question')
                    ->where('ques_id' , $id)
                   
                    ->first();
       
        return view('answer.a2q')
                ->with('ques_id', $id)
                ->with('users',$users);
            }
       
}
