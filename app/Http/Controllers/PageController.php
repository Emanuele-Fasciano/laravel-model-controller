<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importo il models "movie"
use App\Models\Movie;

class PageController extends Controller
{
    public function listPage()
    {
        $movies = Movie::all();
        // dd($movies);
        return view('layouts.list_page', compact('movies'));
    }
}