@extends('layouts.admin_layout')

@section('content')
@include('sweetalert::alert')
<div>
    <div>
      <h1 class="text-dark">All Blogs</h1>
      <p class="text-dark">Managing Informations About All Blogs</p>
    </div>
    <div class="table-responsive mt-4">
        <table class="table table-bordered" style="color: #000;">
            <thead align="center" style="background-color: #1E3E62; color: #FEF9F2;">
                <tr>
                  <th style="color: #FEF9F2">No</th>
                  <th style="color: #FEF9F2">Blog Image</th>
                  <th style="color: #FEF9F2">Blog Title</th>
                  <th style="color: #FEF9F2">Blog Date/Time</th>
                  <th style="color: #FEF9F2">Blog Description</th>
                  <th style="color: #FEF9F2">Actions</th>
                </tr>
            </thead>
            <tbody align="center">
                @php $rowNumber = 1 @endphp
                @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $rowNumber++ }}</td>
                    <td>
                        <img src="{{ $blog->blog_photo }}" alt="" width="100px" height="100px" style="border-radius: 20px; object-fit:cover;">
                    </td>
                    <td>{{$blog->blog_title}}</td>
                    <td>{{$blog->blog_description}}</td>
                    <td>{{$blog->created_at}}</td>
                    <td>
                        <div class="manage-buttons">
                            <a href="" onclick="return confirm('Are you sure you want to Edit???')" class="edit-button">
                                <button class="btn" type="submit">Edit</button>
                            </a>
                            <a href="" onclick="return confirm('Are you sure you want to Delete???')" class="delete-button">
                                <button class="btn" type="submit">Delete</button>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        <style>
                            .myself-button {
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                            }

                            .myself-button button {
                                background-color: #1E3E62;
                                color: #FEF9F2;
                                padding: 10px 15px;
                                transition: all 0.4s ease;
                                font-weight: bold;
                                border: 2px solid transparent;
                            }

                            .myself-button button:hover {
                                background-color: transparent;
                                border: 2px solid #1E3E62;
                                color: #000;
                                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.9);
                            }

                            .whatido-line {
                                width: 100%;
                                height: 10px;
                                background-color: #1E3E62;
                                margin-top: 5rem;
                                border: 2px solid #000;
                            }

                            .manage-buttons {
                                display: flex;
                                flex-direction: row;
                                justify-content: center;
                                align-items: center;
                                gap: 1rem;
                            }

                            .edit-button button {
                                background-color: green;
                                color: #fff;
                                padding: 10px 10px;
                                transition: all 0.4s ease;
                                font-weight: bold;
                                border: 2px solid transparent;
                            }

                            .edit-button button:hover {
                                background-color: transparent;
                                border: 2px solid green;
                                color: #000;
                                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.9);
                            }

                            .delete-button button {
                                background-color: red;
                                color: #fff;
                                padding: 10px 10px;
                                transition: all 0.4s ease;
                                font-weight: bold;
                                border: 2px solid transparent;
                            }

                            .delete-button button:hover {
                                background-color: transparent;
                                border: 2px solid red;
                                color: #000;
                                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.9);
                            }
                        </style>
    </div>
</div>
@endsection
