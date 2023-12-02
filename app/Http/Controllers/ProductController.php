<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /* Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('Product.index', compact('products'));
    }

    /* Show the form for creating a new resource.
     */
    public function create()
    {
        $product_categories = ProductCategory::all();
        return view("Product.create", compact('product_categories'));
    }

    /* Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'product_id'=> 'required',
            'name'=> 'required',
            'image' => 'required',
            'old_price'=>'required',
            'price'=>'required',
        ]);

        if ($request->hasFile('image')){
            $path = $request->file('image')->store('product','public');
        }

        $requestData = $request->all();
        $requestData['image'] = $path;
        Product::create($requestData);

        return redirect()->route('products.index')->with('success', "Product added successfully");
    }

    /* Display the specified resource.
     */
    public function show(Product $product)
    {
        // dd($request->all());
        return view('product.show' , compact('product'));
    }

    /* Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
       return view('product.edit', compact('product'));
    }

    /* Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'product_id'=> 'required',
            'name'=> 'required',
            'old_price' => 'required',
            'price' => 'required',
        ]);

        $requestData = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store("products", 'public');
            $requestData['image'] = $path;
        } else {
         $path = $product->image;
        }

        $product->update($requestData);

        return redirect()->route('products.index')->with('success', "Product edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
