<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function structure(){
        return view('pages.structure');
    }
}
