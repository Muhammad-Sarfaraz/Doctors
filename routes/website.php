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

/**
 * Frontend Routes List 
 * @Frontend 
 * @Custom Routes .php
 * @created by sarfarz
 */

 //Doctor
 Route::group([
    'namespace' => 'Frontend',
    
],function () {

 Route::get('/account/register/doctor','FrontendController@doctorCreate')->name('front.doctor.create');
 
 //User
 Route::get('/account/register/user','FrontendController@userCreate')->name('front.user.create');

 //Login
 Route::get('/account/login','FrontendController@login')->name('front.doctor.create');

});