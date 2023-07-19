<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    const OBJECT = 'products';
    const DOT = '.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Product::query()->orderByDesc('id')->get();
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
    public function store(StoreProductRequest $request)
    {
        $model = new Product();
        $model->fill($request->all());
        $model ->save();
        return redirect()->route('products.index');
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
        $model = Product::query()->findOrFail($id);
        return view(self::OBJECT . self::DOT . __FUNCTION__, compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $model = Product::query()->findOrFail($id);
//        Tim kiem xem id co ton tai hay khong
        $model->fill($request->all());
//        Quet qua du lieu ma nguoi dung day len
        $model ->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}
