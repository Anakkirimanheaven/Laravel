<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public $fillable = ['nama_genre'];
    public $visible = ['nama_genre'];
    public $timestamps = true;

    public function buku(){
        // data model Penulis bisa memiliki banyak data
        // dari model Buku melalui fk 'id_penulis'
        return $this->belongsToMany(Buku::class, 'genre_buku', 'id_genre', 'id_buku');
    }
}
