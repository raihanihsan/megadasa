<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/
/*
Route::get('/home', function () {
    return view('welcome');
});*/
Route::get('/home2', 'HomeController@index2');


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/article', 'HomeController@article');
Route::get('/contact', 'HomeController@contact');
Route::get('/profile', 'HomeController@profile');
Route::get('/detail/{id}', 'HomeController@detail');
//Route::auth();

//untuk Petugas 
//menampilkan View
//Route::get('/home', 'HomeController@index');

/*
Route::get('/showSetTglUjian', 'setTglUjianController@index');// menampilkan View Setting Tanggal Ujian
Route::get('/showSetRuangUjian', 'SetRuangUjianController@index');// menampilkan View Setting Ruang Ujian
Route::get('/showSetBidangIlmu', 'SetBidangIlmuController@index'); // menampilkan View Setting BidangIlmu
Route::get('/showSetJudul', 'SetJudulController@index');// menampilkan View Setting Judul

Route::get('/showFormInformasiMahasiswa', 'HistoriKeteranganController@index'); // menampilkan View Keterangan
Route::get('/showFormGantiJudul', 'JudulController@index'); // menampilkan View Keterangan
Route::get('/showregisterDosen', 'DosenController@index'); // menampilkan View Keterangan
Route::get('/showsettingPetugas', 'petugasController@index'); // menampilkan View Keterangan
Route::get('/checkAdministrasi', 'checkAdministrasiController@index'); // menampilkan View Keterangan

Route::post('/registerDosen', 'DosenController@store'); // menampilkan View Keterangan
Route::post('/registerBidangIlmu', 'SetBidangIlmuController@store');// insert bidang ilmu yang baru
Route::post('/registerJadwalUjianTA', 'setTglUjianController@store');//insert Jadwal Ujian Baru
Route::post('/registerJadwalRuang', 'setRuangUjianController@store');//insert Ruang Ujian Baru
Route::post('/inputInformasiMahasiswa', 'HistoriKeteranganController@store');//insert Histori Informasi Mahasiswa
Route::post('/settingPetugas', 'petugasController@store');//insert Histori Informasi Mahasiswa
Route::post('/inputJudulBaru', 'JudulController@store');//insert Histori Judul
Route::post('/registercheckAdministrasi', 'checkAdministrasiController@store');//insert Histori Judul

Route::get('/showAdministrasi', 'AdministrasiController@index'); // menampilkan View Setting Tanggal Ujian

Route::post('/regAdministrasi', 'AdministrasiController@store'); // menampilkan View Setting Tanggal Ujian


Route::get('/jadwalDosen', 'jadwalDosenController@index'); // menampilkan View Setting Tanggal Ujian
Route::post('/setjadwalDosen', 'jadwalDosenController@store'); // menampilkan View Setting Tanggal Ujian


Route::get('/generatejadwalujian', 'GeneticController@index'); // menampilkan View Setting Tanggal Ujian

*/
Route::auth();

Route::get('/home', 'HomeController@index');
