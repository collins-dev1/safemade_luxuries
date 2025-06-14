@extends('layouts.admin_layout')

@section('content')
@include('sweetalert::alert')
<div>
    <div>
        <h1 class="text-dark">Add Product</h1>
        <p class="text-dark">Adding a Product with there information</p>
    </div>
    <div class="mt-4">
        <form action="{{ route('create_product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Product Title</label>
                <input type="text" class="form-control" name="product_title" id="product_title" placeholder="Add the product title...">
            </div>
            <div class="mt-3">
                <label for="">Product Photo</label>
                <input type="file" class="form-control" accept="image/*" name="product_photo" id="product_photo">
            </div>
            <div class="mt-3">
                <label for="">Product Second Photo</label>
                <input type="file" class="form-control" accept="image/*" name="product_photo2" id="product_photo2">
            </div>
            <div class="mt-3">
                <label for="">Product Old Price</label>
                <input type="number" class="form-control" name="product_oldprice" id="product_oldprice" placeholder="Add the Product Old Price">
            </div>
            <div class="mt-3">
                <label for="">Product New Price</label>
                <input type="number" class="form-control" name="product_newprice" id="product_newprice" placeholder="Add the Product New Price">
            </div>
            <div class="mt-3">
                <label for="">Product Description</label>
                <textarea name="product_description" class="form-control" placeholder="Write your Product Description...." id="" cols="30" rows="10"></textarea>
            </div>
            <div class="myself-button mt-3">
                <button class="btn" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
