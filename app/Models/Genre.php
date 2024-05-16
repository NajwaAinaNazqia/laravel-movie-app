<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'name' => 'Drama',
            'description' => 'Fokus pada konflik emosional dan perubahan karakter dalam sebuah cerita. Biasanya melibatkan pertentangan manusiawi dan situasi yang mengharukan.',
        ],

        [
            'id' => 2,
            'name' => 'Sport',
            'description' => 'Menampilkan olahraga sebagai fokus utama cerita. Biasanya mengikuti perjalanan atlet atau tim, menyoroti kompetisi, perjuangan, dan pencapaian dalam olahraga tertentu.',
        ],

        [
            'id' => 3,
            'name' => 'Fantasy',
            'description' => 'Menampilkan unsur-unsur yang tidak mungkin atau tidak realistis, seperti sihir, makhluk mitos, atau dunia alternatif. Memungkinkan penonton untuk melarikan diri ke dunia yang dibangun secara imajinatif.',
        ],

        [
            'id' => 4,
            'name' => 'Action',
            'description' => 'Fokus pada adegan-adegan yang menegangkan, bersemangat, dan sering kali melibatkan pertarungan atau aksi fisik.',
        ],

        [
            'id' => 5,
            'name' => 'Thriller',
            'description' => 'Menampilkan situasi yang menegangkan, misteri yang membingungkan, dan konflik yang mengancam keselamatan karakter utama.',
        ],

    ];

    public function getALLGenres()
    {
        return $this->genres;
    }

}
