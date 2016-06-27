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
use Illuminate\Contracts\Encryption\DecryptException;
//
Route::get('/', function () {
    return view('welcome');
});

//
Route::get('/dashboard', function () {

  if (Auth::user() == false){
  header( 'Location: /auth/login');
  exit;
  }
  //test get pass
  $user1 = Auth::user();
  $user_id = $user1->id - 1;
  $password_db = DB::table('users')->select('password')->get();
  $user_pass = $password_db[$user_id - 1];

    return view('dashboard',  [
      'user' => Auth::user(),
      'password_user' => $user_pass->password
    ]);
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



Route::resource('dashboard','UserController');
