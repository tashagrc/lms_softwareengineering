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
                'AnswerMainTopic' => 'Main Topic of Answer 1',
                'AnswerPurpose' => 'Purpose of Answer 1',
                'AnswerConclusion' => 'Conclusion of Answer 1',
                'QuizID' => 1,
                'UserID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'AnswerID' => 2,
                'AnswerMainTopic' => 'Main Topic of Answer 2',
                'AnswerPurpose' => 'Purpose of Answer 2',
                'AnswerConclusion' => 'Conclusion of Answer 2',
                'QuizID' => 1,
                'UserID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more answer records as needed
        ]);
    }
}
