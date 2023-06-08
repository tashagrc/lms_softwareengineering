<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions')->insert([
            [
                'SessionID' => 1,
                'SessionTopic' => 'Simple Present Tense',
                'SessionIntroduction' => 'Introduction to Session 1',
                'CourseID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'SessionID' => 2,
                'SessionTopic' => 'World War 2',
                'SessionIntroduction' => 'Introduction to Session 2',
                'CourseID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more session records as needed
        ]);
    }
}
