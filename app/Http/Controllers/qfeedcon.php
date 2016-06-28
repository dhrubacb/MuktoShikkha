<?php

namespace App\Http\Controllers;
use App\answer;
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
      $question = DB::table('question')
                    ->where('ques_id' , $id)
                    ->first();
  
       $answer = DB::table('answer')
                    ->where('ques_id' , $id)
                    ->get();


        return view('answer.a2q')
                ->with('ques_id', $id)
                ->with('question',$question)
                ->with('answer',$answer);
            }



        public function store(Request $request){
           
        $answer = new answer();
      
        $answer->answer = $request->answer;
        $answer->ques_id = $request->ques_id;
        
        $answer->id = 1;
        
        if($answer -> save()){
            return  "Success";
        }
        else{
            return 'error';
        }


        }
}
