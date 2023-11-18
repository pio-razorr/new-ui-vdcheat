<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('members')->insert(
            [
                'name' => 'member pio',
                'game' => 'Point Blank Zepetto',
                'member_id' => 'PBZPT123',
                'serial' => '787231hfgh2389675t',
                'expired_date' => Carbon::now()->addDay(),
                'created_by' => 'ceo',
                'created_at' => Carbon::now(),
            ]
        );
    }
}
