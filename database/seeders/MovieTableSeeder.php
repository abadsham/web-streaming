<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Batman',
                'slug' => 'the-batman',
                'category' => 'Drama',
                'video_url' => 'https://youtu.be/_J9H9Iak7Jw',
                'thumbnail' => 'https://youtu.be/hGUDujDCfFE'
                
            ]
        ];
    }
}
