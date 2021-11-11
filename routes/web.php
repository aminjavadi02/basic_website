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
$address = 'App\Http\Controllers\pagesController';
Route::get('/', $address.'@getWelcome')->name('welcome');
Route::get('/home', $address.'@getHome')->name('home');
Route::get('/contact',$address.'@getContact')->name('contact');
Route::get('/about',$address.'@getAbout')->name('about');

$address = "App\Http\Controllers\contactController";
Route::get('/contact/messages',$address.'@getMessages')->name('get-messages');
Route::post('/contact/submit',$address.'@submit')->name('contact-form-submit');