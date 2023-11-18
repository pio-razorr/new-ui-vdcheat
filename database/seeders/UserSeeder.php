<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data pengguna yang akan diisi ke dalam database
        $userData = [
            [
                'name' => 'akun resseler',
                'username' => 'resseler',
                'no_hp' => '082225955550',
                'password' => Hash::make('123456'), // Menggunakan Hash untuk mengenkripsi kata sandi
                'role' => 'resseler',
                'saldo' => '150000',
                'created_by' => 'admin',
                'expired_date' => Carbon::now()->addYears(100),
            ],
            [
                'name' => 'akun admin',
                'username' => 'admin',
                'no_hp' => '082260025001',
                'password' => Hash::make('123456'), // Menggunakan Hash untuk mengenkripsi kata sandi
                'role' => 'admin',
                'saldo' => '999999999999',
                'created_by' => 'ceo',
                'expired_date' => Carbon::now()->addMonths(),
            ],
            [
                'name' => 'akun ceo',
                'username' => 'ceo',
                'no_hp' => '0822200000230',
                'password' => Hash::make('123456'), // Menggunakan Hash untuk mengenkripsi kata sandi
                'role' => 'ceo',
                'saldo' => '999999999999',
                'created_by' => 'author',
                'expired_date' => Carbon::now()->addYears(100),
            ],
        ];

        // Melakukan iterasi (perulangan) data pengguna dan menyimpannya ke dalam tabel 'users' dalam database
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
