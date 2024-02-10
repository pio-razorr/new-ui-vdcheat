<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryTransaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'game',
        'transaction_type', // Jenis transaksi (misal: perpanjangan, pembelian, dll.)
        'additional_info', // Informasi tambahan terkait transaksi
        // ... tambahkan atribut lainnya sesuai kebutuhan
    ];
}
