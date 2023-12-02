@extends('layouts.site')
@section('content')

<div class="row justify-content-end">
    @include('layouts.message')
    <div class="col-12 text-center">
        <h1>Create Product</h1>
    </div>
    <div class="col-12 text-right mb-3">
        <a class="btn btn-warning btn-sm" href="{{route('products.index')}}">Back</a>
    </div>
    <div class="col-12">
        <div class="card">
            <form class="needs-validation" autocomplete="off" action="{{route('products.store')}}" method="POST" novalidate="" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="product_id">Select Product</label>
                        <select class="form-select" name="product_id" id="product_id">
                            @foreach ($product_categories as $product_category)
                                <option value="{{ $product_category->id }}">{{ $product_category->name }}</option>
                            @endforeach
                        </select>
                        @error('product_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                       @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" value="{{old('name')}}" id="name" name="name" required="" placeholder="Name">
                        <div class="invalid-feedback">
                            What's home name?
                        </div>
                    </div>
                    <div class="custom-file mb-3">
                        <input type="file" class="mb-3 custom-file-input @error('image') is-invalid @enderror" name="image" id="customFile">
                        <label class="custom-file-label" for="customFile ">Choose file</label>
                        @error('image')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Old price</label>
                        <input type="number" class="form-control" value="{{old('old_price')}}" id="old_price" name="old_price" required="" placeholder="Old price">
                        <div class="invalid-feedback">
                            What's home old_price?
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" value="{{old('price')}}" id="price" name="price" required="" placeholder="Price">
                        <div class="invalid-feedback">
                            What's home price?
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
