@extends('admin.Layouts.master')
@section('title', 'Products')
@section('content')
<div class="container-fluid">
    <!-- Row 1 -->
    <div class="row">
        <h2>Products</h2>
        <center>
            <div class="col-lg-2">
                <a href="{{ route('product.create') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"><i class="ti ti-plus"></i> Add Product</a>
            </div>
        </center>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @endif
    <!-- Row 2 -->
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col"> Main Image</th>
                    {{-- <th scope="col">Image1</th>
                    <th scope="col">Image2</th>
                    <th scope="col">Image3</th>
                    <th scope="col">Image4</th>
                    <th scope="col">Image5</th> --}}
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td><img src="{{ $product->image }}" alt="Product Image" class="images"></td>
                    {{-- <td><img src="{{ $product->image1 }}" alt="Image1" class="images"></td>
                    <td><img src="{{ $product->image2 }}" alt="Image2" class="images"></td>
                    <td><img src="{{ $product->image3 }}" alt="Image3" class="images"></td>
                    <td><img src="{{ $product->image4 }}" alt="Image4" class="images"></td>
                    <td><img src="{{ $product->image5 }}" alt="Image5" class="images"></td> --}}
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <br>
                        <form action="{{ route('product.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger m-1 deleteBtn w-50" ><i class="ti ti-trash"></i>Delete</button>
                        </form>
                        <a href="{{ route('product.edit', $product->id) }}"><button type="button" class="btn btn-outline-success m-1 w-50"><i class="ti ti-pencil"></i>Edit</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
</div>
</div>
<script>
    let deleteBtn = document.getElementsByClassName('deleteBtn');
    for (let i = 0; i < deleteBtn.length; i++) {
        deleteBtn[i].addEventListener('click', function() {
            const customModal = document.getElementById('customModal');
            customModal.style.display = 'block'; // Show the modal
        });
    }
</script>
</div>
</div>
@endsection
