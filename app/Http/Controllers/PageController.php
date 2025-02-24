<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Welcome';
    }

    public function about(){
        return 'Aqilla Aprily (2341720068)';
    }

    public function articles($id){
        return 'Halaman Artikel dengan Id' .$id ;
    }
}
