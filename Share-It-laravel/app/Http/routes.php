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

Route::group(['middleware' => ['web']], function () {
  Route::get('/', function () {
      return view('welcome');
  });
//Sign Up Route that goes to mySQL DB
  Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
  ]);
//Sign-In Route
  Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
  ]);
//Route that forwards user to the Dashboard
  Route::get('/dashboard', [
    'uses' => 'UserController@getDashboard',
    'as' => 'dashboard'
  ]);
});
