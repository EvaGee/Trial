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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','HomeController@home');
Route::post('/login','HomeController@login');
Route::post('/retrieve','HomeController@retrieve');
Route::get('/getall','HomeController@allfields');
Route::get('/shop', 'PayController@shop');
Route::post('/register', 'PayController@pay');
Route::post('/retrieves', 'PayController@retrieve');
Route::get('/paid','PayController@paid');