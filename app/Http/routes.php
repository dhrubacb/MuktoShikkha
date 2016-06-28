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
Route::get('qs', ['as' => 'qs', 'uses' => 'pagecontroller@qs']);



});


Route::get('login', ['as' =>'login','uses' => 'pagecontroller@login']);
Route::post('dologin', ['as' => 'dologin', 'uses' => 'Auth\AuthController@doLogin']); 



Route::get('home', ['as' => 'home',   'uses' => 'pagecontroller@home']);
Route::post('postregister',['as' => 'postregister',
 'uses'=>'logincontroller@postRegister']);
Route::get('register',['as' => 'register', 'uses' =>'pagecontroller@register']);
Route::get('test', ['as' => 'test',   'uses' => 'pagecontroller@test']);


Route::get('question/create',['as'=>'question.create', 'uses' =>'QuesController@create']);
Route::post('question/store',['as'=>'question.store', 'uses' =>'QuesController@store']);

Route::post('answer/store',['as'=>'asi', 'uses' =>'qfeedcon@store']);


Route::get('allquestion', ['as' => 'ques_feed.new_ques', 'uses' => 'qfeedcon@index']);
Route::get('question/{id}' ,['as' => 'a2q' , 'uses' => 'qfeedcon@a2q']);


?>