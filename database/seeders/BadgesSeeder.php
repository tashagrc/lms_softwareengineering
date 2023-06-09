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
                'BadgesName' => 'Agile Writer',
                'BadgesDescription' => 'Wrote an article in 10 minutes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'BadgesID' => 2,
                'BadgesName' => 'First Step Learner',
                'BadgesDescription' => 'Read an article for the first time',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more badge records as needed
        ]);
    }
}
