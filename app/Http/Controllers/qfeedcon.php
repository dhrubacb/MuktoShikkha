<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use App\answer;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Event;
class qfeedcon extends Controller
{
    //

     public function index()
    {
        $user10 = DB::table('question')->get();
       
         return view('project.home')
                
                ->with('users10', $user10);
    }



   public function a2q($id)
    {
      
      $question = DB::table('question')
                    ->where('id' , $id)
                    ->first();
      // return $question->id;
  
       $answer = DB::table('answer')
                    ->where('ques_id' , $id)
                    ->get();

         $count = DB::table('answer')
                ->where('ques_id' , $id)
                ->count('id');
                    

   

      $asker = \App\User::find($question->user_id);

     
  


        return view('answer.a2q')
                ->with('ques_id', $id)
                ->with('question',$question)
                ->with('asker',$asker)
                ->with('answer',$answer)
                ->with('count',$count);

            }



        public function store(Request $request){
           
        $answer = new answer();
      
        $answer->answer = $request->answer;
       $iid= $answer->ques_id = $request->ques_id;
        
        $answer->user_id =  $request->user_id;
        
        
        if($answer -> save()){
            return  redirect()->route('a2q',['id' => $iid ]);
        }
        else{
            return 'error';
        }


        }


    public function stor(Request $request ){

      if(Request::ajax()){

       $data = new answer();

                   $data->answer       = $request->answer;
                   $data->ques_id = $request->ques_id;
                   $data->user_id      = $request->user_id;
                   
       $data->save();

         return Response::json(Request::all());
    }

 }
          public function category_class($class){
             $users10 = DB::table('question')
                      ->where('class',$class)
                      ->get();

            
              $class = DB::table('category')
                            ->where('class_id',$class)
                            ->get();

            return view('class_category.class6')          
                ->with('users10', $users10)
                ->with('classes',$class);

          }

    public function category_subject($class,$subject){

            $users10 = DB::table('question')
                            ->where('class',$class)
                            ->where('subject',$subject)
                            ->get();

            $chapter = DB::table('chapter')       
                        ->where('class_id',$class)
                         ->where('subject_id',$subject)
                        ->get();
                
            $subject = DB::table('category')
                            ->where('class_id',$class)
                            ->where('subject_id',$subject)
                            ->first();

            $class = DB::table('category')
                            ->where('class_id',$class)
                            ->get();

                

             


               return view('class_category.class_subject')          
                ->with('users10', $users10)
                ->with('classes',$class)
                ->with('subjects',$subject)
                ->with('chapters',$chapter);
                

          }

         
}
