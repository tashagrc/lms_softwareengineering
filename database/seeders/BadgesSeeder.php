<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BadgesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('badges')->insert([
            [
                'BadgesID' => 1,
                'BadgesName' => 'Badge 1',
                'BadgesDescription' => 'Description of Badge 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'BadgesID' => 2,
                'BadgesName' => 'Badge 2',
                'BadgesDescription' => 'Description of Badge 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more badge records as needed
        ]);
    }
}
