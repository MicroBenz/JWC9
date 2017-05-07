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

Route::get('registrant_amount', 'StatController@getTeamRegisterAmount');
Route::get('qualifies', 'QualifyController@getQualifies');

Route::get('results', 'Grader\RankController@getRankAPI');


Route::post('uploadslip/{facebookUniqueID}', 'AnnouncementController@uploadslip');

Route::group(['middleware' => 'jwt.auth'], function () {
    // This route group is protected by JWT Authentication. 
    Route::get('token_tests', function(){
        return "has token";
    });

    Route::get('register/data', 'ProfileController@getProfile');
    // Route::post('register', 'ProfileController@createProfile');
    Route::put('register', 'ProfileController@updateProfile');
    Route::post('register/complete', 'ProfileController@lockProfile');
    Route::post('register/profilepicture', 'ProfileController@updateProfilePicture');

    Route::post('questions/design_picture', 'QuestionController@uploadPictureAnswer');
    Route::get('questions/{team}', 'QuestionController@getTeamQuestionWithAnswer');
    Route::post('questions', 'QuestionController@answer');
});
