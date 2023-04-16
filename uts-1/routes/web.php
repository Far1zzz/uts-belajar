<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/fakultas', function () {
    // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer Dan Rekayasa"]);
    // return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas Ilmu Ekonomi"]]);

    $kampus = "Universitas Multi Data Palembang";
    $fakultas = ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas Ilmu Ekonomi"];
    return view('fakultas.index', compact('fakultas', 'kampus'));
});

Route::get('/prodi', [ProdiController::class, 'index']);

//DB Facade
Route::get('/mahasiswa/insert', [MahasiswaController::class, 'insert']);
Route::get('/mahasiswa/update', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/delete', [MahasiswaController::class, 'delete']);
Route::get('/mahasiswa/select', [MahasiswaController::class, 'select']);

//query builder
Route::get('/mahasiswa/insert-qb', [MahasiswaController::class, 'insertQb']);
Route::get('/mahasiswa/update-qb', [MahasiswaController::class, 'updateQb']);
Route::get('/mahasiswa/delete-qb', [MahasiswaController::class, 'deleteQb']);
Route::get('/mahasiswa/select-qb', [MahasiswaController::class, 'selectQb']);


//eloquent
//eloquent membutuhkan model untuk konversi data tabel mahasiswa menjadi object.
//object akan diakses dari controller
Route::get('/mahasiswa/insert-elq', [MahasiswaController::class, 'insertElq']);
Route::get('/mahasiswa/update-elq', [MahasiswaController::class, 'updateElq']);
Route::get('/mahasiswa/delete-elq', [MahasiswaController::class, 'deleteElq']);
Route::get('/mahasiswa/select-elq', [MahasiswaController::class, 'selectElq']);

Route::get('/peserta', [PesertaController::class, 'peserta']);

//get with relationship
Route::get('/users',  [UserController::class, 'index']);
