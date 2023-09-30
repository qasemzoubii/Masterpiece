@extends('admin.Layouts.master')
@section('title', 'Categories')
@section('content')
<div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <h2>Category</h2>
                    <center><div class="col-lg-2">
                        <a href="{{ route('category.create') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"><i class="ti ti-plus"></i> Add Category</a>
                    </div></center>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
                @endif
                <!--  Row 2 -->
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                {{-- <th scope="col">ID</th> --}}
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                {{-- <th scope="row">{{ $category->id }}</th> --}}
                                <td>{{ $category->name }}</td>                                
                                <td><img src="{{ $category->image }}" alt="Present Perfect" class="images"></td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <br>
                                <form action="{{ route('category.destroy',$category->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger m-1 deleteBtn w-50"><i class="ti ti-trash"></i>Delete</button>
                                </form>
                                <a href="{{ route('category.edit',$category->id) }}"><button type="button" class="btn btn-outline-success m-1 w-50"><i class="ti ti-pencil"></i>Edit</button></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{ $categories->links('pagination::bootstrap-4')}}  
                </div>

            </div>
        </div>
    </div>
    <script>
        let deleteBtn = document.getElementsByClassName('deleteBtn');
        for (let i = 0; i < 5; i++) {
            deleteBtn[i].addEventListener('click', function() {

                const customModal = document.getElementById('customModal');
                customModal.style.display = 'block'; // Show the modal

            });
            
        }
    </script>
        </div>
    </div>


@endsection

