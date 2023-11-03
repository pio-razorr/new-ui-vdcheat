<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
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
    return redirect ('/login');
});

// Supaya saat user sudah login, maka tidak bisa kembali ke halaman login
Route::middleware(['guest'])->group(function () {

    // Tampilkan halaman login user
    Route::get('/login', [LoginController::class, 'index_user']) -> name('login');

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
    // Route::get('/dashboard-member', [MemberController::class, 'index']);

    // Menampilkan halaman transaksi
    Route::get('/transaksi', [DashboardController::class, 'transaksi']);

    // Menampilkan halaman kompensasi saldo
    Route::get('/transfer-saldo', [DashboardController::class, 'transfer_saldo']);

    // Menampilkan halaman kompensasi
    Route::get('/kompensasi', [DashboardController::class, 'kompensasi']);

    // Menampilkan halaman data member
    Route::get('/data-member', [DashboardController::class, 'data_member']);

    // Menampilkan halaman data user
    Route::resource('/data-user', UserController::class);
    // Route::get('/data-user', [DashboardController::class, 'data_user']);

    // Menampilkan halaman tukar point
    Route::get('/tukar-point', [DashboardController::class, 'tukar_point']);

    // Menampilkan halaman redeem voucher
    Route::get('/redeem-voucher', [DashboardController::class, 'redeem_voucher']);

    // Menampilkan halaman ganti password
    Route::get('/ganti-password', [DashboardController::class, 'ganti_password']);

    // Untuk user logout
    Route::get('/logout', [LoginController::class, 'logout']);
});

// Resource user
Route::resource('user', UserController::class);

// Resource member
Route::resource('member', MemberController::class);