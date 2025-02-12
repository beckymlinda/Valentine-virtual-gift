<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoveController extends Controller
{
     //
    public function index() {
        return view('home');
    }

    public function loveLetter() {
        return view('love-letter');
    }

    public function gallery() {
        return view('gallery');
    }

    public function quiz() {
        return view('quiz');
    }
}
