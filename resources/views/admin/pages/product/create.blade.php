@extends('admin.layouts.master')
@section('title', 'Create Product')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <h2>Product</h2>
            <center>
                <div class="col-lg-2">
                    <a href="{{ route('product.index') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"></i> All
                        product</a>
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
                    <h3>Add product</h3>
                    <br>
                    <br>
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="addedItemName" class="form-label">Name :</label>
                            <input type="text" class="form-control" id="addedItemName" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="mb-3">
                            <label for="addedItemDesc" class="form-label">Description :</label>
                            <textarea class="form-control" id="addedItemDesc" name="description" value="{{ old('description') }}"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category:</label>
                            <select class="form-select" id="category" name="category_id">
                                <option value="" selected disabled>Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="addedItemDesc" class="form-label">Price :</label>
                            <input type="number" min="1" class="form-control" id="addedItemDesc" name="price" value="{{ old('price') }}">
                        </div>
                        <div class="mb-3">
                            <label for="addedItemIamge" class="form-label">Image :</label>
                            <input type="file" class="form-control" id="addedItemImage" name="image" value="{{ old('image') }}">
                        </div>
                        <div class="mb-3">
                            <label for="addedItemIamge" class="form-label">Image1 :</label>
                            <input type="file" class="form-control" id="addedItemImage" name="image1" value="{{ old('image1') }}">
                        </div>
                        <div class="mb-3">
                            <label for="addedItemIamge" class="form-label">Image2 :</label>
                            <input type="file" class="form-control" id="addedItemImage" name="image2" value="{{ old('image2') }}">
                        </div>
                        <div class="mb-3">
                            <label for="addedItemIamge" class="form-label">Image3 :</label>
                            <input type="file" class="form-control" id="addedItemImage" name="image3" value="{{ old('image3') }}">
                        </div>
                        <div class="mb-3">
                            <label for="addedItemIamge" class="form-label">Image4 :</label>
                            <input type="file" class="form-control" id="addedItemImage" name="image4" value="{{ old('image4') }}">
                        </div>
                        <div class="mb-3">
                            <label for="addedItemIamge" class="form-label">Image5 :</label>
                            <input type="file" class="form-control" id="addedItemImage" name="image5" value="{{ old('image5') }}">
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
