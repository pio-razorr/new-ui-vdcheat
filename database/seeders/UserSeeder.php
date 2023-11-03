<?php

namespace Database\Seeders;

use App\Models\User;
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
        $userData = [
            [
                'name' => 'akun resseler',
                'username' => 'resseler',
                'no_hp' => '0987654321',
                'password' => Hash::make('123456'),
                'role' => 'resseler',
                'saldo' => '150.000',
                'transaksi' => '13',
                'point' => '43.000',
                'pendapatan' => '50.000'
            ],

            [
                'name' => 'akun admin',
                'username' => 'admin',
                'no_hp' => '0987654321',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'saldo' => '999.999.999',
                'transaksi' => '31',
                'point' => '73.000',
                'pendapatan' => '500.000'
            ],

            [
                'name' => 'akun ceo',
                'username' => 'ceo',
                'no_hp' => '0987654321',
                'password' => Hash::make('123456'),
                'role' => 'ceo',
                'saldo' => '999.999.999',
                'transaksi' => '130',
                'point' => '433.000',
                'pendapatan' => '560.000'
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
