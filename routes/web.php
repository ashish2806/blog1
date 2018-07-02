<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	//dd('gg');
    return view('welcome');
});


Route::get('/task', function () {
	$task = DB::table('tasks')->get();
	dd($task);	
    return view('welcome');
});

Route::get('/Admin',['as'=>'dashboard','uses'=>'DashboardController@index']);

	Route::get('/Admin/Account/create',['as'=>'account.create','uses'=>'AccountController@create']);
Route::group(['namespace'=>'Admin'],function(){
	

	});
