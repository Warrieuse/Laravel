<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // affiche la pages home
    public function home() {
        return view('pages.home');
    }

    public function apropos() {
        return view('pages.apropos');
    }
    public function services() {
        return view('pages.services');
    }
}
