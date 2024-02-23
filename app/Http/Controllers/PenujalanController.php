<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class PenujalanController extends Controller
{
    public function index()
    {
        return view('Penjualan');
    }
}
