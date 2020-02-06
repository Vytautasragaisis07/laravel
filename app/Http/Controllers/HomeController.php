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
    public function showApie(){

        return view('skelbimai.pages.apie');
    }
    public function showKontaktai(){

        return view('skelbimai.pages.kontaktai');
    }
    public function showPrisijungti(){
        return view('skelbimai.pages.prisijungti');
    }
    public function showRegistruotis(){
        return view('skelbimai.pages.registruotis');
    }
    public function showPrideti(){

        return view('skelbimai.pages.prideti');
    }
}
