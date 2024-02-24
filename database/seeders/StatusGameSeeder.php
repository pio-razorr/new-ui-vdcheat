<?php

namespace Database\Seeders;

use App\Models\StatusGame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_game' => 'Point Blank',
                'status' => 'aktif',
            ],
            [
                'nama_game' => 'Point Blank Private',
                'status' => 'aktif',
            ],
            [
                'nama_game' => 'Mobile Legends',
                'status' => 'aktif',
            ],
            [
                'nama_game' => 'CODM Mobile',
                'status' => 'aktif',
            ],
            [
                'nama_game' => 'PUBG Mobile',
                'status' => 'aktif',
            ],
            [
                'nama_game' => '8 Ball Pool',
                'status' => 'aktif',
            ],
            [
                'nama_game' => 'Lost Saga Origin',
                'status' => 'aktif',
            ],
            [
                'nama_game' => 'Contra Tournament',
                'status' => 'aktif',
            ],
            [
                'nama_game' => 'Arena Of Valor',
                'status' => 'aktif',
            ],
            [
                'nama_game' => 'Forward Assault',
                'status' => 'aktif',
            ],
            [
                'nama_game' => 'Farlight 84',
                'status' => 'aktif',
            ],
        ];

        foreach ($data as $key => $val) {
            StatusGame::create($val);
        }
    }
}
