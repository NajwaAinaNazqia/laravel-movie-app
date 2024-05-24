<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name'=> 'Drama',
            'description'=>'Fokus pada konflik emosional dan perubahan karakter dalam sebuah cerita. Biasanya melibatkan pertentangan manusiawi dan situasi yang mengharukan.',
        ]);

        Genre::create([
            'name'=> 'Sport',
            'description'=>'Menampilkan olahraga sebagai fokus utama cerita. Biasanya mengikuti perjalanan atlet atau tim, menyoroti kompetisi, perjuangan, dan pencapaian dalam olahraga tertentu.',
        ]);

        Genre::create([
            'name'=> 'Fantasy',
            'description'=>'Menampilkan unsur-unsur yang tidak mungkin atau tidak realistis, seperti sihir, makhluk mitos, atau dunia alternatif. Memungkinkan penonton untuk melarikan diri ke dunia yang dibangun secara imajinatif.',
        ]);

        Genre::create([
            'name'=> 'Action',
            'description'=>'Fokus pada adegan-adegan yang menegangkan, bersemangat, dan sering kali melibatkan pertarungan atau aksi fisik.',
        ]);

        Genre::create([
            'name'=> 'Thriller',
            'description'=>'Menampilkan situasi yang menegangkan, misteri yang membingungkan, dan konflik yang mengancam keselamatan karakter utama.',
        ]);
    }
}
