<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Home Controller

    public function beranda(){
        // return view for home /beranda
        return view('home',[
            "title" => "Beranda",
        ]);
    }

    public function resume(){
        // return view for /resume
        return view('resume',[
            "title" => "Resume"
        ]);
    }

    public function galeri(){
        // return view for /galeri
        return view('galeri',[
            "title" => "Galeri"
        ]);
    }

    public function kontak(){
        //return view for /kontak
        return view('kontak',[
            "title" => "Kontak"
        ]);
    }
}
