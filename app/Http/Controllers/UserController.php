<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id, $name)
    {
        return view('User')
            ->with('id', $id)
            ->with('name', $name);
    }
}
