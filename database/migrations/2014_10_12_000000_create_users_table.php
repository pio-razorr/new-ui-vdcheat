<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'users'
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ID unik sebagai primary key
            $table->string('name'); // Nama pengguna
            $table->string('username')->unique(); // Nama pengguna unik
            $table->string('no_hp'); // Nomor HP pengguna
            $table->string('password'); // Kata sandi pengguna
            $table->enum('role', ['resseler', 'resseler_vip', 'admin', 'ceo']); // Peran pengguna (reseller, resseler_vip, admin, ceo)
            $table->enum('status', ['banned', 'unbanned'])->default('unbanned'); // Status pengguna
            $table->bigInteger('saldo')->nullable(); // Saldo pengguna (nullable, bisa kosong)
            $table->integer('transaksi')->nullable(); // Jumlah transaksi pengguna (nullable, bisa kosong)
            $table->integer('point')->nullable(); // Jumlah poin pengguna (nullable, bisa kosong)
            $table->integer('pendapatan')->nullable(); // Pendapatan pengguna (nullable, bisa kosong)
            $table->string('created_by')->nullable(); // Pembuat pengguna (nullable, bisa kosong)
            $table->string('instagram')->nullable(); // Instagram pengguna (nullable, bisa kosong)
            $table->string('facebook')->nullable(); // Facebook pengguna (nullable, bisa kosong)
            $table->datetime('expired_date')->nullable(); // Tanggal kedaluwarsa pengguna (nullable, bisa kosong)
            $table->rememberToken(); // Token otentikasi untuk "remember me" functionality
            $table->timestamps(); // Kolom waktu pembuatan dan pembaruan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'users' jika sudah ada
        Schema::dropIfExists('users');
    }
};
