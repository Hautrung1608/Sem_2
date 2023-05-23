<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $product = Product::orderByDesc('id')->paginate(6);
        $category = Category::all();
        return view('home',compact('product', 'category'));
    }

    public function show($id){
        $product = Product::find($id);
        $category = Category::all();
        return view('show', compact('product', 'category'));
    }
}
