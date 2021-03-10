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
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
