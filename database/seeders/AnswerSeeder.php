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
                'AnswerContent' => 'The American Revolution, which took place from 1775 to 1783, was a
                monumental event in the history of the United States. Fueled by a
                growing discontent with British colonial rule, American colonists rose
                up to challenge the authority of the British Empire',
                'QuizID' => 1,
                'UserID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'AnswerID' => 2,
                'AnswerContent' => 'The American Revolution, which took place from 1775 to 1783, was a
                monumental event in the history of the United States. Fueled by a
                growing discontent with British colonial rule, American colonists rose
                up to challenge the authority of the British Empire',
                'QuizID' => 1,
                'UserID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'AnswerID' => 3,
                'AnswerContent' => 'The American Revolution, which took place from 1775 to 1783, was a
                monumental event in the history of the United States. Fueled by a
                growing discontent with British colonial rule, American colonists rose
                up to challenge the authority of the British Empire',
                'QuizID' => 1,
                'UserID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more answer records as needed
        ]);
    }
}
