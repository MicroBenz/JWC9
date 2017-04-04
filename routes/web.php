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

Route::get('/{any}', function() { return view('app'); })->where('any', '.*');
