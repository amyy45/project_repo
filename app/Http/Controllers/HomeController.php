<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sneha()
    {
        return view('sneha');
    }
    public function likhitha()
    {
        return view('likhitha');
    }
}
