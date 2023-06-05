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
        $category = Category::search()->paginate(20)->withQueryString();
        $product = Product::search()->orderBy('id', 'desc')->paginate(8);
        return view('home',compact('product', 'category'));
    }

    public function show($id){
        $product = Product::find($id);
        $category = Category::all();
        return view('show', compact('product', 'category'));
    }
    public function danhmuc($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        //$product = $category->products->get();
        return view('danhmuc',compact('categories', 'category'));
    }
}
