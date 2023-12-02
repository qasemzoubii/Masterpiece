@extends('admin.layouts.master')
@section('title', 'Edit User')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <h2>User</h2>
            <center>
                <div class="col-lg-2">
                    <a href="{{ route('user.index') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">All Users</a>
                </div>
            </center>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="container-fluid">
            <!--  Row 1 -->
            <div class="row">
                <!------------------------------------- Add Item Section ------------------------------------->
                <div class="col-lg-10">
                    <h3>Edit User</h3>
                    <br>
                    <br>
                    <div class="d-flex">
                        <div class="col-lg-6 ">
                            <form action="{{ route('user.update', $user->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">

                                    <label for="addedItemName" class="form-label">Name :</label>
                                    <input type="text" class="form-control" id="addedItemName" name="name"
                                        value="{{ $user->name }}">
                                </div>

                                <div class="mb-3">

                                    <label for="addedItemName" class="form-label">Email :</label>
                                    <input type="email" class="form-control" id="addedItemName" name="email"
                                        value="{{ $user->email }}">
                                </div>


                                <div class="mb-3">
                                    <label for="addedItemIamge" class="form-label">Image :</label>
                                    <input type="file" class="form-control" id="addedItemImage" name="image"
                                        value="{{ $user->image }}">
                                    <br>



                                    <div class="mb-3">
                                        <label for="role" class="form-label">Role:</label>
                                        <select class="form-select" id="role" name="role">
                                            <option value="{{ $user->role }}">{{ $user->role }}</option>
                                            @if ($user->role != 'admin')
                                                <option value="admin">admin</option>
                                            @else
                                                <option value="user">user</option>
                                            @endif
                                        </select>
                                    </div>



                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>

                        </div>
                        <div >
                            @if (!empty($user->image))
                                <img class="mw-100 h-75" src="{{ url($user->image) }}"  alt="User Image" >
                            @endif

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    
@endsection
