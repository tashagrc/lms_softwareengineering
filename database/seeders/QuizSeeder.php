<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            [
                'QuizID' => 1,
                'QuizTitle' => 'Quiz 1',
                'QuizDate' => '2023-06-01',
                'QuizStart' => null,
                'QuizEnd' => null,
                'QuizPrepare' => null,
                'SessionID' => 1,
                'CourseID' => 1,
                'ClassroomID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'QuizID' => 2,
                'QuizTitle' => 'Quiz 2',
                'QuizDate' => '2023-06-02',
                'QuizStart' => null,
                'QuizEnd' => null,
                'QuizPrepare' => null,
                'SessionID' => 2,
                'CourseID' => 1,
                'ClassroomID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more quiz records as needed
        ]);
    }
}
