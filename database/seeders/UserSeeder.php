<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'UserID' => 1,
                'UserName' => 'John Doe',
                'UserEmail' => 'johndoe@example.com',
                'UserPassword' => bcrypt('password123'),
                'UserXP' => 0,
                'UserDateJoined' => Carbon::now(),
                'UserRole' => 'Student',
                'ClassroomID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'UserID' => 2,
                'UserName' => 'Jane Smith',
                'UserEmail' => 'janesmith@example.com',
                'UserPassword' => bcrypt('password456'),
                'UserXP' => 0,
                'UserDateJoined' => Carbon::now(),
                'UserRole' => 'Student',
                'ClassroomID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more user records as needed
        ]);
    }
}