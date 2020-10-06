<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Site;
use App\Http\Controllers\DBcontroller;



//Route::get('/', function () {
//   // return view('welcome');
//    return 'welcome to php';
//});

//Route::get('/about', function() {
//    return 'this is about page using function';
//});
//Route::get('/about/ars', function() {
//    return 'this is about page using function sub domain';
//});
Route::get('/','Site@index'); //v-7
//Route::get('/',[Site::class, 'index']);//v-8
//Route::get('ars','HomeController@ars');
//Route::get('test','HomeController@test');
Route::get('/about','Site@about');

//Second day
//redirect
Route::redirect('/red','user');
Route::get('/user','UserController@index');
Route::get('/user/adduser','UserController@adduser');
//Route::post('/user/store','UserController@store');
//Route::put('/user/store','UserController@store');
Route::patch('/user/store','UserController@store')->name('str');
//parameter
Route::get('parameter/{idd}','UserController@param')->where('idd', '[0-9]+');
Route::get('mulparameter/{id}/email/{email?}','UserController@mulparam')->where(['id' => '[0-9]+', 'email' => '[a-z]+']);
//group route
Route::prefix('admin')->group(function () {
    Route::get('/user','UserController@index');
});

Route::get('display',[DBcontroller::class, 'display']);
Route::get('add',[DBcontroller::class, 'insert']);