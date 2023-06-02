<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserQuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_quizzes')->insert([
            [
                'UserID' => 1,
                'QuizID' => 1,
                'QuizScore' => 80,
                'StatusPlayed' => true,
                'FinishedDateTime' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'UserID' => 2,
                'QuizID' => 1,
                'QuizScore' => 90,
                'StatusPlayed' => true,
                'FinishedDateTime' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more user-quiz records as needed
        ]);
    }
}
