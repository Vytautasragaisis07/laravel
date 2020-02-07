<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ad extends Model
{
    public function createAd(){
        $categories = category::all();
        return view('skelbimai.pages.prideti', compact('categories'));
    }
}
