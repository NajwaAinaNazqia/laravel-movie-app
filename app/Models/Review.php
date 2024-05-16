<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'movie' => 'A Silence Voice',
            'poster' => 'movie1.jpg',
            'user' => 'Firestorm',
            'rating' => '8.1',
            'date' => '2020-03-09'
        ],

        [
            'id' => 2,
            'movie' => 'Haikyuu!',
            'poster' => 'movie2.jpg',
            'user' => 'Zaynn',
            'rating' => '8.4',
            'date' => '2020-04-20'
        ],

        [
            'id' => 3,
            'movie' => 'Demon Slayer',
            'poster' => 'movie3.jpg',
            'user' => 'Robbins',
            'rating' => '8.6',
            'date' => '2021-12-12'
        ],

        [
            'id' => 4,
            'movie' => 'Naruto',
            'poster' => 'movie4.jpg',
            'user' => 'Blubiess',
            'rating' => '8.9',
            'date' => '2024-02-10'
        ],

        [
            'id' => 5,
            'movie' => 'Tokyo Ghoul',
            'poster' => 'movie5.jpg',
            'user' => 'Alaningle',
            'rating' => '9.1',
            'date' => '2022-02-22'
        ],
      
    ];

    public function getALLReviews()
    {
        return $this->reviews;
    }

}
