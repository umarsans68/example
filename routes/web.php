<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\AlkerController;
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
    return view('welcome');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/karyawan',[KaryawanController::class,'index']);
Route::get('/karyawan/create',[KaryawanController::class,'create']);
Route::post('/karyawan/store',[KaryawanController::class,'store']);
Route::get('/karyawan/{id}/edit',[KaryawanController::class,'edit']);
Route::put('/karyawan/{id}',[KaryawanController::class,'update']);
Route::delete('/karyawan/{id}',[KaryawanController::class,'destory']);

Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi.index');
Route::get('/presensi/create', [PresensiController::class, 'create'])->name('presensi.create');
Route::post('/presensi/store', [PresensiController::class, 'store'])->name('presensi.store');
Route::get('/presensi/{id}', [PresensiController::class, 'show'])->name('presensi.show');
Route::get('/presensi/{id}/edit', [PresensiController::class, 'edit'])->name('presensi.edit');
Route::put('/presensi/{id}/update', [PresensiController::class, 'update'])->name('presensi.update');
Route::delete('/presensi/{id}/delete', [PresensiController::class, 'destroy'])->name('presensi.destroy');

Route::resource('alker', AlkerController::class);
Route::middleware(['auth'])->group(function () {
    Route::resource('alker', AlkerController::class);
});