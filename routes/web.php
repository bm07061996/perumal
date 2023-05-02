<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/','App\Http\Controllers\ServiceController@show')->name('service.show');
Route::get('member/add', 'App\Http\Controllers\MemberController@add')->name('member.add');
Route::post('member/save', 'App\Http\Controllers\MemberController@save')->name('member.save');
Route::any('services', 'App\Http\Controllers\ServiceController@show')->name('service.show');
Route::any('contactus', 'App\Http\Controllers\ContactController@show')->name('contact.show');