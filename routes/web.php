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

Route::get('/admin', function () {
    return view('layouts.admin.master');
});

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/', function(){
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog_details', function () {
    return view('blog_details');
});

Route::get('/course', function () {
    return view('course');
});
Route::get('/ABOUTUS', function () {
    return view('about_us');
});
Route::get('/profile',function(){
    return view('dashboard.profile');
});
Route::get('/master_kepegaiawan',function(){
    return view('master.kepegawaian');
});
Route::get('/master_kesiswaan',function(){
    return view('master.kesiswaan');
});
Route::get('/master_mata_pelajaran',function(){
    return view('master.mata_pelajaran');
});