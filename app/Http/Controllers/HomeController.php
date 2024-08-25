<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function structure(){
        return view('pages.structure');
    }

    public function partner(){
        return view('pages.partner');
    }

    public function about(){
        return view('pages.about');
}
}
