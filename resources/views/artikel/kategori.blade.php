@extends('layout.layout')
@section('content')
<style>
    body {
        background: linear-gradient(to bottom, #141e30, #243b55);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #fff;
    }

    .card {
        background-color: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 15px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
    }

    .card-header {
        background-color: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        padding: 10px;
        text-align: center;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 24px;
        font-weight: bold;
        color: #fff;
        margin-bottom: 15px;
    }

    .card-text {
        color: #eee;
        font-size: 16px;
        line-height: 1.6;
    }

    .card-text:last-child {
        margin-bottom: 0;
    }
</style>
<center>
<div class="container">
    <div class="row">
        @foreach ($artikel as $artikels)
        <div class="col-md-6 col-lg-4 mb-5">
            <div class="card">
                <div class="card-header">
                    <img src="{{ $artikels->foto }}" width="150px" height="200px" alt="Article Image">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$artikels->judul}}</h5>
                    <p class="card-text">Kategori: {{$artikels->kategori}}</p>
                    <p class="card-text">{{$artikels->konten}}</p>
                    <p class="card-text">Penulis: {{$artikels->penulis}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</center>
@endsection
