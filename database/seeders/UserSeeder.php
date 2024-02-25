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
        $data = [
            [
                'name' => 'akun resseler',
                'username' => 'resseler',
                'no_hp' => '6282225955550',
                'password' => Hash::make('123456'), // Menggunakan Hash untuk mengenkripsi kata sandi
                'role' => 'resseler',
                'saldo' => '150000',
                'created_by' => 'admin',
                'instagram' => 'https://www.instagram.com/pio_razorr/',
                'expired_date' => Carbon::now()->addYears(100),
            ],
            [
                'name' => 'akun resseler vip',
                'username' => 'resseler vip',
                'no_hp' => '6282225955550',
                'password' => Hash::make('123456'), // Menggunakan Hash untuk mengenkripsi kata sandi
                'role' => 'resseler_vip',
                'saldo' => '999999999999',
                'created_by' => 'admin',
                'instagram' => 'https://www.instagram.com/pio_razorr/',
                'expired_date' => Carbon::now()->addMonths(),
            ],
            [
                'name' => 'akun admin',
                'username' => 'admin',
                'no_hp' => '6282260025001',
                'password' => Hash::make('123456'), // Menggunakan Hash untuk mengenkripsi kata sandi
                'role' => 'admin',
                'saldo' => '999999999999',
                'created_by' => 'ceo',
                'facebook' => 'https://www.facebook.com/alvincheat/',
                'expired_date' => Carbon::now()->addMonths(),
            ],
            [
                'name' => 'akun ceo',
                'username' => 'ceo',
                'no_hp' => '62822200000230',
                'password' => Hash::make('123456'), // Menggunakan Hash untuk mengenkripsi kata sandi
                'role' => 'ceo',
                'saldo' => '999999999999',
                'created_by' => 'author',
                'instagram' => 'https://www.instagram.com/pio_razorr/',
                'facebook' => 'https://www.facebook.com/alvincheat/',
                'expired_date' => Carbon::now()->addYears(100),
            ],
        ];

        // Melakukan iterasi (perulangan) data pengguna dan menyimpannya ke dalam tabel 'users' dalam database
        foreach ($data as $key => $val) {
            User::create($val);
        }

        // Tambah data sebanyak 50 secara acak
        User::factory()->count(103)->create();
    }
}
