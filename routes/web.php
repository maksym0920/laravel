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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/testPost', function (Request $request) {
  var_dump($request->all());
  var_dump($request['a']);
  var_dump($request['b']);


  return "end";
});

Route::match(['get', 'post'],'/test3', function (Request $request) {
  return 'test3';
});

Route::get('/test1', 'TestController@someMethod');

Route::get('/test2/{qwe1}/{qwe2}', 'TestController@someMethod2');

