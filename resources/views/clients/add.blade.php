@extends('layouts.client')
@section('title')
    Add product
@endsection

@section('content')
    <div class="container">
        <h1>Add product</h1>
        <form action="" method="post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    {{$errorMessage}}
                </div>
            @endif
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Product name</label>
                    <input type="text" name="product_name" value="{{old('product_name')}}" placeholder="Product name" class="form-control">
                    @error('product_name')
                    <div class="text-red mt-2">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="">Price</label>
                    <input type="number" name="product_price" value="{{old('product_price')}}" placeholder="Product price" class="form-control">
                    @error('product_price')
                    <div class="text-red mt-2">{{$message}}</div>
                    @enderror
                </div>
            </div>
            @csrf
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
