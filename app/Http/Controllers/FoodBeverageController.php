<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class FoodBeverageController extends Controller
{
    public function index()
    {
        return view('FoodBeverage');
    }
}
