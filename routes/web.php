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

Route::get('/', 'pagecontroller@index');
  
/*
Route::get("ahmed", function () {
    return '<center><h1>the post</h1></center>';
    //return view('welcome');
});
Route::get("ahmed/pest",function(){
    return "<center><h1>the pest</h1></center>";
});*/
/*
Route::get('/about',function(){
	return view('pages/about');
});*/
Route::get('/about','pagecontroller@about');
Route::get('/services','pagecontroller@services');
