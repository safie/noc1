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
//proses-noc-1
Route::get('/noc/semak/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editSemak'])->name('noc.editSemak');
Route::put('/noc/semak/{id}', [\App\Http\Controllers\NocController::class, 'updateSemak'])->name('noc.updateSemak');
//proses-noc-2
Route::get('/noc/mohon-ulasan-bajet/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editMohonUlasanBajet'])->name('noc.editMohonUlasanBajet');
Route::put('/noc/mohon-ulasan-bajet/{id}', [\App\Http\Controllers\NocController::class, 'updateMohonUlasanBajet'])->name('noc.updateMohonUlasanBajet');
//proses-noc-3
Route::get('/noc/mohon-ulasan-bajettek/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editMohonUlasanBajetTeknikal'])->name('noc.editMohonUlasanBajetTeknikal');
Route::put('/noc/mohon-ulasan-bajettek/{id}', [\App\Http\Controllers\NocController::class, 'updateMohonUlasanBajetTeknikal'])->name('noc.updateMohonUlasanBajetTeknikal');
//proses-noc-4
Route::get('/noc/semak-ulasan-bajet/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editSemakUlasanBajet'])->name('noc.editSemakUlasanBajet');
Route::put('/noc/semak-ulasan-bajet/{id}', [\App\Http\Controllers\NocController::class, 'updateSemakUlasanBajet'])->name('noc.updateSemakUlasanBajet');
//proses-noc-5
Route::get('/noc/semak-ulasan-teknikal/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editSemakUlasanTeknikal'])->name('noc.editSemakUlasanTeknikal');
Route::put('/noc/semak-ulasan-teknikal/{id}', [\App\Http\Controllers\NocController::class, 'updateSemakUlasanTeknikal'])->name('noc.updateSemakUlasanTeknikal');
//proses-noc-5
Route::get('/noc/sedia-ulasan/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editSediaUlasan'])->name('noc.editSediaUlasan');
Route::put('/noc/sedia-ulasan/{id}', [\App\Http\Controllers\NocController::class, 'updateSediaUlasan'])->name('noc.updateSediaUlasan');
//proses-noc-5
Route::get('/noc/hantar-ulasan/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editHantarUlasan'])->name('noc.editHantarUlasan');
Route::put('/noc/hantar-ulasan/{id}', [\App\Http\Controllers\NocController::class, 'updateHantarUlasan'])->name('noc.updateHantarUlasan');
//proses-noc-6
Route::get('/noc/sedia-memo/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editSediaMemo'])->name('noc.editSediaMemo');
Route::put('/noc/sedia-memo/{id}', [\App\Http\Controllers\NocController::class, 'updateSediaMemo'])->name('noc.updateSediaMemo');
//proses-noc-7
Route::get('/noc/hantar-memo/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editHantarMemo'])->name('noc.editHantarMemo');
Route::put('/noc/hantar-memo/{id}', [\App\Http\Controllers\NocController::class, 'updateHantarMemo'])->name('noc.updateHantarMemo');
//proses-noc-8
Route::get('/noc/terima-memo/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editTerimaMemo'])->name('noc.editTerimaMemo');
Route::put('/noc/terima-memo/{id}', [\App\Http\Controllers\NocController::class, 'updateTerimaMemo'])->name('noc.updateTerimaMemo');
//proses-noc-9
Route::get('/noc/sedia-surat/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editSediaSurat'])->name('noc.editSediaSurat');
Route::put('/noc/sedia-surat/{id}', [\App\Http\Controllers\NocController::class, 'updateSediaSurat'])->name('noc.updateSediaSurat');
//proses-noc-10
Route::get('/noc/hantar-surat/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editHantarSurat'])->name('noc.editHantarSurat');
Route::put('/noc/hantar-surat/{id}', [\App\Http\Controllers\NocController::class, 'updateHantarSurat'])->name('noc.updateHantarSurat');
//proses-noc-11
Route::get('/noc/mohon-modul/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editMohonModul'])->name('noc.editMohonModul');
Route::put('/noc/mohon-modul/{id}', [\App\Http\Controllers\NocController::class, 'updateMohonModul'])->name('noc.updateMohonModul');













