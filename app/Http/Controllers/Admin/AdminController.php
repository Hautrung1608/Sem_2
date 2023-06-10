<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $category = Category::search()->paginate(20)->withQueryString();
        $product = Product::search()->orderBy('id', 'desc')->paginate(6);
        return view('admin.index',compact('product', 'category'));
    }

}