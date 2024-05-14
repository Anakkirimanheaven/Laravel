<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Artikel;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Artikel::insert([
            'judul' => 'Menjaga Kesehatan Mental di Era Digital',
            'foto' => 'https://media.istockphoto.com/id/1213143989/id/foto/wanita-bermeditasi-di-danau.jpg?s=1024x1024&w=is&k=20&c=TZLtR0kw0h-7UYBx48-pCdCnXFJ1ctBB4zF6l_6LyZo=',
            'kategori' => 'Kesehatan',
            'konten' => 'Artikel ini akan menganalisa dampak teknologi digital terhadap pola komunikasi dan cara berinteraksi dalam masyarakat, khususnya yang terkait dengan kondisi mental.',
            'penulis' => 'Dr. Amanda Fitriani'
        ]);

        Artikel::insert([
            'judul' => 'Mengenal Ragam Seni Tradisional Indonesia: Wayang Kulit',
            'foto' => 'https://cakdurasim.com/wp-content/uploads/2019/05/DSC_4249.jpg',
            'kategori' => 'Seni Budaya',
            'konten' => 'Artikel ini menjelaskan tentang seni tradisional Indonesia, khususnya wayang kulit. Pembaca akan diajak untuk memahami sejarah, unsur-unsur, dan nilai-nilai budaya yang terkandung dalam pertunjukan wayang kulit.',
            'penulis' => 'Siti Aisyah'
        ]);

        Artikel::insert([
            'judul' => 'Tips Meningkatkan Produktivitas di Tempat Kerja',
            'foto' => 'https://st4.depositphotos.com/20363444/39615/i/450/depositphotos_396155894-stock-photo-selective-focus-thoughtful-multiethnic-business.jpg',
            'kategori' => 'Produktivitas',
            'konten' => 'Naik turunnya produktivitas karyawan adalah hal yang lumrah. Namun, perusahaan sebaiknya berusaha menjaga tingkat produktivitas pekerja dengan menerapkan beberapa strategi.',
            'penulis' => 'Rini Wulandari'
        ]);
        Artikel::insert([
            'judul' => 'Menggali Potensi Wisata Alam di Indonesia: Danau Toba',
            'foto' => 'https://esensi.tv/wp-content/uploads/2024/01/tipang_169.jpeg',
            'kategori' => 'Wisata Alam',
            'konten' => 'Artikel ini mengulas potensi dan pesona wisata alam di Indonesia, dengan fokus pada Danau Toba di Sumatera Utara. Pembaca akan diajak untuk menjelajahi keindahan alam, budaya lokal, dan aktivitas wisata yang dapat dinikmati di destinasi ini.',
            'penulis' => 'Rizqi Jordi'
        ]);
        Artikel::insert([
            'judul' => 'Mengapa Literasi Keuangan Penting bagi Generasi Muda',
            'foto' => 'https://joss.co.id/data/uploads/2022/05/WhatsApp-Image-2022-05-19-at-10.32.47.jpeg',
            'kategori' => 'Keuangan',
            'konten' => 'Literasi keuangan adalah kemampuan yang harus dimiliki seseorang untuk memahami dan mengelola keuangan baik pribadi atau keluarga dengan baik.',
            'penulis' => 'Anton Setiawan'
        ]);
    }
}
