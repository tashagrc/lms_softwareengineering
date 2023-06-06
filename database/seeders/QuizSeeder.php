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
                'QuizArticle' => 'Article 1',
                'QuizDate' => '2023-06-01',
                'QuizStart' => '2023-06-01',
                'QuizEnd' => '2023-06-01',
                'QuizPrepare' => 'must study hard',
                'SessionID' => 1,
                'CourseID' => 1,
                'ClassroomID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'QuizID' => 2,
                'QuizTitle' => 'Quiz 2',
                'QuizArticle' => 'Article 1',
                'QuizDate' => '2023-06-02',
                'QuizStart' => '2023-06-02',
                'QuizEnd' => '2023-06-02',
                'QuizPrepare' => 'read about history',
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
