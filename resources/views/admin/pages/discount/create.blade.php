@extends('admin.layouts.master')
@section('title', 'Create Discount')

@section('content')
<div class="container-fluid">

                <div class="row">
                    <h2>Discount</h2>
                    <center><div class="col-lg-2">
                        <a href="{{ route('discount.index') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"></i> All discount</a>
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
                        <h3>Add Discount</h3>
                        <br>
                        <br>
                        <form action="{{ route('discount.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="addedItemName" class="form-label">Discount Code :</label>
                                <input type="text" class="form-control" id="addedItemName" name="discount_code">
                            </div>
                            <div class="mb-3">
                                <label for="addedItemPrice" class="form-label">Percentage :</label>
                                <input type="number" class="form-control" id="addedItemPrice" name="percentage">
                            </div>

                            <div class="mb-3">
                                <label for="addedItemPrice" class="form-label">Expired Date :</label>
                                <input type="date" class="form-control" id="addedItemPrice" name="expired_date">
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