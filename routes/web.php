<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Site;
use App\Http\Controllers\DBcontroller;
use App\Http\Controllers\OrmPractice;
use App\Models\Post;


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
//Route::get('/about','Site@about');
//
////Second day
////redirect
//Route::redirect('/red','user');
//Route::get('/user','UserController@index');
//Route::get('/user/adduser','UserController@adduser');
////Route::post('/user/store','UserController@store');
////Route::put('/user/store','UserController@store');
//Route::patch('/user/store','UserController@store')->name('str');
////parameter
//Route::get('parameter/{idd}','UserController@param')->where('idd', '[0-9]+');
//Route::get('mulparameter/{id}/email/{email?}','UserController@mulparam')->where(['id' => '[0-9]+', 'email' => '[a-z]+']);
////group route
//Route::prefix('admin')->group(function () {
//    Route::get('/user','UserController@index');
//});
//
//Route::get('display',[DBcontroller::class, 'display']);
//Route::get('add',[DBcontroller::class, 'insert']);

//-----------------orm

Route::get('orm',[OrmPractice::class,'insert']);
Route::get('orm_get_post/{id}',[OrmPractice::class,'get_post']);

//Route::get('orm_insert',function(){
//    $data = [
//        'postname' => 'Welcoxxme toe dhak',
//        'desctiption' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum dignissimos assumenda maiores, amet laboriosam reprehenderit dicta autem ex fugiat impedit quaerat aspernatur illo ipsa enim a delectus itaque beatae iste!',
//        'user_id' => 2,
//        'status' => 1
//    ];
//    Post::create($data);
//});
Route::get('get_post',function(){
   $z =  Post::where('status' ,'1')->orderBy('post_id' ,'desc')->get();
    dd($z);
});