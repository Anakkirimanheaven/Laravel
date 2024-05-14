@extends('layout.layout')
@section('content')
<style>
    body {
        background: linear-gradient(to bottom, #222, #8a8a8a, #fff); /* Gradient background */
        color: #fff; /* Warna teks */
        font-family: 'Arial', sans-serif; /* Jenis font */
    }

    .card {
        background-color: rgba(0, 0, 0, 0.7); /* Transparansi pada card */
        color: #fff; /* Warna teks pada card */
        border: none; /* Menghapus border card */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan card */
        transition: box-shadow 0.3s; /* Transisi efek bayangan */
    }

    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Efek bayangan saat dihover */
    }

    .card-title {
        font-size: 24px; /* Ukuran font judul */
        margin-bottom: 10px; /* Margin bawah pada judul */
    }

    .card-text {
        font-size: 18px; /* Ukuran font teks */
        margin-bottom: 15px; /* Margin bawah pada teks */
    }

    .card-body {
        padding: 20px; /* Padding pada card body */
    }

    .card-img-top {
        border-top-left-radius: 8px; /* Sudut bulat pada pojok kiri atas gambar */
        border-top-right-radius: 8px; /* Sudut bulat pada pojok kanan atas gambar */
    }

    .btn-link {
        color: #ff0000; /* Warna link */
        text-decoration: none; /* Menghapus dekorasi link */
        transition: color 0.3s; /* Transisi warna link */
    }

    .btn-link:hover {
        color: #cc0000; /* Warna link saat dihover */
    }

</style>
<div class="container">
    <div class="row justify-content-center mt-5"> <!-- Aligment center dan margin atas -->
        <div class="col-md-6">
            <div class="card">
                <img src="{{$artikel->foto}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$artikel->judul}}</h5>
                  <p class="card-text">{{$artikel->kategori}}</p>
                  <p>Konten: {{$artikel->konten}}</p>
                  <p>Penulis: {{$artikel->penulis}}</p>
                  <p><a href="#" class="btn-link">Link</a></p> <!-- Menggunakan class btn-link untuk link -->
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
