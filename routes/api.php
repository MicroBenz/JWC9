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

    Route::get('register/data', 'ProfileController@getProfile');
    Route::post('register', 'ProfileController@createProfile');
    Route::put('register', 'ProfileController@updateProfile');
    Route::post('register/complete', 'ProfileController@lockProfile');
    Route::post('register/profilepicture', 'ProfileController@updateProfilePicture');

    Route::get('questions/{team}', 'QuestionController@getTeamQuestionWithAnswer');
    Route::post('questions', 'QuestionController@answer');
});
