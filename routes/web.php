<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DemisionerMusikController;
use App\Http\Controllers\MahasiswaMusikController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\UserController;


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

// DASHBOARD 

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard/dashboardprintpdf', [HomeController::class, 'print']);



// DEMISIONER UKM MUSIK UNDIKSHA

Route::get('/demisionerukmmusikundiksha', [DemisionerMusikController::class, 'index'])->name('demisionerukmmusikundiksha');
Route::get('/demisionerukmmusikundiksha/detaildemisioner/{id_demisioner}', [DemisionerMusikController::class, 'detail']);
Route::get('/demisionerukmmusikundiksha/adddemisioner', [DemisionerMusikController::class, 'adddemisioner']);
Route::post('/demisionerukmmusikundiksha/insertdemisioner', [DemisionerMusikController::class, 'insertdemisioner']);
Route::get('/demisionerukmmusikundiksha/editdemisioner/{id_demisioner}', [DemisionerMusikController::class, 'editdemisioner']);
Route::post('/demisionerukmmusikundiksha/updatedemisioner/{id_demisioner}', [DemisionerMusikController::class, 'updatedemisioner']);
Route::get('/demisionerukmmusikundiksha/delete/{id_demisioner}', [DemisionerMusikController::class, 'deletedemisioner']);

// MAHASISWA UKM MUSIK UNDIKSHA

Route::get('/mahasiswaukmmusikundiksha', [MahasiswaMusikController::class, 'index'])->name('mahasiswaukmmusikundiksha');

Route::get('/mahasiswaukmmusikundiksha/detailmahasiswa/{id_mahasiswa}', [MahasiswaMusikController::class, 'detail']);
Route::get('/mahasiswaukmmusikundiksha/addmahasiswa', [MahasiswaMusikController::class, 'addmahasiswa']);
Route::post('/mahasiswaukmmusikundiksha/insertmahasiswa', [MahasiswaMusikController::class, 'insertmahasiswa']);
Route::get('/mahasiswaukmmusikundiksha/editmahasiswa/{id_mahasiswa}', [MahasiswaMusikController::class, 'editmahasiswa']);
Route::post('/mahasiswaukmmusikundiksha/updatemahasiswa/{id_mahasiswa}', [MahasiswaMusikController::class, 'updatemahasiswa']);
Route::get('/mahasiswaukmmusikundiksha/delete/{id_mahasiswa}', [MahasiswaMusikController::class, 'deletemahasiswa']);

// PEMINJAMAN BARANG UKM MUSIK UNDIKSHA

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::get('/peminjaman/detailpeminjaman/{id_barang}', [PeminjamanController::class, 'detail']);
Route::get('/peminjaman/addpeminjaman', [PeminjamanController::class, 'addpeminjaman']);
Route::post('/peminjaman/insertpeminjaman', [PeminjamanController::class, 'insertpeminjaman']);
Route::get('/peminjaman/editpeminjaman/{id_barang}', [PeminjamanController::class, 'editpeminjaman']);
Route::get('/peminjaman/delete/{id_barang}', [PeminjamanController::class, 'deletepeminjaman']);

// PENGEMBALIAN BARANG UKM MUSIK UNDIKSHA

Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian');
Route::get('/pengembalian/detailpengembalian/{id_barang}', [PengembalianController::class, 'detail']);
Route::get('/pengembalian/addpengembalian', [PengembalianController::class, 'addpengembalian']);
Route::post('/pengembalian/insertpengembalian', [PengembalianController::class, 'insertpengembalian']);
Route::get('/pengembalian/editpengembalian/{id_barang}', [PengembalianController::class, 'editpengembalian']);
Route::post('/pengembalian/updatepengembalian/{id_barang}', [PengembalianController::class, 'updatepengembalian']);
Route::get('/pengembalian/delete/{id_barang}', [PengembalianController::class, 'deletepengembalian']);

// DOKUMENTASI


Route::get('/dokumentasi', [DokumentasiController::class, 'index']);

// LOGIN SESSION

Auth::routes();

// Hak Akses Admin
Route::group(['middleware' => 'admin'], function () {
  Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
  Route::get('/dashboard/dashboardprintpdf', [HomeController::class, 'print']);
  Route::get('/demisionerukmmusikundiksha', [DemisionerMusikController::class, 'index'])->name('demisionerukmmusikundiksha');
  Route::get('/demisionerukmmusikundiksha/detaildemisioner/{id_demisioner}', [DemisionerMusikController::class, 'detail']);
  Route::get('/demisionerukmmusikundiksha/adddemisioner', [DemisionerMusikController::class, 'adddemisioner']);
  Route::post('/demisionerukmmusikundiksha/insertdemisioner', [DemisionerMusikController::class, 'insertdemisioner']);
  Route::get('/demisionerukmmusikundiksha/editdemisioner/{id_demisioner}', [DemisionerMusikController::class, 'editdemisioner']);
  Route::post('/demisionerukmmusikundiksha/updatedemisioner/{id_demisioner}', [DemisionerMusikController::class, 'updatedemisioner']);
  Route::get('/demisionerukmmusikundiksha/delete/{id_demisioner}', [DemisionerMusikController::class, 'deletedemisioner']);
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
  Route::get('/peminjaman/delete/{id_barang}', [PeminjamanController::class, 'deletepeminjaman']);
  Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian');
  Route::get('/pengembalian/detailpengembalian/{id_barang}', [PengembalianController::class, 'detail']);
  Route::get('/pengembalian/addpengembalian', [PengembalianController::class, 'addpengembalian']);
  Route::post('/pengembalian/insertpengembalian', [PengembalianController::class, 'insertpengembalian']);
  Route::get('/pengembalian/editpengembalian/{id_barang}', [PengembalianController::class, 'editpengembalian']);
  Route::post('/pengembalian/updatepengembalian/{id_barang}', [PengembalianController::class, 'updatepengembalian']);
  Route::get('/pengembalian/delete/{id_barang}', [PengembalianController::class, 'deletepengembalian']);
  Route::get('/dokumentasi', [DokumentasiController::class, 'index']);
});

// Hak Pengunjung
Route::group(['middleware' => 'user'], function () {
  Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
  Route::get('/dashboard/dashboardprintpdf', [HomeController::class, 'print']);
});
