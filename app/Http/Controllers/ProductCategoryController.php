<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /* Display a listing of the resource.
     */
    public function index()
    {
        $product_categories = ProductCategory::all();
        return view('ProductCategory.index', compact('product_categories'));
    }

    /* Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ProductCategory.create');
    }

    /* Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required',
        ]);


        $requestData = $request->all();
        ProductCategory::create($requestData);

        return redirect()->route('product_categories.index')->with('success', "Pizza added successfully");
    }

    /* Display the specified resource.
     */
    public function show(ProductCategory $product_category)
    {
        // dd($request->all());
        return view('ProductCategory.show' , compact('product_category'));
    }

    /* Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $product_category)
    {
       return view('ProductCategory.edit', compact('product_category'));
    }

    /* Update the specified resource in storage.
     */
    public function update(Request $request, ProductCategory $product_category)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $requestData = $request->all();
        $product_category->update($requestData);

        return redirect()->route('product_categories.index')->with('success', "ProductCategory edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $product_category)
    {
        $product_category->delete();
        return redirect()->route('product_categories.index');
    }
}
