<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Site;
//use App\Http\Controllers\HomeController;



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
Route::get('about','Site@about');
