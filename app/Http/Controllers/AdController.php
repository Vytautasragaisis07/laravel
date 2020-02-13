<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use File;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function AddSkelbima(){
        $categories = Category::all();

        return view('skelbimai.pages.prideti', compact('categories'));

    }
    public function StoreAd(Request $request )
    {

        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'email' => 'required',
            'location' => 'required',
            'img' => 'mimes:jpeg,jpg,png,gif|required|max:10000'

        ]);

        $path=$request->file('img')->store('public/logos');
        $filename=str_replace('public/',"", $path);

        $ad = Ad::create([
            'title' => request('title'),
            'description' => request('description'),
            'price' => request('price'),
            'email' => request('email'),
            'phone' => request('phone'),
            'location' => request('location'),
            'catid' => request ('catid'),
            'img' => $filename

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
    public function RedaguotiSkelbima(Ad $ad){

        $categories = Category::all();
        return view ('skelbimai.pages.redaguotiskelbima', compact('ad','categories'));

    }

    public function Redaguoti_Skelbima(Request $request, Ad $ad){
        $validate=$request->validate([
            'title'=>'required|max:255',
            'description' => 'required',
            'price' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'img' => 'mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        Ad::where('id',$ad->id)->update($request->only(['title','description','price','email','phone','location','img']));

        if($request->hasFile('img'))
        {
            File::delete('storage/'.$ad->img);
            $path=$request->file('img')->store('public/logos');
            $filename=str_replace('public/',"",$path);
            Ad::where('id',$ad->id)->update([
                'img'=>$filename
            ]);
        }
        return redirect('/valdyti-skelbima');

    }

    public function Paieska(Request $request){

        $categories = Category::all();
        $ads = Ad::where('title', 'LIKE', '%'.request('titleForSearch').'%')->
        where('location', 'LIKE', '%'.request('locationForSearch').'%')->
        where('catid', 'LIKE', '%'.request('categoryID').'%')->get();

        return view ('skelbimai.pages.paieska', compact('ads','categories'));
    }
}
