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
    return view('layouts.admin.master');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');
    // Route::resource('user', 'Admin\UserController');
    Route::resource('role', 'Admin\RoleController');
});

Route::prefix('datatable')->group(function () {
    // Route::get('user-datatable', 'DataTable\UserDataTableController@index')->name('datatable.users');
    Route::get('role-datatable', 'DataTable\RoleDataTableController@index')->name('datatable.role');
});
