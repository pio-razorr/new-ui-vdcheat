<?php

use App\Http\Controllers\AktivasiUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataMemberController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransferSaldoController;
use App\Http\Controllers\DataUserController;
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
    return view('landing-page.index');
});

// Supaya saat user sudah login, maka tidak bisa kembali ke halaman login
Route::middleware(['guest'])->group(function () {

    // Tampilkan halaman login user
    Route::get('/login', [LoginController::class, 'index_user'])->name('login');

    // Untuk autentikasi di halaman login user
    Route::post('/login', [LoginController::class, 'login_user']);

    // Tampilkan halaman login member
    Route::get('/login-member', [LoginController::class, 'index_member']);

    // Untuk autentikasi di halaman login member 
    Route::post('/login-member', [LoginController::class, 'login_member']);
});


Route::get('/home', function () {
    return redirect('/dashboard');
});


// Supaya saat user tidak login maka tidak bisa mengakses halaman dashboard
Route::middleware(['auth:web,member'])->group(function () {

    // Menampilkan halaman dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Menampilkan halaman dashboard member
    Route::resource('/dashboard-member', MemberController::class);

    // Menampilkan halaman transaksi
    Route::resource('/transaksi', TransaksiController::class);

    // Menampilkan halaman transfer saldo
    Route::resource('/transfer-saldo', TransferSaldoController::class);

    // Menampilkan halaman transfer saldo
    Route::resource('/aktivasi-user', AktivasiUserController::class);

    // Menampilkan halaman kompensasi
    Route::get('/kompensasi', [DashboardController::class, 'kompensasi']);

    // Menampilkan halaman data member
    Route::resource('/data-member', DataMemberController::class);

    // Menampilkan halaman ubah serial member
    Route::resource('/ubah-serial', DataMemberController::class);

    // Menampilkan halaman data user
    Route::resource('/data-user', DataUserController::class);

    // Menampilkan halaman ubah user
    Route::resource('/ubah-user', DataUserController::class);

    // Menampilkan halaman tukar point
    Route::get('/tukar-point', [DashboardController::class, 'tukar_point']);
    Route::post('/tukar-point', [DashboardController::class, 'proses_tukar_point']);

    // Menampilkan halaman redeem voucher
    Route::get('/redeem-voucher', [DashboardController::class, 'redeem_voucher']);

    // Menampilkan halaman ganti password
    Route::get('/ganti-password', [DashboardController::class, 'ganti_password']);
    Route::post('/ganti-password', [DashboardController::class, 'proses_ganti_password']);

    // Untuk user logout
    Route::get('/logout', [LoginController::class, 'logout']);

    // Resource member
    Route::resource('member', MemberController::class);
});

Route::any('{any?}', function () {
    return view('404');
})->where('any', '.*');