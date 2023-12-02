<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  Home::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store("uploads", 'public');
        }

        $requestData = $request->all();
        $requestData['image'] = $path;
        return Home::create($requestData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        return $home;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Home $home)
    {
        $home->update($request->all());
        return $home;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        $home->delete();
        return "$home->name  o'chirildi";
    }
}
