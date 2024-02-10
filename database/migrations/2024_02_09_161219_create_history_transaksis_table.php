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
        // Membuat tabel 'history_transaksis'
        Schema::create('history_transaksis', function (Blueprint $table) {
            $table->id(); // ID unik sebagai primary key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // ID pengguna terkait dengan transaksi
            $table->string('nama'); // Nama pengguna terkait dengan transaksi
            $table->string('game'); // Nama game terkait dengan transaksi
            $table->string('transaction_type'); // Jenis transaksi (misal: perpanjangan, pembelian, dll.)
            $table->text('additional_info')->nullable(); // Informasi tambahan terkait transaksi
            $table->timestamps(); // Kolom waktu pembuatan dan pembaruan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'history_transaksis' jika sudah ada
        Schema::dropIfExists('history_transaksis');
    }
};
