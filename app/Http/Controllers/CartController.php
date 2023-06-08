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
        $product=Product::find($req->pro_id);
        $price = $product->price;
        if($id == 1){
            $quanti = $product->quantity + $req->quantity;
        }else{
            $quanti = $product->quantity - $req->quantity;
        };
        $product->quantity = $quanti;
        if($product->quantity >=0){
            $product->quantity = $quanti;
            $product->save();
            Bill::create(
                ['status'=> $id,
                'pro_id'=> $req->pro_id,
                'quantity'=> $req->quantity,
                'price'=> $price,
                ]
            );
            if($id == 1){
                return redirect()->route('showcart')->with('success', 'Nhập hàng thành công');
            }else{
                return redirect()->route('showcart')->with('success', 'Xuất hàng thành công');
            };
        }else{
            if($id == 1){
                $product->quantity = $quanti;
                $product->save();
                Bill::create(
                    ['status'=> $id,
                    'pro_id'=> $req->pro_id,
                    'quantity'=> $req->quantity,
                    'price'=> $price,
                    ]
                );
                return redirect()->route('showcart')->with('success', 'Nhập hàng thành công');
            }else{
                return redirect()->back()->with('fail', 'hàng hóa trong kho không đủ');
            };
        };
        $product->quantity = $quanti;
        $product->save();
        Bill::create(
            ['status'=> $id,
            'pro_id'=> $req->pro_id,
            'quantity'=> $req->quantity,
            'price'=> $price,
            ]
        );
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
