<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index (){
        echo "Selamat Datang";
    }

    public function about (){
        echo "Nama: Bryan Tosin Saputro, Nim: 2141720220 ";
    }

    public function artikel ($id){
        echo "Halaman Artikel dengan ID" .$id;
    }
}
