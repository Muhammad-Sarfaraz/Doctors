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

//Home
Route::get('/','HomeController@index')->name('dashboard');
Route::get('/home','HomeController@index')->name('dashboard');


//Setting
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



});