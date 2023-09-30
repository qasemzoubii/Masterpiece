@extends('admin.layouts.master')
@section('title', 'Edit discount')

@section('content')
            <div class="container-fluid">

                <div class="row">
                    <h2>Discount</h2>
                    <center><div class="col-lg-2">
                        <a href="{{ route('discount.index') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">All Discount</a>
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
                        <h3>Edit User</h3>
                        <br>
                        <br>
                        <div class="d-flex">
                        <div class="col-lg-6 ">
                        <form action="{{ route('discount.update',$discount->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                
                                <label for="addedItemName" class="form-label">Discount Code :</label>
                                <input type="text" class="form-control" id="addedItemName" name="discount_code" value="{{ $discount->discount_code }}">
                            </div>

                            <div class="mb-3">
                                
                                <label for="addedItemName" class="form-label">Percentage :</label>
                                <input type="number" class="form-control" id="addedItemName" name="percentage" value="{{ $discount->percentage }}">
                            </div>

                
                            <div class="mb-3">
                                <label for="addedItemIamge" class="form-label">Expired Date :</label>
                                <input type="date" class="form-control" id="addedItemImage" name="expired_Date" value="{{ $discount->expired_date}}">
                                <br>

                                

                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                        </div>

                        </div>
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection