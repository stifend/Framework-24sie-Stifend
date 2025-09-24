<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


Route::get('/', function () {
    return view('welcome');
});
// Route::get(: '/pcr', function () {
//     return 'Selamat Datang di Website Kampus PCR!';
// });
Route::get( '/mahasiswa/{param1}',[MahasiswaController::class, 'show']);


Route::get('/nama/{param1}/nim', function ($param1, $nim) {
    return 'Nama saya: '.$param1. '<br>NIM saya: '.$nim;
});
Route::get('/nim/{param1?}', function ($faham = '') {
    return 'NIM saya: '.$faham;
});
Route::get( '/about',function () {
    return view ('halaman-about');
});
