@extends('admin.layouts.master')
@section('title', 'Create Category')

@section('content')
<div class="container-fluid">

                <div class="row">
                    <h2>Category</h2>
                    <center><div class="col-lg-2">
                        <a href="{{ route('category.index') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"></i> All Category</a>
                    </div></center>
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
                        <h3>Add Category</h3>
                        <br>
                        <br>
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="addedItemName" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="addedItemName" name="name">
                            </div>
                            {{-- <div class="mb-3">
                                <label for="addedItemPrice" class="form-label">Price :</label>
                                <input type="text" class="form-control" id="addedItemPrice" name="addedItemPrice">
                            </div> --}}
                            <div class="mb-3">
                                <label for="addedItemDesc" class="form-label">Description :</label>
                                <textarea class="form-control" id="addedItemDesc" name="description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="addedItemIamge" class="form-label">Image :</label>
                                <input type="file" class="form-control" id="addedItemImage" name="image">
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