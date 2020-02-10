<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function AddSkelbima(){

        return view('skelbimai.pages.prideti');
    }
    public function StoreAd(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'catid' => 'required'
        ]);
        $ad = Ad::create([
            'title' => request('title'),
            'description' => request('description'),
            'price' => request('price'),
            'email' => request('email'),
            'phone' => request('phone'),
            'location' => request('location'),
            'catid' => request('catid')
        ]);

        return redirect('/valdyti-skelbima');

    }
    public function ValdytiSkelbima()
    {
        $ads = Ad::all();
        $categories = Category::all();
        return view('skelbimai.pages.valdytiskelbima', compact('ads'));
    }
    public function TrintiSkelbima(Ad $ad)
    {
        $ad -> delete();
        return redirect('/valdyti-skelbima');
    }
}