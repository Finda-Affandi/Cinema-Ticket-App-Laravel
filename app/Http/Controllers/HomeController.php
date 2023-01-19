<?php

namespace App\Http\Controllers;

use App\Models\movies;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = movies::all();
        return view('main.index', compact('movies'));
    }
}
