<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    public $fillable = ['judul', 'isbn', 'deskripsi', 'jml_halaman', 'cover', 'tgl_terbit', 'id_penulis'];
    public $visible = ['judul', 'isbn', 'deskripsi', 'jml_halaman', 'cover', 'tgl_terbit', 'id_penulis'];
    public $timestamps = true;

    public function penulis(){
        // data model Penulis bisa memiliki banyak data
        // dari model Buku melalui fk 'id_penulis'
        return $this->belongsTo(Penulis::class, 'id_penulis');
    }

    public function genre(){
        // data model Penulis bisa memiliki banyak data
        // dari model Buku melalui fk 'id_penulis'
        return $this->belongsToMany(Genre::class, 'genre_buku', 'id_buku', 'id_genre');
    }

    public function deleteImage(){
        if ($this->cover && file_exists(public_path('images/buku/' . $this->cover))) {
            return unlink(public_path('images/buku/' . $this->cover));
        }
    }
}
