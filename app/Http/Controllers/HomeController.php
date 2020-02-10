<?php

namespace App\Http\Controllers;

use App\Category;
use App\Ad;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('skelbimai.pages.home');
    }
    public function showSkelbimai()
    {
        $categories = Category::all();
        $ads = Ad::select('ads.id', 'ads.title', 'ads.description', 'ads.email', 'ads.phone', 'ads.location', 'ads.catid', 'ads.created_at',
            'categories.title')->join('categories', 'categories.id', "=", 'ads.catid')->paginate(8);
        return view('skelbimai.pages.skelbimai', compact('ads','categories'));
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
    public function showSkelbimas(Ad $ad){
        return view('skelbimai.pages.skelbimas', compact('ad'));
    }

}
