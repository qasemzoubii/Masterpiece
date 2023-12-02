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
                                <th scope="col">User Name</th>
                                <th scope="col">Country</th>
                                <th scope="col">city</th>
                                <th scope="col">street address</th>
                                <th scope="col">total price</th>
                                <th scope="col">payment method</th>
                                <th scope="col">Post code</th>
                                <th scope="col">Show More</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->user->name }}</td>                                
                                <td>{{ $order->country }}</td>                                
                                <td>{{ $order->city }}</td>                                
                                <td>{{ $order->street_address }}</td>                                
                                <td>{{ $order->total_price }}</td>
                                <td>{{ $order->payment_method }}</td>
                                <td>{{ $order->post_code ? $order->post_code : "----"}}</td>                                
                                <td><a href="{{ route('showOrder', $order->id) }}"><button class="btn btn-outline-success m-1 w-100">more</button></a></td>
                                {{-- <td>{{ $order->discount->percentage  }} %</td> --}}
                                
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{ $orders->links('pagination::bootstrap-4')}}  
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

