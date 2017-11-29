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


Auth::routes();

Route::group(['middleware' => 'userauth'], function () { 
Route::get('/', function () {
    return view('web.welcome');
});
Route::get('login/facebook', 'Web\AuthController@redirectToProvider');
Route::get('login/facebook/callback', 'Web\AuthController@handleProviderCallback');
Route::post('register-user', 'Web\AuthController@signUp');
Route::post('register-login', 'Web\AuthController@signIn');
 }); 

 Route::group(['middleware' => 'notlogged'], function () {

Route::get('/home', 'Web\HomeController@newsfeed');
Route::get('/shop', 'Web\ShopController@shop');
Route::post('userInterest', 'Web\UserController@userInterest');

 }); 