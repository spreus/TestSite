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
 * Available router methods:
  Route::get($uri, $callback);
  Route::post($uri, $callback);
  Route::put($uri, $callback);
  Route::patch($uri, $callback);
  Route::delete($uri, $callback);
  Route::options($uri, $callback);
 * 
 * routes that responds to multiple http verbs
  Route::match(['get', 'post'], '/', function () {});
  Route::any('foo', function () {});
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/test', 'HomeController@testView');
