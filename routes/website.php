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

 Route::get('/account/register/doctor','FrontendController@doctorCreate')->name('account.doctor.create');
 
 //User
 Route::get('/account/register/user','FrontendController@userCreate')->name('account.user.create');
 

 //Login
 Route::get('/account/login','FrontendController@userLogin')->name('account.user.login');
 Route::get('/account/doctor/login','FrontendController@doctorLogin')->name('account.doctor.login');

});








//General User
Route::group([
    'namespace' => 'Backend',
    
],function () {
    //Login
Route::post('/account/login/post','UserController@login')->name('user.login.post');
//Store
Route::post('/account/register/user/store','UserController@store')->name('account.user.register');
Route::post('/account/register/doctor/store','DoctorController@store')->name('account.doctor.register');

//Route::get('/user','UserController@index')->name('user.index');
});





Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin',
    'middleware' => 'auth',
    
],function () {
Route::post('','UserController@store')->name('account.user.register');
Route::get('/account/register/doctor/store','DoctorController@store')->name('account.doctor.register');


});


Route::group([
    'namespace' => 'Backend',
    
    
],function () {


    Route::get('/user','UserController@index')->name('user.index');


    //Search
    Route::post('/search','SearchController@index')->name('search.index');
    // Route::any('/search',function(){
    //     $q = Input::get ( 'keywords' );

    //     echo $q;
    // })->name('search.index');
    Route::post('/doctor/store','DoctorController@store')->name('doctor.store');

});