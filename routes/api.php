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

Route::group(['middleware' => 'jwt.auth'], function () {
    // This route group is protected by JWT Authentication. 
    Route::get('token_tests', function(){
        return "has token";
    });

    Route::post('register', 'ProfileController@createProfile');
});
