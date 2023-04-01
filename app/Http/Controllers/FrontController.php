<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function sewa()
    {
        return view('sewa');
    }

    public function detail()
    {
        return view('detail');
    }

    public function ketentuan()
    {
        return view('ketentuan');
    }

    public function tentang()
    {
        return view('tentang');
    }
    
    public function kontak()
    {
        return view('kontak');
    }
    public function cart()
    {
        return view('cart');
    }
}
