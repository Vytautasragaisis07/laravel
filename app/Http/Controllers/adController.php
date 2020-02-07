<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adController extends Controller
{
    public function showPrideti(){

        return view('skelbimai.pages.prideti');
    }
    public function storeAd(){
        $validateData = $request->validate([
           'title' => 'required'
        ]);
        $ad = Ad::create([
            'title' => request('title'),
            'description' => request ('description'),
            'price' => request('price'),
            'email' => request('email'),
            'phone' => request('phone'),
            'location' => request('location'),
            'catid' => request('catid')
        ]);
        $ad = Ad::create([
            'title' => request('title'),
            'description' => request ('description'),
            'price' => request('price'),
            'email' => request('email'),
            'phone' => request('phone'),
            'location' => request('location'),
            'catid' => request('catid')
        ]);

        return redirect('/skelbimai');

    }
    public function ValdytiSkelbima()
    {
        $ads = Ad::all();
        return view('skelbimai.pages.valdytiskelbima', compact('ads'));
    }
}
