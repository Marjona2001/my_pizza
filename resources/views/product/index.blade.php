@extends('layouts.site')
@section('content')
    <div class="row justify-content-end">
        @include('layouts.message')
        <div class="col-12 text-center">
            <h1>Product Table</h1>
        </div>
        <div class="col-12 text-right mb-3">
            <a class="btn btn-success btn-sm" href="{{ route ('products.create')}}">Create</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped text-center" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Product Id</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Old Price</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>{{ $product->product_id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        <img alt="image" src="{{ asset('/storage/'. $product->image )}}" width="50">
                                    </td>
                                    <td>{{ $product->old_price }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm"><button class="btn btn-primary btn-sm">Show</button></a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm"><button class="btn btn-warning btn-sm">Edit</button></a>
                                          <a class="btn btn-sm">
                                            <form action="{{route('products.destroy', $product->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                                            </form>
                                          </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
