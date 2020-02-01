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

Route::get('/search', function () {
    return view('frontend.search');
});

Route::get('/', function () {
    return view('frontend.home');
});

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin',
    'middleware' => 'auth',
],function () {

//Home Routes
Route::get('/','HomeController@index')->name('dashboard');
Route::get('/home','HomeController@index')->name('dashboard');




//Doctor Routes
Route::get('/doctor','DoctorController@index')->name('doctor.index');
Route::get('/doctor/create','DoctorController@create')->name('doctor.create');
Route::post('/doctor/store','DoctorController@store')->name('doctor.store');
Route::post('/doctor/show','DoctorController@show')->name('doctor.show');
Route::get('/doctor/edit','DoctorController@edit')->name('doctor.edit');
Route::get('/doctor/update','DoctorController@update')->name('doctor.update');
Route::get('/doctor/destroy','DoctorController@destroy')->name('doctor.destroy');

//Setting Routes
Route::get('/setting','SettingController@index')->name('setting.index');

//Setting(Pages Setting)
Route::get('/setting/pages','SettingController@pages_Index')->name('setting.pages.index');

//Setting(Website Setting)
Route::get('/setting/website-settings','SettingController@website_Setting')->name('setting.site.index');
Route::post('/setting/website-settings/store','SettingController@store')->name('setting.site.store');

//Setting(Backup)
Route::get('/setting/backup','SettingController@backup')->name('setting.backup.index');
Route::get('/backup/{code}',function($code){

    if($code=="setPassword7854120"){
        return redirect('http://127.0.0.1:8000/backend/backup/backup.php');
    }

});
//System User
Route::get('/system/user/index','SystemUserController@index')->name('system.user.index');
Route::get('/system/user/create','SystemUserController@create')->name('system.user.create');
Route::post('/system/user/store','SystemUserController@create')->name('system.user.store');
Route::get('/system/user/add','SystemUserController@destroy')->name('system.user.destroy');
Route::get('/system/user/add','SystemUserController@update')->name('system.user.update');




});


//