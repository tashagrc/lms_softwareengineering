<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClassroomSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(SessionSeeder::class);
        $this->call(BadgesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(QuizSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(AnswerSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(ResourceSeeder::class);
        $this->call(BadgesUserSeeder::class);
        $this->call(ClassroomCourseSeeder::class);
        $this->call(UserQuizSeeder::class);
    }
}
