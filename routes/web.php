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
    Route::resource('class', 'Admin\ClassController');
    Route::resource('staff', 'Admin\StaffingController');
    Route::resource('student', 'Admin\StudentController');
});

Route::prefix('datatable')->group(function () {
    // Route::get('user-datatable', 'DataTable\UserDataTableController@index')->name('datatable.users');
    Route::get('role-datatable', 'DataTable\RoleDataTableController@index')->name('datatable.role');
    Route::get('class-datatable', 'DataTable\ClassDataTableController@index')->name('datatable.class');
    Route::get('staff-datatable', 'DataTable\StaffingDataTableController@index')->name('datatable.staff');
    Route::get('student-datatable', 'DataTable\StudentDataTableController@index')->name('datatable.student');
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
Route::post('/master_kepegaiawan/update/{id}','MasterController@update_kepegawaian');

Route::get('/master_kesiswaan','MasterController@get_kesiswaan');
Route::post('/master_kesiswaan/add','MasterController@kesiswaan');
Route::get('/master_kesiswaan/{id}','MasterController@hapus_kesiswaan');
Route::post('/master_kesiswaan/update/','MasterController@update_kesiswaan');

Route::get('/master_mata_pelajaran','MasterController@get_mata_pelajaran');
Route::post('/master_mata_pelajaran/add','MasterController@mata_pelajaran');
Route::get('/master_mata_pelajaran/{id}','MasterController@hapus_mata_pelajaran');
Route::post('/master_mata_pelajaran/update/{id}','MasterController@update_mata_pelajaran');

Route::get('/master_absen','MasterController@get_absen');
Route::post('/master_absen/add','MasterController@absen');
Route::get('/master_absen/del/{id}','MasterController@hapus_absen');
Route::post('/master_absen/update/','MasterController@update_absen');


Route::get('/akademik_jadwal_guru','AkademikController@get_jadwal_guru');
Route::post('/akademik_jadwal_guru/add','AkademikController@jadwal_guru');
Route::get('/akademik_jadwal_guru/{id}','AkademikController@hapus_jadwal_guru');
Route::post('/akademik_jadwal_guru/update/','AkademikController@update_jadwal_guru');

Route::get('/akademik_kelola_nilai','AkademikController@get_kelola_nilai');
Route::post('/akademik_kelola_nilai/add','AkademikController@kelola_nilai');
Route::get('/akademik_kelola_nilai/{id}','AkademikController@hapus_kelola_nilai');
Route::post('/akademik_kelola_nilai/update/','AkademikController@update_kelola_nilai');

Route::get('/akademik_kelola_kelas','AkademikController@get_kelola_kelas');
Route::post('/akademik_kelola_kelas/add','AkademikController@kelola_kelas');
Route::get('/akademik_kelola_kelas/del/{id}','AkademikController@hapus_kelola_kelas');
Route::post('/akademik_kelola_kelas/update/','AkademikController@update_kelola_kelas');

Route::get('/akademik_materi','AkademikController@get_materi');
Route::post('/akademik_materi/add','AkademikController@materi');
Route::get('/akademik_materi/del/{id}','AkademikController@hapus_materi');
Route::post('/akademik_materi/update/','AkademikController@update_materi');

Route::get('/akademik_nilai_tugas','AkademikController@get_nilai_tugas');
Route::post('/akademik_nilai_tugas/add','AkademikController@nilai_tugas');
Route::get('/akademik_nilai_tugas/{id}','AkademikController@hapus_nilai_tugas');
Route::post('/akademik_nilai_tugas/update/','AkademikController@update_nilai_tugas');

Route::get('/akademik_tambah_siswa','AkademikController@get_tambah_siswa');
Route::post('/akademik_tambah_siswa/add','AkademikController@tambah_siswa');
Route::get('/akademik_tambah_siswa/del/{id}','AkademikController@hapus_tambah_siswa');
Route::post('/akademik_tambah_siswa/update/','AkademikController@update_tambah_siswa');

Route::get('/master_parent','MasterController@get_parent');
Route::post('/master_parent/add','MasterController@parent');
Route::get('/master_parent/del/{id}','MasterController@hapus_parent');
Route::post('/master_parent/update/','MasterController@update_parent');

Route::get('/dashboard_news','DashboardController@get_news');
Route::post('/dashboard_news/add','DashboardController@news');
Route::get('/dashboard_news/del/{id}','DashboardController@hapus_news');
Route::post('/dashboard_news/update/{id}','DashboardController@update_news');

Route::get('/dashboard_program','DashboardController@get_program');
Route::post('/dashboard_program/add','DashboardController@program');
Route::get('/dashboard_program/del/{id}','DashboardController@hapus_program');
Route::post('/dashboard_program/update/{id}','DashboardController@update_program');



Route::get('/nilai_tugas',function(){
    return view('akademik.nilai_tugas');
});

Route::get('/dashboard/teacher',function(){
    return view('teacher');
});
Route::get('/dashboard/contact_us',function(){
    return view('contact');
});
Route::get('/dashboard/about',function(){
    return view('about_us');
});
