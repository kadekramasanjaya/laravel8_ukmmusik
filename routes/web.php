<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DemisionerMusikController;
use App\Http\Controllers\MahasiswaMusikController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\DokumentasiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something sgreat!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard_profil', [DashboardProfileController::class, 'index']);
Route::get('/demisionerukmmusikundiksha', [DemisionerMusikController::class, 'index'])->name('demisionerukmmusikundiksha');
Route::get('/demisionerukmmusikundiksha/detaildemisioner/{id_demisioner}', [DemisionerMusikController::class, 'detail']);
Route::get('/demisionerukmmusikundiksha/adddemisioner', [DemisionerMusikController::class, 'adddemisioner']);
Route::post('/demisionerukmmusikundiksha/insertdemisioner', [DemisionerMusikController::class, 'insertdemisioner']);
Route::get('/demisionerukmmusikundiksha/editdemisioner/{id_demisioner}', [DemisionerMusikController::class, 'editdemisioner']);
Route::post('/demisionerukmmusikundiksha/updatedemisioner/{id_demisioner}', [DemisionerMusikController::class, 'updatedemisioner']);
Route::get('/demisionerukmmusikundiksha/deletedemisioner/{id_demisioner}', [DemisionerMusikController::class, 'deletedemisioner']);
Route::get('/mahasiswaukmmusikundiksha', [MahasiswaMusikController::class, 'index'])->name('mahasiswaukmmusikundiksha');
Route::get('/mahasiswaukmmusikundiksha/detailmahasiswa/{id_mahasiswa}', [MahasiswaMusikController::class, 'detail']);
Route::get('/mahasiswaukmmusikundiksha/addmahasiswa', [MahasiswaMusikController::class, 'addmahasiswa']);
Route::post('/mahasiswaukmmusikundiksha/insertmahasiswa', [MahasiswaMusikController::class, 'insertmahasiswa']);
Route::get('/mahasiswaukmmusikundiksha/editmahasiswa/{id_mahasiswa}', [MahasiswaMusikController::class, 'editmahasiswa']);
Route::post('/mahasiswaukmmusikundiksha/updatemahasiswa/{id_mahasiswa}', [MahasiswaMusikController::class, 'updatemahasiswa']);
Route::get('/mahasiswaukmmusikundiksha/delete/{id_mahasiswa}', [MahasiswaMusikController::class, 'deletemahasiswa']);
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::get('/peminjaman/detailpeminjaman/{id_barang}', [PeminjamanController::class, 'detail']);
Route::get('/peminjaman/addpeminjaman', [PeminjamanController::class, 'addpeminjaman']);
Route::post('/peminjaman/insertpeminjaman', [PeminjamanController::class, 'insertpeminjaman']);
Route::get('/peminjaman/editpeminjaman/{id_barang}', [PeminjamanController::class, 'editpeminjaman']);
Route::get('/peminjaman/deletepeminjaman/{id_barang}', [PeminjamanController::class, 'deletepeminjaman']);
Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian');
Route::get('/pengembalian/detailpengembalian/{id_barang}', [PengembalianController::class, 'detail']);
Route::get('/pengembalian/addpengembalian', [PengembalianController::class, 'addpengembalian']);
Route::post('/pengembalian/insertpengembalian', [PengembalianController::class, 'insertpengembalian']);
Route::get('/pengembalian/editpengembalian/{id_barang}', [PengembalianController::class, 'editpengembalian']);
Route::get('/pengembalian/deletepengembalian/{id_barang}', [PengembalianController::class, 'deletepengembalian']);
Route::get('/dokumentasi', [DokumentasiController::class, 'index']);
