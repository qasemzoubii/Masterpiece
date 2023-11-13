@extends('admin.layouts.master')
@section('title', 'Create User')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <h2>User</h2>
            <center>
                <div class="col-lg-2">
                    <a href="{{ route('user.index') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"></i> All
                        users</a>
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
                    <h3>Add user</h3>
                    <br>
                    <br>
                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="addedItemName" class="form-label">Name :</label>
                            <input type="text" class="form-control" id="addedItemName" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="mb-3">
                            <label for="addedItemIamge" class="form-label">Image :</label>
                            <input type="file" class="form-control" id="addedItemImage" name="image" value="{{ old('image') }}">
                        </div>

                        <div class="mb-3">
                            <label for="addedItemName" class="form-label">ُEmail :</label>
                            <input type="email" class="form-control" id="addedItemName" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="addedItemName" class="form-label">Password :</label>
                            <input type="password" class="form-control" id="addedItemName" name="password" value="{{ old('password') }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="role" class="form-label">Role:</label>
                            <select class="form-select" id="role" name="role">
                                <option value="">Select Role</option>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                                
                            </select>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
            <!--/////////////////////////////// END Of Add Item Section ///////////////////////////////-->
        </div>
    </div>
    </div>
    </div>
@endsection
