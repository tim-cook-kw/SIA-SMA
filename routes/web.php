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
Route::get('/jadwal_guru',function(){
    return view('akademik.jadwal_guru');
});
Route::get('/materi',function(){
    return view('akademik.materi');
});
Route::get('/tambah_siswa',function(){
    return view('akademik.tambah_siswa');
});
Route::get('/kelola_siswa',function(){
    return view('akademik.kelola_siswa');
});
Route::get('/kelola_nilai',function(){
    return view('akademik.kelola_nilai');
});
Route::get('/nilai_tugas',function(){
    return view('akademik.nilai_tugas');
});