<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Lotus Golder Circle';
        return view('pages.index')->with('title', $title);
    }
    
    public function about(){
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }
    
}
