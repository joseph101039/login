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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'HomeController@index');
Route::get('/home/index', 'HomeController@index');
Route::get('/member/login', 'MembersController@login');
Route::post('/member/login', 'MembersController@postLogin');
Route::get('/home/members', 'HomeController@getMember');

