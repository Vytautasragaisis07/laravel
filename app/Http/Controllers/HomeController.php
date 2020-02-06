<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('skelbimai.pages.home');
    }
    public function showSkelbimai(){

        return view('skelbimai.pages.skelbimai');
    }
    public function ad(){

        return view('skelbimai.pages.ad');
    }
}
