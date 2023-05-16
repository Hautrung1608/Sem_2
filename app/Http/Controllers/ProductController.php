<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = Product::all();
        $category = Category::all();
        return view('product.add',compact('product', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $req->validate([
            'name' =>'required|min:3|unique:products,name,',
            'price' =>'required|numeric|min:1',
            'file' =>'mimes:jqg,png,web'

        ],[
            'name.required' =>'Tên không được để rỗng',
            'name.unique' =>$req->name.'đã tồn tại',
            'name.unique.required' =>$req->name.'đã tồn tại',
            'price.required' =>'Giá không được để rỗng',
            'price.numeric' =>'Không đúng định dạng',
            'price.numeric.required' =>'Không đúng định dạng',
            'price.min' =>'Giá không nhỏ hơn 1',
            'price.min.required' =>'Giá không nhỏ hơn 1',
            'file.mimes' => 'Ảnh không đúng định dạng',
            'file.mimes.required' => 'Ảnh không đúng định dạng'
        ]);
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
        return view('product.edit',compact('product','category'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $req->validate([
            'name' =>'required|min:3|unique:products,name,'.$id,
            'price' =>'required|numeric|min:1',
            'file' =>'mimes:jqg,png,web'

        ],[
            'name.required' =>'Tên không được để rỗng',
            'name.unique' =>$req->name.'đã tồn tại',
            'name.unique.required' =>$req->name.'đã tồn tại',
            'price.required' =>'Giá không được để rỗng',
            'price.numeric' =>'Không đúng định dạng',
            'price.numeric.required' =>'Không đúng định dạng',
            'price.min' =>'Giá không nhỏ hơn 1',
            'price.min.required' =>'Giá không nhỏ hơn 1',
            'file.mimes' => 'Ảnh không đúng định dạng',
            'file.mimes.required' => 'Ảnh không đúng định dạng'
        ]);
        $product = Product::find($id);
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
        return view('product.softDelete',compact('product'));
    }
    public function restore($id)
    {
        try{
            Product::withTrashed()->find($id)->restore();
            return redirect()->route('product.index');
        } catch (\Throwable $th) {
            throw $th; 
        }
    }
    public function forceDelete($id)
    {
        try{
            Product::withTrashed()->find($id)->forceDelete();
            return redirect()->route('product.index');
        } catch (\Throwable $th) {
            throw $th; 
        }
    }
}
