<?php

use App\Http\Controllers\AktivasiUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataMemberController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransferSaldoController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginMemberController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\StatusGameController;
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

Route::get('/dashboard', [DashboardController::class, 'index']);

// Menampilkan halaman profil akun
Route::get('/profil', [DashboardController::class, 'profil']);
Route::post('/profil', [DashboardController::class, 'ubah_profil']);
Route::post('/profil-sosmed', [DashboardController::class, 'ubah_profil_sosmed']);



// Autentikasi ganti password
Route::post('/ganti-password', [DashboardController::class, 'proses_ganti_password']);

// Menampilkan halaman transaksi
Route::resource('/transaksi', TransaksiController::class);

// Menampilkan halaman data member
Route::resource('/data-member', DataMemberController::class);

// Menampilkan halaman ubah serial
Route::resource('/ubah-serial', DataMemberController::class);

// Menampilkan halaman peraturan
Route::get('/peraturan', [DashboardController::class, 'peraturan']);



// Rute untuk peran reseller
Route::middleware(['checkRole:resseler'])->group(function () {

    // Menampilkan halaman tukar point
    Route::get('/tukar-point', [DashboardController::class, 'tukar_point']);
    Route::post('/tukar-point', [DashboardController::class, 'proses_tukar_point']);

    // Menampilkan halaman redeem voucher
    Route::get('/redeem-voucher', [DashboardController::class, 'redeem_voucher']);
});



// Rute untuk peran reseller_vip
Route::middleware(['checkRole:resseler_vip'])->group(function () {

});



// Rute untuk peran admin
Route::middleware(['checkRole:admin'])->group(function () {

});



// Rute untuk peran CEO
Route::middleware(['checkRole:ceo'])->group(function () {

    // Banned akun pengguna
    Route::put('/banned/{id}', [DataUserController::class, 'banned']);

    // Unbanned akun pengguna
    Route::put('/unbanned/{id}', [DataUserController::class, 'unbanned']);

    Route::resource('/aktivasi-user', AktivasiUserController::class);

    // Menampilkan halaman kompensasi
    Route::get('/kompensasi', [DashboardController::class, 'kompensasi']);

    // Menampilkan halaman testimoni
    Route::resource('/data-status-game', StatusGameController::class);
    Route::resource('/tambah-status-game', StatusGameController::class);
    Route::resource('/ubah-status-game', StatusGameController::class);

    // Menampilkan halaman testimoni
    Route::resource('/data-testimoni', TestimoniController::class);
    Route::resource('/tambah-testimoni', TestimoniController::class);
    Route::resource('/ubah-testimoni', TestimoniController::class);
});



Route::middleware(['checkRole:ceo,admin'])->group(function () {
    Route::resource('/transfer-saldo', TransferSaldoController::class);
    Route::resource('/data-user', DataUserController::class);

    // Menampilkan halaman ubah user
    Route::resource('/ubah-user', DataUserController::class);
});
