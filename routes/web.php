<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PerananController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BahagianController;
use App\Http\Controllers\KementerianController;
use App\Http\Controllers\PeringkatController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\NocController;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/setting/peranan', PerananController::class);
Route::resource('/setting/pengguna', UserController::class);
// Route::get('/setting/pengguna/delete/{id}', [\App\Http\Controllers\UserController::class, 'delete'])->name('pengguna.delete');
Route::resource('/setting/bahagian', BahagianController::class);
Route::resource('/setting/kementerian', KementerianController::class);
Route::resource('/setting/peringkat', PeringkatController::class);
Route::resource('/setting/kategori', KategoriController::class);
Route::resource('/setting/status', StatusController::class);

Route::resource('/noc', NocController::class)->except('show');
Route::get('/noc/tindakan', [\App\Http\Controllers\NocController::class, 'tindakan'])->name('noc.tindakan');
Route::get('/noc/detail/{id}', [\App\Http\Controllers\NocController::class, 'detail'])->name('noc.detail');
Route::get('/noc/delete/{id}', [\App\Http\Controllers\NocController::class, 'destroy'])->name('noc.delete');

//proses-noc-1
Route::put('/noc/semak/{id}', [\App\Http\Controllers\NocController::class, 'updateSemak'])->name('noc.updateSemak');
//proses-noc-2
Route::put('/noc/mohon-ulasan/{id}', [\App\Http\Controllers\NocController::class, 'updateMohonUlasan'])->name('noc.updateMohonUlasan');
//proses-noc-4
Route::put('/noc/semak-ulasan-bajet/{id}', [\App\Http\Controllers\NocController::class, 'updateSemakUlasanBajet'])->name('noc.updateSemakUlasanBajet');
//proses-noc-5
Route::put('/noc/semak-ulasan-teknikal/{id}', [\App\Http\Controllers\NocController::class, 'updateSemakUlasanTeknikal'])->name('noc.updateSemakUlasanTeknikal');
//proses-noc-5
Route::put('/noc/sedia-ulasan-bajet/{id}', [\App\Http\Controllers\NocController::class, 'updateSediaUlasanBajet'])->name('noc.updateSediaUlasanBajet');
//proses-noc-5
Route::put('/noc/sedia-ulasan-teknikal/{id}', [\App\Http\Controllers\NocController::class, 'updateSediaUlasanTeknikal'])->name('noc.updateSediaUlasanTeknikal');
//proses-noc-5
Route::put('/noc/hantar-ulasan-bajet/{id}', [\App\Http\Controllers\NocController::class, 'updateHantarUlasanBajet'])->name('noc.updateHantarUlasanBajet');
//proses-noc-5
Route::put('/noc/hantar-ulasan-teknikal/{id}', [\App\Http\Controllers\NocController::class, 'updateHantarUlasanTeknikal'])->name('noc.updateHantarUlasanTeknikal');
//proses-noc-6
Route::put('/noc/sedia-memo/{id}', [\App\Http\Controllers\NocController::class, 'updateSediaMemo'])->name('noc.updateSediaMemo');
//proses-noc-7
Route::put('/noc/hantar-memo/{id}', [\App\Http\Controllers\NocController::class, 'updateHantarMemo'])->name('noc.updateHantarMemo');
//proses-noc-8
Route::put('/noc/terima-memo/{id}', [\App\Http\Controllers\NocController::class, 'updateTerimaMemo'])->name('noc.updateTerimaMemo');
//proses-noc-9
Route::put('/noc/sedia-surat/{id}', [\App\Http\Controllers\NocController::class, 'updateSediaSurat'])->name('noc.updateSediaSurat');
//proses-noc-10
Route::put('/noc/hantar-surat/{id}', [\App\Http\Controllers\NocController::class, 'updateHantarSurat'])->name('noc.updateHantarSurat');
//proses-noc-11
Route::put('/noc/mohon-modul/{id}', [\App\Http\Controllers\NocController::class, 'updateMohonModul'])->name('noc.updateMohonModul');
