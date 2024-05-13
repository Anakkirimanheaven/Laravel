<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Film::insert([
            'judul' => 'FallOut',
            'deskripsi' => 'In a future, post-apocalyptic Los Angeles brought about by nuclear decimation, citizens must live in underground bunkers to protect themselves from radiation, mutants and bandits.'
        ]);
        Film::insert([
            'judul' => 'Shogun',
            'deskripsi' => 'When a mysterious European ship is found marooned in a nearby fishing village, Lord Yoshii Toranaga discovers secrets that could tip the scales of power and devastate his enemies.'
        ]);
        Film::insert([
            'judul' => 'A7X',
            'deskripsi' => 'Avenged Sevenfold (disingkat A7X) adalah band heavy metal Amerika Serikat dari Huntington Beach, California, dibentuk pada tahun 1999. Band ini saat ini formasi terdiri dari vokalis M. Shadows, gitaris ritme Zacky Vengeance, gitaris utama Synyster Gates, bassis Johnny Christ, dan drummer Brooks Wackerman.'
        ]);
    }
}
