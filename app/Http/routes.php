<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::resource('question','QuesController');
Route::get('question/create',['as'=>'question.create', 'uses' =>'QuesController@create']);
Route::post('question/store',['as'=>'question.store', 'uses' =>'QuesController@store']);


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister'); 

Route::get('allquestion', ['as' => 'ques_feed.new_ques', 'uses' => 'qfeedcon@index']);
Route::get('question/{id}' ,['as' => 'a2q' , 'uses' => 'qfeedcon@a2q']);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ass', function () {
    return view(answer\a2q);
});
