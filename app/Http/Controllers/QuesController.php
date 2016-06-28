<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use App\question;
use App\Http\Requests;

class QuesController extends Controller
{
    //

    public function create()
    {
    	return view('question.question');
    }
    public function index()
    {
  
    }


   public function store(Request $request)
    {

    	$question = new question();
    	$question->ques_title = $request->ques_title;
    	$question->ques_detail = $request->ques_detail;
    	$question->class = $request->class;
    	$question->subject = $request->subject;
    	$question->chapter = $request->chapter;
    	$question->id = 1;
    	
    	if($question -> save()){
    		return  "Success";
    	}
    	else{
    		return 'error';
    	}

    	//return "sad";
    }
}