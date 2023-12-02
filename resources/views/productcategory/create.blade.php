@extends('layouts.site')
@section('content')

<div class="row justify-content-end">
    @include('layouts.message')
    <div class="col-12 text-center">
        <h1>Create ProductCategory</h1>
    </div>
    <div class="col-12 text-right mb-3">
        <a class="btn btn-warning btn-sm" href="{{route('product_categories.index')}}">Back</a>
    </div>
    <div class="col-12">
            <form class="needs-validation" autocomplete="off" action="{{route('product_categories.store')}}" method="POST" novalidate="" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" value="{{old('name')}}" id="name" name="name" required="" placeholder="Name">
                        <div class="invalid-feedback">
                            What's home name?
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
