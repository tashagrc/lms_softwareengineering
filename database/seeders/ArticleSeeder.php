<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'ArticleID' => 1,
                'ArticlePicture' => 'path/to/article1.jpg',
                'ArticleTitle' => 'Article 1',
                'ArticleDescription' => 'Description of Article 1',
                'ArticleLink' => 'https://example.com/article1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ArticleID' => 2,
                'ArticlePicture' => 'path/to/article2.jpg',
                'ArticleTitle' => 'Article 2',
                'ArticleDescription' => 'Description of Article 2',
                'ArticleLink' => 'https://example.com/article2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more article records as needed
        ]);
    }
}
