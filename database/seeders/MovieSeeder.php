<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'id'=> 1,
            'title'=> 'Jojo Bizzare Adventure',
            'genre_id'=> '1',
            'poster'=> 'movie-01.jpg',
            'synopsis'=> 'Jojo Bizzare Adventure is a story about the joestar family, who are possessed with intense psychic strength',
        ]);

        Movie::create([
            'id'=> 2,
            'title'=> 'Noragami',
            'genre_id'=> '2',
            'poster'=> 'movie-02.jpg',
            'synopsis'=> 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ]);

        Movie::create([
            'id'=> 3,
            'title'=> 'Wind Breaker',
            'genre_id'=> '3',
            'poster'=> 'movie-03.jpg',
            'synopsis'=> 'Haruka Sakura wants nothing to do with weaklings only interested in the strongest of the strong.',
        ]);

        Movie::create([
            'id'=> 4,
            'title'=> 'Naruto',
            'genre_id'=> '4',
            'poster'=> 'movie4.jpg',
            'synopsis'=> 'Naruto Uzumaki, a hyperactive, cheerful and ambitious ninja who wants to fulfill his wish of getting the title of Hokage, leader and strongest ninja in his village.',
        ]);

        Movie::create([
            'id'=> 5,
            'title'=> 'Tokyo Ghoul',
            'genre_id'=> '5',
            'poster'=> 'movie5.jpg',
            'synopsis'=> 'Ken Kaneki, barely surviving after a deadly encounter with Rize Kamishiro, a woman revealed to be a ghoul, a human-like creature that hunts and eats human flesh, is taken to the hospital in critical condition.'
        ]);
    }
}
