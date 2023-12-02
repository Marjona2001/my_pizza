@extends('layouts.site')
@section('content')

<div class="row justify-content-end">
    @include('layouts.message')
    <div class="col-12 text-center">
        <h1>Edit Product</h1>
    </div>
    <div class="col-12 text-right mb-3">
        <a class="btn btn-warning btn-sm" href="{{route('products.index')}}">
            Back
        </a>
    </div>
    <div class="col-12">
        <form enctype="multipart/form-data" action="{{ route('products.update', $product->id) }}" method="post" autocomplete="off">
         @csrf
         @method('PUT')
         <div class="card-body">
            <div class="mb-3">
                <label abel class="form-label" for="product_id">Product Id</label>
                <input  class="form-control @error('product_id')
                is-invalid
                @enderror" type="number" value="{{$product->product_id}}" id="product_id" placeholder="product Id" name="product_id">
                    @error('product_id')
                    Product Id
                @enderror
            </div>
            <div class="mb-3">
                <label abel class="form-label" for="name">Name</label>
                <input  class="form-control @error('name')
                is-invalid
                @enderror" type="text" value="{{$product->name}}" id="name" placeholder="name" name="name">
                    @error('name')
                    Name
                @enderror
            </div>
            <div class="custom-file mb-3">
                <input type="file" class="mb-3 custom-file-input @error('image') is-invalid @enderror" name="image" id="customFile">
                <label class="custom-file-label" for="customFile ">Choose file</label>
                @error('image')
                {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label abel class="form-label" for="old_price">Old price</label>
                <input  class="form-control @error('old_price')
                is-invalid
                @enderror" type="number" value="{{$product->old_price}}" id="old_price" placeholder="old_price" name="old_price">
                    @error('old_price')
                    Old Price
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="price">Price</label>
                <input  class="form-control @error('price')
                is-invalid
                @enderror" type="number" id="price" value="{{$product->price}}" placeholder="price" name="price">
                    @error('price')
                    Price
                @enderror
            </div>
            <div class="mb-3 text-right">
                <button " type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
   </div>
 </div>

@endsection;
