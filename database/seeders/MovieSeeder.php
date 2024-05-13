<?php

namespace Database\Seeders;

use App\Models\Movie;
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
            'title' => 'Godzilla : King Of The Monster',
            'description' => 'Action Adventure Fantasy The crypto-zoological agency Monarch faces off against a battery of god-sized monsters, including the mighty Godzilla, who collides with Mothra, Rodan, and his ultimate nemesis, the three-headed King Ghidorah.',
            'cover_url' => 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/6fc82fe7-e04c-4d7f-9ed3-3e3df6a42b38/dd6lmgm-6a090d64-f0fa-493e-8db2-1fb6fc67f1d8.jpg/v1/fill/w_735,h_1087,q_70,strp/godzilla__kotm_imax_3d_poster_3_by_goji1999_dd6lmgm-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTUxMyIsInBhdGgiOiJcL2ZcLzZmYzgyZmU3LWUwNGMtNGQ3Zi05ZWQzLTNlM2RmNmE0MmIzOFwvZGQ2bG1nbS02YTA5MGQ2NC1mMGZhLTQ5M2UtOGRiMi0xZmI2ZmM2N2YxZDguanBnIiwid2lkdGgiOiI8PTEwMjQifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.siduzdTPXGSta3oZd5TtEYZErCmRYBYtDKaSTxpIVTE',
            'trailer_url' => 'https://www.youtube.com/embed/QFxN2oDKk0E?si=XNitkbWc-mFqqpSr',
            'view' => 214.556
        ]);
        Film::insert([
            'title' => 'Godzilla Vs Kong',
            'description' => 'Sinopsis Godzilla vs. Kong bercerita tentang Kong yang melakukan perjalanan berbahaya untuk menemukan rumahnya yang sebenarnya. Kong turut bersama Jia, seorang gadis yatim piatu yang membentuk ikatan unik dengan Kong. Dalam perjalanan, mereka tiba-tiba bertemu dengan Godzilla yang marah dan menyebabkan kehancuran di seluruh kota.',
            'cover_url' => 'https://th.bing.com/th/id/OIP.mK_zjIhiSmcufckAgifcSgHaHa?rs=1&pid=ImgDetMain',
            'trailer_url' => 'https://youtu.be/odM92ap8_c0?si=Dxeaj1WgyUXKr1P_'
        ]);
        Film::insert([
            'title' => 'Godzilla : Minus One',
            'description' => 'Godzilla Minus One menjadi film terbaru dari universe Godzilla yang dirilis pada 2023 ini. Secara kronologi, ini adalah film pertama dari universe Godzilla versi Toho di Era Reiwa. Film Godzilla Minus One kembali akan mengulik sejarah Godzilla yang kembali menyerang Jepang.',
            'cover_url' => 'https://okdiario.com/img/2023/07/12/godzilla-minus-one-toho-35.jpg',
            'trailer_url' => 'https://youtu.be/VvSrHIX5a-0?si=N5IpGV9WoLkUUH1G'
        ]);
    }
}
