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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/hello', function() {
//   return 'Hello';
//});

/*Route::get('hello/world/{name?}', function($name = 'speedup')
{
    return 'hello world ' . $name;
});*/

//Route::get('hello/world/', function()
//{
////    return view('hello.html');
//    $users = [ 'name' => '유장식'];
//    $email = ['email' => 'speedup98@gmail.com'];
//    $tasks = ['tasks' => '퍽'];
//    return view('hello.html')
//        ->with('name', $users)
//        ->with('email', $email)
//        ->with('tasks', $tasks);
//
//});

Route::get('/', 'WelcomeController@index');
Route::auth();
Route::get('/home', 'HomeController@index');
