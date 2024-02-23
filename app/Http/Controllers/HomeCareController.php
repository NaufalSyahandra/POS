<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class HomeCareController extends Controller
{
    public function index()
    {
        return view('HomeCare');
    }
}
