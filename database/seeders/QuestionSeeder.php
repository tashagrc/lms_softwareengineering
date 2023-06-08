<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'QuestionID' => 1,
                'QuestionTitle' => 'Question 1',
                'QuizID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'QuestionID' => 2,
                'QuestionTitle' => 'Question 2',
                'QuizID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more question records as needed
        ]);
    }
}
