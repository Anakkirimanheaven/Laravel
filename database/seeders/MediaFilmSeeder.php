<?php

namespace Database\Seeders;

use App\Models\MediaFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Nyobain Barang Aneh',
            'url_media' => 'https://www.youtube.com/watch?v=O_9m6YEhMiA',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => '100 Fakta Kratos',
            'url_media' => 'https://www.youtube.com/watch?v=sSIPpA5eLVY',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Podcast',
            'url_media' => 'https://www.youtube.com/watch?v=fp2aEGuCbKM',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Boboboy Galaxy',
            'url_media' => 'https://www.youtube.com/watch?v=zMjSIjOqARc',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'The Spider',
            'url_media' => 'https://www.youtube.com/watch?v=1-tc2YlCqCk',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'End Of Beginning',
            'url_media' => 'https://www.youtube.com/watch?v=Ek4fancdwPk',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Review Laptop 70 juta',
            'url_media' => 'https://www.youtube.com/watch?v=Up5kkJ0hEU0',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Review Skin Nolan',
            'url_media' => 'https://www.youtube.com/watch?v=wEP940Ieta4',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Bantai Bermuda',
            'url_media' => 'https://www.youtube.com/watch?v=gwhESUBmMfY',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Rakit Pc 700Ribu',
            'url_media' => 'https://www.youtube.com/watch?v=9XVlqgtkn4U',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'A Little Piece Of Heaven',
            'url_media' => 'https://www.youtube.com/embed/KVjBCT2Lc94?si=gB28EkU8zbP8Di12',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'So Far Away',
            'url_media' => 'https://www.youtube.com/embed/A7ry4cx6HfY?si=es-lU6JzA_T8jVLD',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Afterlife',
            'url_media' => 'https://www.youtube.com/embed/HIRNdveLnJI?si=DywKXrk8oikLM785',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Seize The Day',
            'url_media' => 'https://www.youtube.com/embed/-B2yzG6Gj0A?si=ZpY3_7MHwZBOm5y4',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Our Legend',
            'url_media' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhIisOoC9gZ618digQSrBqpXhTxzvfhdxEQM0mS_Cuwt5BOY66otV5_Zoc_T03sZCykOqq10kxg5ST43LzqxGicwVRX20uKrggdvvx8h4nOfStzaJaFVGJ92KWl298X9L-RpA19QJQo4q90/s1600/17097378_627900084085935_1506677594776377351_o.jpg',
        ]);
    }
}
