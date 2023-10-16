@extends('admin.Layouts.master')
@section('title', 'Contacts')
@section('content')
<div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <h2>Orders</h2>
                    <center><div class="col-lg-2">
                        {{-- <a href="{{ route('category.create') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"><i class="ti ti-plus"></i> Add Category</a> --}}
                    </div></center>
                </div>
                <br>
                <!--  Row 2 -->
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                {{-- <th scope="col">ID</th> --}}
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($OrderItem as $item)
                            <tr>
                                <td>{{ $item->product->name }}</td>                                
                                <td>{{ $item->product->price }}</td>                                
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->product->price * $item->quantity }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{-- {{ $orders->links('pagination::bootstrap-4')}}   --}}
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

