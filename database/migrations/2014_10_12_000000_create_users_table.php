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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('no_hp');
            $table->string('password');
            $table->enum('role', ['resseler', 'admin', 'ceo']);
            $table->bigInteger('saldo')->nullable();
            $table->integer('transaksi')->nullable();
            $table->integer('point')->nullable();
            $table->integer('pendapatan')->nullable();
            $table->string('created_by')->nullable();
            $table->datetime('expired_date')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};