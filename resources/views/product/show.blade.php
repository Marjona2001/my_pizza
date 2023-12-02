@extends('layouts.site')
@section('content')

<div class="row justify-content-end">
    @include('layouts.message')
    <div class="col-12 text-center">
        <h1>Show Product</h1>
    </div>
    <div class="col-12 text-right mb-3">
        <a class="btn btn-warning btn-sm" href="{{route('products.index')}}">
            Back
        </a>
    </div>
    <div class="col-12">
        <table class="table table-bordered text-center">
            <tr>
                <th>Product Id</th>
                <td>
                   {{$product->product_id}}
                </td>
            </tr>
            <tr>
                <th>Name</th>
                <td>
                   {{$product->name}}
                </td>
            </tr>
            <tr>
                <th>Image</th>
                <td>
                    <img width="100" height="100" src="{{ asset('/storage/' . $product->image) }}" alt="">
                </td>
            </tr>
            <tr>
                <th>Old Price</th>
                <td>
                   {{$product->old_price}}
                </td>
            </tr>
            <tr>
                <th>Price</th>
                <td>
                   {{$product->price}}
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection;
