@extends('layouts.admin_layout')

@section('content')
@include('sweetalert::alert')
<div>
    <div>
        <h1 class="text-dark">Add Blog</h1>
        <p class="text-dark">Adding a Blog with there information</p>
    </div>
    <div class="mt-4">
        <form action="{{route('add_a_blog')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Blog Title</label>
                <input type="text" class="form-control" name="blog_title" id="blog_title" placeholder="Add the Blog title...">
            </div>
            <div class="mt-3">
                <label for="">Blog Photo</label>
                <input type="file" class="form-control" accept="image/*" name="blog_photo" id="blog_photo">
            </div>
            <div class="mt-3">
                <label for="">Blog Description</label>
                <textarea name="blog_description" class="form-control" placeholder="Write your Blog Description...." id="" cols="30" rows="10"></textarea>
            </div>
            <div class="myself-button mt-3">
                <button class="btn" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
