<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' => 1,
            'poster' => 'movie1.jpg',
            'user' => 'Firestorm',
            'rating' => '8.1',
            'date' => '2020-03-09',
        ]);

        Review::create([
            'id' => 2,
            'movie_id' => 2,
            'poster' => 'movie2.jpg',
            'user' => 'Zaynn',
            'rating' => '8.4',
            'date' => '2020-04-20',
        ]);

        Review::create([
            'id' => 3,
            'movie_id' => 3,
            'poster' => 'movie3.jpg',
            'user' => 'Robbins',
            'rating' => '8.6',
            'date' => '2021-12-12',
        ]);

        Review::create([
            'id' => 4,
            'movie_id' => 1,
            'poster' => 'movie4.jpg',
            'user' => 'Blubiess',
            'rating' => '8.9',
            'date' => '2024-02-10',
        ]);

        Review::create([
            'id' => 5,
            'movie_id' => 2,
            'poster' => 'movie5.jpg',
            'user' => 'Alaningle',
            'rating' => '9.1',
            'date' => '2022-02-22',
        ]);

    }
}
