<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->insert([
            [
                'ClassroomID' => 1,
                'ClassroomName' => '10 Science 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ClassroomID' => 2,
                'ClassroomName' => '11 Social 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more classroom records as needed
        ]);
    }
}
