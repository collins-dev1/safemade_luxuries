@extends('layouts.admin_layout')

@section('content')
@include('sweetalert::alert')
<div>
    <div>
        <h1 class="text-dark">Edit Product</h1>
        <p class="text-dark">Editing a Product with there information</p>
    </div>
    <div class="mt-4">
        <form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Product Title</label>
                <input type="text" class="form-control" value="{{$product->product_title}}" name="product_title" id="product_title" placeholder="Add the product title...">
            </div>
            <div class="mt-3">
                <label for="">Previous Photo</label>
                <img src="{{ $product->product_photo }}" width="100%" height="200px" style="object-fit: cover; border-radius: 20px" alt="">
            </div>
            <div class="mt-3">
                <label for="">Change Photo</label>
                <input type="file" class="form-control" value="{{$product->product_photo}}" accept="image/*" name="product_photo" id="product_photo">
            </div>
            <div class="mt-3">
                <label for="">Previous Second Photo</label>
                <img src="{{ $product->product_photo2 }}" width="100%" height="200px" style="object-fit: cover; border-radius: 20px" alt="">
            </div>
            <div class="mt-3">
                <label for="">Change Second Photo</label>
                <input type="file" class="form-control" value="{{$product->product_photo2}}" accept="image/*" name="product_photo2" id="product_photo2">
            </div>
            <div class="mt-3">
                <label for="">Product Old Price</label>
                <input type="number" class="form-control" value="{{$product->product_oldprice}}" name="product_oldprice" id="product_oldprice" placeholder="Add the Product Old Price">
            </div>
            <div class="mt-3">
                <label for="">Product New Price</label>
                <input type="number" class="form-control" value="{{$product->product_newprice}}" name="product_newprice" id="product_newprice" placeholder="Add the Product New Price">
            </div>
            <div class="mt-3">
                <label for="">Product Description</label>
                <textarea name="product_description" class="form-control" placeholder="Write your Product Description...." id="" cols="30" rows="10">{{$product->product_description}}</textarea>
            </div>
            <div class="myself-button mt-3">
                <button class="btn" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
