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

Route::get('/', function () {
    return view('welcome');
})->name('home');//data show page
Route::get('about', function () {
    return view('aboutpage');
})->name('aboutname');
Route::get('/','Pagecontro@homefun')->name('home');
Route::get('about', 'Pagecontro@aboutfun')->name('about');

Route::get('contact', 'Pagecontro@contactfun')->name('contact');
Route::get('samplepost', 'Pagecontro@samplepostfun')->name('samplepost');