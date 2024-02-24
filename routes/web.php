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




// Tampilkan halaman landing home
Route::get('/', [LandingController::class, 'index']);

// Tampilkan halaman landing tentang
Route::get('/tentang', [LandingController::class, 'tentang']);

// Tampilkan halaman landing harga
Route::get('/harga', [LandingController::class, 'harga']);

// Tampilkan halaman landing galeri
Route::get('/galeri', [LandingController::class, 'galeri']);

// Tampilkan halaman landing testimoni
Route::get('/testimoni', [LandingController::class, 'testimoni']);





Route::middleware('member.not.allowed', 'guest.user')->group(function () {

    // Menampilkan halaman login user
    Route::get('/login', [LoginUserController::class, 'index']);
});

// Untuk autentikasi di halaman login user
Route::post('/login', [LoginUserController::class, 'login']);




include __DIR__ . '/user.php';




// Autentikasi login member
Route::post('/login-member', [LoginMemberController::class, 'login']);

Route::middleware('user.not.allowed', 'guest.member')->group(function () {

    // Menampilkan halaman login member
    Route::get('/login-member', [LoginMemberController::class, 'index'])->name('login');
});



Route::middleware(['auth:member'])->group(function () {

    // Menampilkan halaman dashboard member
    Route::resource('/dashboard-member', MemberController::class);

    // Resource member
    Route::resource('/member', MemberController::class);
});




// Untuk user logout
Route::get('/logout', [LoginUserController::class, 'logout'])->name('user.logout');
Route::get('/logout-member', [LoginMemberController::class, 'logout'])->name('member.logout');



Route::get('/home', function () {
    return redirect('/dashboard');
});


Route::any('{any?}', function () {
    return view('404');
})->where('any', '.*');
