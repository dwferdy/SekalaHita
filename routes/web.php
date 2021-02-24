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

Route::get('/mahasiswa/dosbim', [MahasiswaController::class, 'DosenPembimbing']);
Route::get('/dosen', [DosenController::class,'getAllDosen']);
Route::get('/mahasiswa', [MahasiswaController::class,'getAllMahasiswa']);
Route::get('/matakuliah', [MatakuliahController::class,'getAllMatakuliah']);
Route::get('/matakuliah/nama', [MatakuliahController::class,'getMatakuliah']);
//Get dosen by id
Route::get('/dosen/update', [DosenController::class, 'updateDosen']);
Route::get('/dosen/create', [DosenController::class , 'CreateDosen1']);
Route::get('/dosen/insert', [DosenController::class, 'InsertDosen']);
Route::get('/dosen/{id}', [DosenController::class, 'getDosenId']);
Route::get('mahasiswa/update1', [MahasiswaController::class, 'updateMahasiswa1']);
//get 5 data mahasiswa
Route::get('mahasiswa/5', [MahasiswaController::class, 'getMahasiswa5']);
Route::get('matakuliah/nama', [MatakuliahController::class, 'getMatakuliah']);
Route::get('matakuliah/create', [MatakuliahController::class, 'createMatakuliah']);
Route::get('mahasiswa/create', [MahasiswaController::class, 'createMahasiswa']);
Route::get('mahasiswa/update', [MahasiswaController::class, 'updateMahasiswa']);
Route::get('mahasiswa/delete1', [MahasiswaController::class, 'DeleteMahasiswa1']);
Route::get('mahasiswa/delete', [MahasiswaController::class, 'DeleteMahasiswa']);

Route::get('matakuliah/jadwal', [MatakuliahController::class, 'matkuljadwal']);
Route::get('matakuliah/jadwal1', [MatakuliahController::class, 'matkuljadwal1']);







