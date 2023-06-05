<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Requests\Product\ProductUpdateRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderByDesc('id')->paginate(6);
        return view('admin.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = Product::all();
        $category = Category::all();
        return view('admin.product.add',compact('product', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $req)
    {
        $req->validated();
        
        if($req->has('file')){
            $file = $req->file;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'),$file_name);
        }

        try {
            $req->merge(['image' => $file_name]);
            Product::create($req->all());
            return redirect()->route('product.index')->with('success', 'Thêm mới thành công');
        } catch (\Throwable $th) {
            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $category = Category::all();
        return view('admin.product.edit',compact('product','category'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $req, $id)
    {
       
        $product = Product::find($id);
        $req->validated();
        $file_name = $product->image;

        if($req->has('file')){
            $file = $req->file;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'),$file_name);
        }

        try {
            $req->merge(['image' => $file_name]);
            $product->update($req->all());
            return redirect()->route('product.index')->with('success', 'Cập nhật thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "Không thể cập nhật danh mục");
            
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        try {
            $product->delete();
            return redirect()->back()->with('success', 'Xóa thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "Không thể xóa sản phẩm $product->name");
        }
    }
    public function softDelete()
    {
        $product = Product::onlyTrashed()->get();
        return view('admin.product.softDelete',compact('product'));
    }
    public function restore($id)
    {
        try{
            Product::withTrashed()->find($id)->restore();
            return redirect()->route('admin.product.index');
        } catch (\Throwable $th) {
            throw $th; 
        }
    }
    public function forceDelete($id)
    {
        try{
            Product::withTrashed()->find($id)->forceDelete();
            return redirect()->route('admin.product.index');
        } catch (\Throwable $th) {
            throw $th; 
        }
    }
    public function upquan(Request $req, string $id)
    {
        $product=Product::find($id);
        if($product) {
            $product->quantity = $req->quantity;
            $product->save();
            return redirect()->back();
        }
    }
}
