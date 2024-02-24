<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryTransferSaldo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kepada',
        'total'
    ];
}
