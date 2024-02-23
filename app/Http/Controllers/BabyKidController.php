<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class BabyKidController extends Controller
{
    public function index()
    {
        return view('BabyKid');
    }
}
