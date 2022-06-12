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
Route::resource('/setting/bahagian', BahagianController::class);
Route::resource('/setting/kementerian', KementerianController::class);
Route::resource('/setting/peringkat', PeringkatController::class);
Route::resource('/setting/kategori', KategoriController::class);
Route::resource('/setting/status', StatusController::class);

Route::resource('/noc', NocController::class)->except('show');
Route::get('/noc/tindakan', [\App\Http\Controllers\NocController::class, 'tindakan'])->name('noc.tindakan');
Route::get('/noc/detail/{id}', [\App\Http\Controllers\NocController::class, 'detail'])->name('noc.detail');
Route::get('/noc/semak/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editSemak'])->name('noc.editSemak');
Route::get('/noc/semak-ulasan/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editSemakUlasan'])->name('noc.editSemakUlasan');
Route::get('/noc/sedia-ulasan/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editSediaUlasan'])->name('noc.editSediaUlasan');
Route::get('/noc/hantar-ulasan/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editHantarUlasan'])->name('noc.editHantarUlasan');
Route::get('/noc/sedia-memo/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editSediaMemo'])->name('noc.editSediaMemo');
Route::get('/noc/terima-memo/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editTerimaMemo'])->name('noc.editTerimaMemo');
Route::get('/noc/sedia-surat/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editSediaSurat'])->name('noc.editSediaSurat');
Route::get('/noc/hantar-surat/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editHantarSurat'])->name('noc.editHantarSurat');
Route::get('/noc/mohon-modul/{noc}/edit', [\App\Http\Controllers\NocController::class, 'editMohonModul'])->name('noc.editMohonModul');
Route::put('/noc/semak/{id}', [\App\Http\Controllers\NocController::class, 'updateSemak'])->name('noc.updateSemak');
Route::put('/noc/semak-ulasan/{id}', [\App\Http\Controllers\NocController::class, 'updateSemakUlasan'])->name('noc.updateSemakUlasan');
Route::put('/noc/sedia-ulasan/{id}', [\App\Http\Controllers\NocController::class, 'updateSediaUlasan'])->name('noc.updateSediaUlasan');
Route::put('/noc/hantar-ulasan/{id}', [\App\Http\Controllers\NocController::class, 'updateHantarUlasan'])->name('noc.updateHantarUlasan');
Route::put('/noc/sedia-memo/{id}', [\App\Http\Controllers\NocController::class, 'updateSediaMemo'])->name('noc.updateSediaMemo');
Route::put('/noc/terima-memo/{id}', [\App\Http\Controllers\NocController::class, 'updateTerimaMemo'])->name('noc.updateTerimaMemo');
Route::put('/noc/sedia-surat/{id}', [\App\Http\Controllers\NocController::class, 'updateSediaSurat'])->name('noc.updateSediaSurat');
Route::put('/noc/hantar-surat/{id}', [\App\Http\Controllers\NocController::class, 'updateHantarSurat'])->name('noc.updateHantarSurat');
Route::put('/noc/mohon-modul/{id}', [\App\Http\Controllers\NocController::class, 'updateMohonModul'])->name('noc.updateMohonModul');
