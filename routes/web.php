<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

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
    return view('welcome');
});

Route::get('/dosen', [DosenController::class,'getAllDosen']);
Route::get('/mahasiswa', [MahasiswaController::class,'getAllMahasiswa']);
Route::get('/matakuliah', [MatakuliahController::class,'getAllMatakuliah']);
Route::get('/matakuliah/nama', [MatakuliahController::class,'getMatakuliah']);
//Get dosen by id
route::get('/dosen/{id}', [DosenController::class, 'getDosenId']);
//get 5 data mahasiswa
route::get('mahasiswa/5', [MahasiswaController::class, 'getMahasiswa5']);
route::get('matakuliah/nama', [MatakuliahController::class, 'getMatakuliah']);




