<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BadgesUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('badges_users')->insert([
            [
                'BadgesID' => 1,
                'UserID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'BadgesID' => 2,
                'UserID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more badge-user records as needed
        ]);
    }
}
