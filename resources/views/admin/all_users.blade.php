@extends('layouts.admin_layout')

@section('content')
@include('sweetalert::alert')
    <h4>All Users</h4>
    <p>Manage Users Details and Information</p>
    <div class="table-responsive">
        <table class="table table-hover table-bordered" cellpadding="1" border="1" cellspacing="1">
            <thead align="center">
                <tr>
                    <th>No</th>
                    <th>Profile Picture</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Banned Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody align="center">
                @php $rowNumber = 1 @endphp
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $rowNumber++ }}</td>
                        <td>
                            @auth
                                @if (Auth::user()->profile_pic == null)
                                    <i class="ri-user-3-fill"></i>
                                @endif
                            @else
                                <img src="" alt="">
                            @endauth
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone_no }}</td>
                        @if ($user->banned_status == 0)
                        <td>Not Banned</td>
                        @else
                        <td>Banned</td>
                        @endif
                        <td class="manage-buttons">
                            @if ($user->banned_status == 0)
                            <a href="{{ route('ban_user',$user->id) }}" onclick="return confirm('Are you sure you want to Ban this User???')" class="delete-button">
                                <button class="btn">Ban</button>
                            </a>
                            @elseif ($user->banned_status == 1)
                            <a href="{{ route('unban_user',$user->id) }}" onclick="return confirm('Are you sure you want to UnBan this User???')" class="delete-button">
                                <button class="btn">UnBan</button>
                            </a>
                            @endif

                            <a href="{{route('delete_user', $user->id)}}" onclick="return confirm('Are you sure you want to Delete this User???')" class="delete-button">
                                <button class="btn">Delete</button>
                            </a>
                        </td>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
