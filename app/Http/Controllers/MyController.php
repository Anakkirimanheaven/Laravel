<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function introduce(){
        $data = [

            "nama"=>"Rizqi Jordi",
            "alamat"=>"Babakan",
            "agama"=>"Islam Lahh",
            "jk"=>"Lanang",
            "hobi"=> [
                "Tidur", "He'es" , "Sare"
            ],
        ];
        return view('latihan.perkenalan', compact('data'));
    }

    public function animals()
    {
        $animal =[
            "Lion", "Crocodile", "Rabbit", "Eagle",
        ];
        return view('latihan.animal', ['hewan' => $animal]);
    }
}
