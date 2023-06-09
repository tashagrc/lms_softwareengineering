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
                'QuizTitle' => 'Literacy Quiz #5',
                'QuizArticle' => 'The American Revolution, which took place from 1775 to 1783, was a monumental event in the history of the United States. Fueled by a growing discontent with British colonial rule, American colonists rose up to challenge the authority of the British Empire. The Revolution was ignited by events like the Boston Tea Party and the publication of influential writings such as Thomas Paines Common Sense. The colonists fought for their rights, freedom, and representation, ultimately leading to the Declaration of Independence in 1776. The war that followed was marked by key battles like Lexington and Concord, Saratoga, and Yorktown, where the determined colonists, led by figures like George Washington, fought against the British forces. With the support of France, the Americans secured a decisive victory at Yorktown in 1781, leading to the Treaty of Paris in 1783, which recognized the United States as an independent nation. The American Revolution not only shaped the destiny of a new nation but also became an inspiration for other movements for freedom and self-determination around the world.',
                'QuizDate' => '2023-06-01',
                'QuizStart' => '2023-06-01',
                'QuizEnd' => '2023-06-01',
                'QuizPrepare' => 'This is an individual quiz that you need to do to get bonus score for your exam. The aim of this quiz is to enhance your knowledge about The American Revolution',
                'SessionID' => 1,
                'CourseID' => 1,
                'ClassroomID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'QuizID' => 2,
                'QuizTitle' => 'Literacy Quiz #4',
                'QuizArticle' => 'The American Revolution, which took place from 1775 to 1783, was a monumental event in the history of the United States. Fueled by a growing discontent with British colonial rule, American colonists rose up to challenge the authority of the British Empire. The Revolution was ignited by events like the Boston Tea Party and the publication of influential writings such as Thomas Paines Common Sense. The colonists fought for their rights, freedom, and representation, ultimately leading to the Declaration of Independence in 1776. The war that followed was marked by key battles like Lexington and Concord, Saratoga, and Yorktown, where the determined colonists, led by figures like George Washington, fought against the British forces. With the support of France, the Americans secured a decisive victory at Yorktown in 1781, leading to the Treaty of Paris in 1783, which recognized the United States as an independent nation. The American Revolution not only shaped the destiny of a new nation but also became an inspiration for other movements for freedom and self-determination around the world.',
                'QuizDate' => '2023-06-02',
                'QuizStart' => '2023-06-02',
                'QuizEnd' => '2023-06-02',
                'QuizPrepare' => 'This is an individual quiz that you need to do to get bonus score for your exam. The aim of this quiz is to enhance your knowledge about The American Revolution',
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
