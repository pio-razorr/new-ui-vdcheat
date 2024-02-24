<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('history_transfer_saldos', function (Blueprint $table) {
            $table->id(); // ID unik sebagai primary key
            $table->string('nama'); // Nama pengguna terkait dengan transaksi
            $table->string('kepada'); // Nama pengguna yang ditransfer saldo
            $table->string('total'); // Total transfer saldo
            $table->timestamps(); // Kolom waktu pembuatan dan pembaruan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_transfer_saldos');
    }
};
