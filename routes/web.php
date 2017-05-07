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
    return view('app');
});

Route::get('/coming-soon', function () {
    return view('landing');
});

Route::post('subscribe', 'SubscribeController@insert');
// Route::get('/callback/{team}', 'SocialAuthController@callback');
// Route::get('/login/{team}', 'SocialAuthController@redirect');
Route::post('authen/{team}', 'SocialAuthController@authen');
Route::post('approve-authen', 'SocialAuthController@approveAuthen');


Route::get('qualifies', 'QualifyController@getQualifies');

Route::group(['prefix' => 'wearehiring'], function () {
	Route::get('login', 'Grader\LoginController@getLogin');
	Route::get('logout', 'SocialAuthController@logout');
	Route::get('login/redirect', 'SocialAuthController@redirect_for_login');
	Route::get('login/callback', 'SocialAuthController@login');
	Route::get('register/{team}/callback', 'SocialAuthController@register');
	Route::get('register/{team}', 'SocialAuthController@redirect_for_register');
	// Route::post('login', 'Grader\LoginController@authenticate');

	Route::get('dashboard', 'Grader\DashboardController@getIndex');
	// Route::get('sneakpeek', 'Grader\SneakpeekController@getIndex');
	// Route::get('sneakpeek/{secret}', 'Grader\SneakpeekController@getInfo');
	Route::get('grading', 'Grader\GradingController@getIndex');
	Route::get('grading/{secret}/{bypass?}', 'Grader\GradingController@getAnswer');
	Route::post('grading', 'Grader\GradingController@postScore');
	Route::get('romeo-alfa-november-kilo', 'Grader\RankController@getIndex');
	Route::get('tracking', 'Grader\ProgressController@getIndex');
	Route::get('slip', 'Grader\SlipController@getIndex');
	Route::get('slip/{secret}', 'Grader\SlipController@getSlip');
	Route::post('slip', 'Grader\SlipController@postCheck');
});

Route::get('/{any}', function() { return view('app'); })->where('any', '.*');
