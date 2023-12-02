@extends('layouts.site')
@section('content')

<div class="row justify-content-end">
    @include('layouts.message')
    <div class="col-12 text-center">
        <h1>Show Pizza</h1>
    </div>
    <div class="col-12 text-right mb-3">
        <a class="btn btn-warning btn-sm" href="{{route('product_categories.index')}}">
            Back
        </a>
    </div>
    <div class="col-12">
        <table class="table table-bordered text-center">
            <tr>
                <th>Name</th>
                <td>
                   {{$product_category->name}}
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection;
