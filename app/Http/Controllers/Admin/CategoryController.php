<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Category\CategoryStoreRequest;
use App\Http\Requests\Category\CategoryUpdateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::search()->orderBy('id', 'desc')->paginate(6);

        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $req)
    {
        $form_data = $req->all('name', 'status');
        try {
            Category::create($form_data);
            return redirect()->route('category.index')->with('success', 'Thêm mới thành công');
        } catch (\Throwable $th) {
            return redirect()->route('category.index')->with('success', 'IThêm mới không thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $req, Category $category)
    {
        $form_data = $req->all('name', 'status');

        try {
            $category->update($form_data);
            return redirect()->route('category.index')->with('success', "Cập nhật thành công");
        } catch (\Throwable $th) {
            return redirect()->route('category.index')->with('success', "Cập nhật thất bại");
        }
    }

    /** 
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);

        try {
            $category->delete();
            return redirect()->route('category.index')->with('success', 'Xóa thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "Không thể xóa danh mục $category->name vì đã tồn tại trong Sản phẩm");
        }
    }
    public function softDelete()
    {
        $category = Category::onlyTrashed()->get();
        return view('admin.category.softDelete', compact('category'));
    }

    public function restore($id)
    {
        try {
            Category::withTrashed()->find($id)->restore();
            return redirect()->route('category.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function forceDelete($id)
    {
        try {
            Category::withTrashed()->find($id)->forceDelete();
            return redirect()->route('category.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
