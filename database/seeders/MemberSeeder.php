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
        $currentDate = Carbon::now();
        $expiredDate = $currentDate->addMonth();

        DB::table('members')->insert(
            [
                'name' => 'member pio',
                'game' => 'Point Blank Zepetto',
                'member_id' => 'PBZPT123',
                'serial' => '787231hfgh2389675t',
                'expired_date' => $expiredDate,
                'created_by' => 'ceo',
            ]
        );
    }
}
