<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('registation', 'RegistraionController@index');

Route::get('registation/{id}', 'RegistraionController@show');

Route::post('registation','RegistraionController@store');

Route::put('registation/{id}','RegistraionController@update');

Route::delete('registation/{id}', 'RegistraionController@delete');


Route::post('login', ['as'=>'xsa','uses'=>'UserController@login']);

Route::post('register', 'UserController@register');



Route::group(['middleware' => 'auth:api'], function(){

	Route::post('details', 'UserController@details');

});

Route::group(['middleware' => 'cors'], function(){

    Route::get('registation', 'RegistraionController@index');   
    Route::get('registation/{id}', 'RegistraionController@show');

});