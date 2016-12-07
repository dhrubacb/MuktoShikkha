<?php


use Illuminate\Http\Request;
use App\User;

/********************************    ******************************/
 
Route::group(array('middleware' => 'guest'), function()
{
 Route::get('login', ['as' =>'login','uses' => 'pagecontroller@login']);
Route::post('dologin', ['as' => 'dologin', 'uses' => 'Auth\AuthController@doLogin']); 

});
/******************************************  ***************************/



Route::group(array('middleware' => 'auth'), function()
{

		Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);

		Route::get('userhome/{email}', ['as' => 'userhome',   'uses' => 'pagecontroller@userhome']);

		Route::get('userabout', ['as' => 'userabout',   'uses' => 'pagecontroller@userabout']);

		Route::get('usercontact', ['as' => 'usercontact',   'uses' => 'pagecontroller@usercontact']);

});


Route::get('api/section-dropdown', ['as' => 'apiroute', 'uses' => 'QuesController@sectionDropDownData' ]);
Route::get('chapter-dropdown', ['as' => 'aproute', 'uses' => 'QuesController@sectionDrop' ]);

Route::get('qs', ['as' => 'qs', 'uses' => 'pagecontroller@qs']);

Route::get('question/create',['as'=>'question.create', 'uses' =>'QuesController@create']);
Route::get('ques_update/{id}',['as'=>'question.update', 'uses' =>'QuesController@edit_ques']);
Route::put('update{id}',['as'=>'update', 'uses' =>'QuesController@update']);
Route::post('question/store',['as'=>'question.store', 'uses' =>'QuesController@store']);

Route::post('question/1/store',function(Request $request){
    $task =  DB::table('answer')->insert($request);

    return Response::json($task);
});

Route::post('answer/store',['as'=>'answer.store', 'uses' =>'qfeedcon@store']);


Route::get('home', ['as' => 'index', 'uses' => 'qfeedcon@index']);
Route::post('postregister',['as' => 'postregister',
 'uses'=>'logincontroller@postRegister']);
Route::get('test', ['as' => 'test',   'uses' => 'pagecontroller@test']);



Route::get('allquastionsort/newest', ['as' => 'newest', 'uses' => 'QuesPageController@index']);
Route::get('allquastionsort/noans', ['as' => 'noans', 'uses' => 'QuesPageController@noAns']);
Route::get('allquastionsort/votes', ['as' => 'votes', 'uses' => 'QuesPageController@votes']);

Route::get('question/{id}' ,['as' => 'a2q' , 'uses' => 'qfeedcon@a2q']);

Route::get('category/{class}' ,['as' => 'classcategory' , 'uses' => 'qfeedcon@category_class']);
Route::get('category/{class}/{subject}' ,['as' => 'subjectcategory' , 'uses' => 'qfeedcon@category_subject']);

Route::get('register',['as' => 'register', 'uses' =>'pagecontroller@register']);

Route::post('postuserhome', ['as' => 'postuserhome',   'uses' => 'pagecontroller@postuserhome']);

Route::post('postregister',['as' => 'postregister','uses'=>'logincontroller@postRegister']);

Route::post('messagestore', ['as' => 'messagestore',   'uses' => 'pagecontroller@messagestore']);


//Exam

Route::get('create/exam',['as' => 'exam.create', 'uses' =>'ExamController@create']);
Route::post('exam/create',['as' => 'exam.store', 'uses' =>'ExamController@store']);
Route::get('exam/home',['as' => 'exam.feed', 'uses' =>'ExamController@index']);

Route::put('exam/finish/{id}',['as' => 'exam.finish', 'uses' =>'ExamController@finish']);

Route::get('exam/{id}/create',['as' => 'quizques', 'uses' =>'ExamController@question_create']);
Route::post('quizques/store',['as' => 'quizques/store', 'uses' =>'ExamController@question_store']);

Route::get('exam/{id}/preview',['as' => 'exam.preview', 'uses' =>'ExamController@exam_preview']);
?>