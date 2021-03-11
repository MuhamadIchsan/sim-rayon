<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::middleware('auth')->group(function(){
    Route::resource('dashboard','DashboardController');
    Route::resource('piket','PiketController');
    Route::resource('kumpul_rayon','KumpulRayonController'); 
    Route::resource('absen_piket','AbsenPiketController');
    Route::resource('absen_rayon','AbsenRayonController');
    Route::resource('rayon','RayonController');
    Route::resource('user','UserController');
    Route::get('/jadwalpiket', 'PenggunaController@jadwal_piket')->name('pengguna.jadwal_piket');
    Route::get('/jadwalkumpul', 'PenggunaController@jadwal_kumpul')->name('pengguna.jadwal_kumpul');
    Route::get('/absenpiket', 'PenggunaController@absen_piket')->name('pengguna.absen_piket');
    Route::get('/absenrayon', 'PenggunaController@absen_rayon')->name('pengguna.absen_rayon');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
