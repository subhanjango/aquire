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
//Index page
Route::get('/home', 'Web\HomeController@newsfeed');
Route::post('userInterest', 'Web\UserController@userInterest');
//Shop index page
Route::get('/shop', 'Web\ShopController@shop');
//uploads
Route::post('coverUpload', 'Web\UserController@coverUpload');
Route::post('userUpload', 'Web\UserController@userUpload');
//products
Route::get('products/add', 'Web\ShopController@add');
//bye bye
Route::get('logout', 'Web\AuthController@logout');

 }); 