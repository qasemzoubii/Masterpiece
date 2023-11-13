@extends('admin.layouts.master')
@section('title', 'Edit Category')

@section('content')
            <div class="container-fluid">

                <div class="row">
                    <h2>Category</h2>
                    <center><div class="col-lg-2">
                        <a href="{{ route('category.index') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">All Category</a>
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
                        <h3>Edit Category</h3>
                        <br>
                        <br>
                        <div class="d-flex">
                        <div class="col-lg-6 ">
                        <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                
                                <label for="addedItemName" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="addedItemName" name="name" value="{{ $category->name }}">
                            </div>

                            {{-- <div class="mb-3">
                                <label for="addedItemDesc" class="form-label">Description :</label>
                                <textarea class="form-control" id="addedItemDesc" name="description" >{{ $category->description }}
                                </textarea>
                            </div> --}}
                            <div class="mb-3">
                                <label for="addedItemIamge" class="form-label">Image :</label>
                                <input type="file" class="form-control" id="addedItemImage" name="image" value="{{ $category->image }}">
                                

                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                        </div>
                        <div class="col-lg-6 mx-5"><img src="{{url($category->image )}}"  alt="Present Perfect" class="mw-100 h-75"></div>

                        </div>
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection