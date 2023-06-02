<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classroom_courses')->insert([
            [
                'ClassroomID' => 1,
                'CourseID' => 1,
                'ClassProgress' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ClassroomID' => 1,
                'CourseID' => 2,
                'ClassProgress' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more classroom-course records as needed
        ]);
    }
}
