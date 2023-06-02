<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resources')->insert([
            [
                'ResourceTitle' => 'Resource 1',
                'ResourceLink' => 'https://example.com/resource1',
                'SessionID' => 1,
                'CourseID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ResourceTitle' => 'Resource 2',
                'ResourceLink' => 'https://example.com/resource2',
                'SessionID' => 1,
                'CourseID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more resource records as needed
        ]);
    }
}
