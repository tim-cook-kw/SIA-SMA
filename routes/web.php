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
Route::post('add_kepegawaian','MasterController@kepegawaian');

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
Route::get('/master_kepegaiawan','MasterController@get_kepegawaian');
Route::post('/master_kepegaiawan/add/','MasterController@Kepegawaian');
Route::get('/master_kepegaiawan/{id}','MasterController@hapus_kepegawaian');
Route::post('/master_kepegaiawan/update/','MasterController@update_kepegawaian');

Route::get('/master_kesiswaan','MasterController@get_kesiswaan');
Route::post('/master_kesiswaan/add','MasterController@kesiswaan');
Route::get('/master_kesiswaan/{id}','MasterController@hapus_kesiswaan');
Route::post('/master_kesiswaan/update/','MasterController@update_kesiswaan');

Route::get('/master_mata_pelajaran','MasterController@get_mata_pelajaran');
Route::post('/master_mata_pelajaran/add','MasterController@mata_pelajaran');
Route::get('/master_mata_pelajaran/{id}','MasterController@hapus_mata_pelajaran');
Route::post('/master_mata_pelajaran/update/','MasterController@update_mata_pelajaran');


Route::get('/jadwal_guru','MasterController@get_jadwal_pelajaran');
Route::post('/jadwal_guru/add','MasterController@jadwal_pelajaran');
Route::get('/jadwal_guru/{id}','MasterController@hapus_jadwal_guru');
Route::post('/jadwal_guru/update/','MasterController@update_jadwal_guru');







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
Route::get('/program',function(){
    return view('dashboard.program');
});
Route::get('/news',function(){
    return view('dashboard.news');
});

