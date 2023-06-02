<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'CourseID' => 1,
                'CourseName' => 'Course 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseID' => 2,
                'CourseName' => 'Course 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more course records as needed
        ]);
    }
}
