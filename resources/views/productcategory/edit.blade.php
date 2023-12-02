@extends('layouts.site')
@section('content')

<div class="row justify-content-end">
    @include('layouts.message')
    <div class="col-12 text-center">
        <h1>Edit ProductCategory</h1>
    </div>
    <div class="col-12 text-right mb-3">
        <a class="btn btn-warning btn-sm" href="{{route('product_categories.index')}}">
             Back
        </a>
    </div>
    <div class="col-12">
        <form enctype="multipart/form-data" action="{{ route('product_categories.update', $product_category->id) }}" method="post" autocomplete="off">
         @csrf
         @method('PUT')
        <div class="mb-3">
            <label abel class="form-label" for="name">Name</label>
            <input  class="form-control @error('name')
                is-invalid
                @enderror" type="text" value="{{$product_category->name}}" id="name" placeholder="title" name="name">
                    @error('name')
                   Name
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
