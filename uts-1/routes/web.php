<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
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

Route::get('/mahasiswa/insert', [MahasiswaController::class, 'insert']);
Route::get('/mahasiswa/update', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/delete', [MahasiswaController::class, 'delete']);
Route::get('/mahasiswa/select', [MahasiswaController::class, 'select']);


Route::get('/mahasiswa/insert-qb', [MahasiswaController::class, 'insertQb']);
Route::get('/mahasiswa/update-qb', [MahasiswaController::class, 'updateQb']);
Route::get('/mahasiswa/delete-qb', [MahasiswaController::class, 'deleteQb']);
Route::get('/mahasiswa/select-qb', [MahasiswaController::class, 'selectQb']);
