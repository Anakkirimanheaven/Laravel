@extends('layout.layout')
@section('content')
<style>
    body {
        background: linear-gradient(to bottom, rgb(34, 34, 34), rgb(138, 138, 138), rgb(255, 255, 255));
        color: white;
        font-family: 'Arial', sans-serif; /* Mengubah jenis font */
    }

    .card {
        border: none; /* Menghapus border pada card */
        background-color: rgba(0, 0, 0, 0.7); /* Menambahkan transparansi pada card */
    }

    .card-title {
        font-size: 24px; /* Menambahkan ukuran font pada judul */
    }

    .card-text {
        font-size: 18px; /* Menambahkan ukuran font pada teks */
    }

    .card-body {
        height: auto; /* Mengubah ketinggian card menjadi otomatis */
        padding: 20px; /* Menambahkan padding pada card body */
    }

    .btn-primary {
        background-color: rgb(255, 0, 0); /* Mengubah warna latar belakang tombol primer */
        border: none; /* Menghapus border pada tombol */
        font-size: 16px; /* Menambahkan ukuran font pada tombol */
        padding: 10px 20px; /* Menambahkan padding pada tombol */
        margin: 5px; /* Menambahkan margin pada tombol */
    }

    .btn-primary:hover {
        background-color: rgb(200, 0, 0); /* Mengubah warna latar belakang tombol primer saat dihover */
    }

</style>
<div class="container">
    <div class="row">
        @foreach ($artikel as $artikels)
        <div class="col mt-5">
            <div class="card">
                <img src="{{$artikels->foto}}" class="card-img-top" alt="..." height='250px'>
                <div class="card-body">
                    <h5 class="card-title">{{$artikels->judul}}</h5>
                    <p class="card-text">{{$artikels->kategori}}</p>
                    <p>Jumlah View: {{$artikels->konten}}</p>
                    <p>Penulis: {{$artikels->penulis}}</p>
                    <p><a href="/artikel/id/{{$artikels->id}}" class="btn btn-primary">Baca Artikel</a></p>
                </div>
            </div>
        </div>
        @endforeach
        <center>
            <div class="card text-center mt-5">
                <div class="card-header">
                    <h5 class="card-title">Kategori</h5>
                </div>
                <div class="card-body">
                    <a href="/artikel/kategori/kesehatan" class="btn btn-primary">Kesehatan</a>
                    <a href="/artikel/kategori/Seni Budaya" class="btn btn-primary">Seni Budaya</a>
                    <a href="/artikel/kategori/Produktivitas" class="btn btn-primary">Produktivitas</a>
                    <a href="/artikel/kategori/Wisata Alam" class="btn btn-primary">Wisata Alam</a>
                    <a href="/artikel/kategori/keuangan" class="btn btn-primary">Keuangan</a>
                </div>
            </div>
        </center>
    </div>
</div>
@endsection
