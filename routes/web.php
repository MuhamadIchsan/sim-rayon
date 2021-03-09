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
    return view('dashboard.index');
});

Route::resource('piket','PiketController');
Route::resource('kumpul_rayon','KumpulRayonController'); 
Route::resource('absen_piket','AbsenPiketController');
Route::resource('absen_rayon','AbsenRayonController');
Route::resource('rayon','RayonController');
Route::resource('user','UserController');
Route::resource('pembimbing','PembimbingController');