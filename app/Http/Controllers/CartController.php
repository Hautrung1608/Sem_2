<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Bill;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Helper\Cart;
use App\Models\Category;
use App\Models\Order;

class CartController extends Controller
{
    public function showCart(Request $req)
    {
        $bill = Bill::orderByDesc('id')->paginate(6);
        return view('showCart',compact('bill'));
    }
    public function add(Request $req, $id)
    {
        $product = Product::all();
        return view('addCart',compact('product','id'));
    }
    public function create(Request $req, $id)
    {   
        $product = Product::all();
        echo($product->id);
        // if($product->id == $req->pro_id){
        //     $bill = [$id,$req->pro_id,$req->quantity,$product->price];
        //    console.log($bill);
        //     Bill::create($bill);
        //     return redirect()->route('showCart');
        // }
    }
    public function update(Request $req,$id)
    {
        $cart = new Cart();
        $cart->update($id,$req->quantity);
        return redirect()->back()->with('success', 'Thêm mới thành công');
    }
    public function delete($id, Cart $cart)
    {
        $cart->delete($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
