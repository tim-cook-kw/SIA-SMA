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
    return view('home');
});

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog_details', function () {
    return view('blog_details');
});

Route::get('/course', function () {
    return view('course');
});