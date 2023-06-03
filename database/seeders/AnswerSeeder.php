<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [
                'AnswerID' => 1,
                'AnswerContent' => 'ini jawaban 1',
                'QuizID' => 1,
                'UserID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'AnswerID' => 2,
                'AnswerContent' => 'ini jawaban 1',
                'QuizID' => 1,
                'UserID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more answer records as needed
        ]);
    }
}
