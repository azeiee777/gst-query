<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Optional: You can fetch testimonials from DB later
        return view('home');
    }
}
