@extends('layouts.site')
@section('content')
    <div class="row justify-content-end">
        @include('layouts.message')
        <div class="col-12 text-center">
            <h1>ProductCategory Table</h1>
        </div>
        <div class="col-12 text-right mb-3">
            <a class="btn btn-success btn-sm" href="{{ route ('product_categories.create')}}">Create</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped text-center" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product_categories as $product_category)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>{{ $product_category->name }}</td>
                                    <td>
                                        <a href="{{ route('product_categories.show', $product_category->id) }}" class="btn btn-sm"><button class="btn btn-primary btn-sm">Show</button></a>
                                        <a href="{{ route('product_categories.edit', $product_category->id) }}" class="btn btn-sm"><button class="btn btn-warning btn-sm">Edit</button></a>
                                          <a class="btn btn-sm">
                                            <form action="{{route('product_categories.destroy', $product_category->id)}}" method="post">
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
