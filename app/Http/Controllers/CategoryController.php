<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AddKategorija(){

        return view('skelbimai.pages.kategorija');
    }
    public function StoreKategorija(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required'
        ]);
        $categories = Category::create([
            'title' => request('title')
        ]);
        return redirect('/valdyti-kategorija');
    }
    public function ValdytiKategorija()
    {
        $categories = Category::all();
        return view('skelbimai.pages.valdytikategorija', compact('categories'));
    }
    public function TrintiKategorija(Category $category)
    {
        $category -> delete();
        return redirect('/valdyti-kategorija');
    }

}