<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('artikel.index');
    }

    public function detail()
    {
        return view('artikel.detail');
    }
}
