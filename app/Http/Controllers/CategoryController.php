<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    const OBJECT = 'categories';
    const DOT = '.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::query()->orderByDesc('id')->get();
        return view(self::OBJECT.self::DOT.__FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::OBJECT . self::DOT . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $model = new Category();
        $model->fill($request->all());
        $model ->save();
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view(self::OBJECT . self::DOT . __FUNCTION__);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Category::query()->findOrFail($id);
        return view(self::OBJECT . self::DOT . __FUNCTION__, compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $model = Category::query()->findOrFail($id);
//        Tim kiem xem id co ton tai hay khong
        $model->fill($request->all());
//        Quet qua du lieu ma nguoi dung day len
        $model ->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}
