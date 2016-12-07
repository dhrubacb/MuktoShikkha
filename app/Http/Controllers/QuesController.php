<?php

namespace App\Http\Controllers;
use Input;
use DB;
use Illuminate\Http\Request;
use App\question;
use App\Http\Requests;
use App\Category;
use App\Chapter;
class QuesController extends Controller
{
    //

    public function create()
    {
       $class_id= Category::lists('class','class_id' ); 
       
    	return view('question.question',compact('class_id'));
    }
     public function edit_ques($id)
    {
          $question = DB::table('question')
                    ->where('id' , $id)
                    ->first();
           return view('answer.ques_edit')
                     ->with('question',$question);
     }
    public function update($id)
    {
      $question = question::find($id);
        $question->ques_title =  Input::get('ques_title');
        $question->ques_detail = Input::get('ques_detail');
        $question->class = Input::get('class_id');
        $question->subject = Input::get('subject_id');
        $question->chapter = Input::get('chapter');
        $question->save();
       
        return  redirect()->route('a2q',['id' => $id ]);
    }


   public function store(Request $request)
    {

    	$question = new question();
    	$question->ques_title = $request->ques_title;
    	$question->ques_detail = $request->ques_detail;
    	$question->class = $request->class_id;
    	$question->subject = $request->subject_id;
    	$question->chapter =$request->chapter_id;
    	$question->user_id =  1;
    	
    	if($question -> save()){
    		return  redirect()->route('index');
    	}
    	else{
    		return 'error';
    	}

    	//return "sad";
    }
     public function sectionDropDownData()
    {
      $class_id =\Input::get('class_id');
      $subject_id = Category::where('class_id', '=',  $class_id)
            ->lists('subject','subject_id');
              
        return \Response::json($subject_id);

    }
    public function sectionDrop()
    {
    $class_id =\Input::get('class_id');
  
  $subject_id =\Input::get('subject_id');

    $chapter_id = DB::table('chapter')->where('class_id', '=',  $class_id)->where('subject_id', '=', $subject_id)
            ->lists('chapter_name','chapter_id');
              
        return \Response::json($chapter_id);

    }

}