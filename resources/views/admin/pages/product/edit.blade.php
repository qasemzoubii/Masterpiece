@extends('admin.layouts.master')
@section('title', 'Edit Product')

@section('content')
            <div class="container-fluid">

                <div class="row">
                    <h2>Product</h2>
                    <center><div class="col-lg-2">
                        <a href="{{ route('product.index') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">All product</a>
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
                        <h3>Edit product</h3>
                        <br>
                        <br>
                        <div class="d-flex">
                        <div class="col-lg-6 ">
                        <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="addedItemName" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="addedItemName" name="name" value="{{ $product->name }}">
                            </div>
                            {{-- <div class="mb-3">
                                <label for="addedItemPrice" class="form-label">Price :</label>
                                <input type="text" class="form-control" id="addedItemPrice" name="addedItemPrice">
                            </div> --}}
                            <div class="mb-3">
                                <label for="addedItemDesc" class="form-label">Description :</label>
                                <textarea class="form-control" id="addedItemDesc" name="description" >{{ $product->description }}
                                </textarea>
                            </div>
                            <div class="mb-3">
                            <label for="category" class="form-label">Category:</label>
                            <select class="form-select" id="category" name="category_id">
                                <option value="{{ $product->category_id }}">{{ $product->category->name }}</option>
                                @foreach ($categories as $category)
                                @if ($product->category_id !=$category->id )
                                
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                                <label for="addedItemName" class="form-label">Price :</label>
                                <input type="number" min="1" class="form-control" id="addedItemName" name="price" value="{{ $product->price }}">
                            </div>
                            <div class="mb-3">
                                <label for="addedItemIamge" class="form-label">Image :</label>
                                <input type="file" class="form-control" id="addedItemImage" name="image" value="{{ $product->image }}">
                            </div>
                            <div class="mb-3">
                                <label for="addedItemIamge" class="form-label">Image :</label>
                                <input type="file" class="form-control" id="addedItemImage" name="image1" value="{{ $product->image1 }}">
                            </div>
                            <div class="mb-3">
                                <label for="addedItemIamge" class="form-label">Image :</label>
                                <input type="file" class="form-control" id="addedItemImage" name="image2" value="{{ $product->image2 }}">
                            </div>
                            <div class="mb-3">
                                <label for="addedItemIamge" class="form-label">Image :</label>
                                <input type="file" class="form-control" id="addedItemImage" name="image3" value="{{ $product->image3 }}">
                            </div>
                            <div class="mb-3">
                                <label for="addedItemIamge" class="form-label">Image :</label>
                                <input type="file" class="form-control" id="addedItemImage" name="image4" value="{{ $product->image4 }}">
                            </div>
                            <div class="mb-3">
                                <label for="addedItemIamge" class="form-label">Image :</label>
                                <input type="file" class="form-control" id="addedItemImage" name="image5" value="{{ $product->image5 }}">
                                
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                    <div class="col-lg-6 mx-5"><img src="{{url($product->image )}}"  alt="Present Perfect" class="mw-100 h-35"></div>

                    
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection