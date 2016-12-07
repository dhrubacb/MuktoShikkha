<?php

namespace App\Http\Controllers;
use App\Quiz_answer;
use App\Quiz_question;
use App\User;
use Illuminate\Http\Request;
use App\Exam;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    
    public function index()
    {
        //
        $exams = DB::table('exam')->orderBy('id', 'desc')->get();
        return view('ExamSystem.exam_feed')
                ->with('exams',$exams);
    }

    
    public function create()
    {               
        return view('ExamSystem.createExam');
    }

    public function finish($id)
    {     
        $exam = Exam::find($id);
         $exam ->status = 1;
       $exam->save();

        return  redirect()->route('exam.preview',['id' => $exam->id ])                    
        ;        
    }
    
    public function store(Request $request)
    {
        //
        $exam = new Exam();
        $exam->exam_title = $request->exam_title;
        $exam->exam_detail = $request->exam_detail;
        $exam->start_time = $request->start_time;
        $exam->end_time = $request->end_time;
        $exam->class = $request->class_id;
        $exam->subject = $request->subject_id;
        $exam->chapter = $request->chapter_id;
        $exam->user_id = '1';
        $exam->status = '0';

        if($exam->save())
            return  redirect()->route('quizques',['id' => $exam->id ])                    
        ;        

    }

      public function question_create($id)
    {

        $exam = \App\Exam::find($id);
        if($exam->status == 0){
    $count = DB::table('quiz_question')
                ->where('exam_id' , $id)
                ->count('id');
        return view('ExamSystem.quiz_create')
                ->with('exam', $exam)
                ->with('count',$count);
    }
    else
        return view('errors.503');
}

    public function question_store(Request $request)
    {
        
        $question = new Quiz_question();
        $question->ques_body = $request->quiz_question;
        $question->ques_marks = 1;
        $question->class = $request->class;
        $question->subject = $request->subject;
        $question->chapter =$request->chapter;
        $question->user_id = 1;
        $question->exam_id = $request->exam_id;
        $question -> save();
    

        $answer  = new Quiz_answer();
        $answer->ans_body = $request->option1;
        $answer->ans_marks = $request->marks1;
        $answer->quizAns_id = $question->id;
        $answer->exam_id = $request->exam_id;
        $answer->save();

        $answer  = new Quiz_answer();
        $answer->ans_body = $request->option2;
        $answer->ans_marks = $request->marks2;
        $answer->exam_id = $request->exam_id;
        $answer->quizAns_id = $question->id;
        $answer->save();

        $answer  = new Quiz_answer();
        $answer->ans_body = $request->option3;
        $answer->ans_marks = $request->marks3;
        $answer->quizAns_id = $question->id;
        $answer->exam_id = $request->exam_id;
        $answer->save();

        $answer  = new Quiz_answer();
        $answer->ans_body = $request->option4;
        $answer->ans_marks = $request->marks4;
        $answer->quizAns_id = $question->id;
        $answer->exam_id = $request->exam_id;
         if($answer->save()){
          return  redirect()->route('quizques',['id' => $request->exam_id ]);
      }

   }
  
  public function exam_preview($id)
  {
          $exam = \App\Exam::find($id);
          $count = DB::table('quiz_question')
                ->where('exam_id' , $id)
                ->count('id');
          $quiz_question = DB::table('quiz_question')
                ->where('exam_id' , $id)
                ->get();
          $answer = DB::table('quiz_answer')
                ->where('exam_id' , $id)
                ->get();
            return view('ExamSystem.exam_preview')
                   ->with('exam',$exam)
                   ->with('count',$count)
                   ->with('quiz_question',$quiz_question)
                   ->with('answers',$answer);

  }

    public function destroy($id)
    {
      
    }
}
