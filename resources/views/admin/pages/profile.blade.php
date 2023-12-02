@extends('admin.layouts.master')
@section('title', 'admin')

@section('content')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <!-- Main Wrapper -->
            <div class="main-wrapper">
                <!-- Page Wrapper -->
                <div class="page-wrapper">
                    <div class="content container-fluid">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="row">
                                <div class="col">
                                    <h2 class="page-title">Profile</h2>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Profile</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-header">
                                    <div class="row align-items-center">
                                        <div class="col-auto profile-image">
                                            <a href="#">
                                                <img class="rounded-circle" alt="User Image" src="{{ url($admin->image) }}"
                                                    style="height: 100px; width: 100px;">
                                            </a>
                                        </div>
                                        <div class="col ml-md-n2 profile-user-info">
                                            <h4 class="user-name mb-0">{{ $admin->name }}</h4>
                                            <h6 class="text-muted">{{ $admin->email }}</h6>
                                            <div class="user-Location"><span><i class="ti ti-map-pins"></i></span>
                                                {{ $admin->country ? $admin->country : 'Not Set' }}</div>
                                            <form action="{{ route('adminProfileEdit') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" class="d-none" name="image" id="image"
                                                    onchange="this.form.submit()">
                                                <label for="image"><i class="fa fa-camera"></i></label>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="profile-menu">
                                    <ul class="nav nav-tabs nav-tabs-solid">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#per_details_tab">Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#pass_tab">Password</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content profile-tab-cont">
                                    <!-- Personal Details Tab -->
                                    <div class="tab-pane fade show active" id="per_details_tab">
                                        <!-- Personal Details -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title d-flex justify-content-between">
                                                            <span>Personal Details</span>
                                                            <a class="edit-link" data-toggle="modal"
                                                                href="#edit_personal_details"><span><i
                                                                        class="ti ti-edit"></i></span></i>Edit</a>
                                                        </h5>
                                                        <div class="row">
                                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name
                                                            </p>
                                                            <p class="col-sm-10">{{ $admin->name }}</p>
                                                        </div>

                                                        <div class="row">
                                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email
                                                            </p>
                                                            <p class="col-sm-10">{{ $admin->email }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">
                                                                Country
                                                            </p>
                                                            <p class="col-sm-10">{{ $admin->country }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Mobile
                                                            </p>
                                                            <p class="col-sm-10">{{ $admin->phone }}</p>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!-- Edit Details Modal -->
                                                <div class="modal fade" id="edit_personal_details" aria-hidden="true"
                                                    role="dialog" style="height: 64%;">
                                                    <div class="modal-dialog modal-dialog-centered"
                                                        style="align-items: start;" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Personal Details</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close" style="width: 20px; height: 20px;">
                                                                    <span><i class="ti ti-x"></i></span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="POST"
                                                                    action="{{ route('adminProfileEdit') }}">
                                                                    @csrf
                                                                    <div class="row form-row">
                                                                        <div class="col-12 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label> Name</label>
                                                                                <input type="text" name="name"
                                                                                    class="form-control text-center"
                                                                                    value="{{ $admin->name }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Email</label>
                                                                                <input type="email" name="email"
                                                                                    class="form-control text-center"
                                                                                    value="{{ $admin->email }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Country</label>
                                                                                <input type="text" name="country"
                                                                                    class="form-control text-center"
                                                                                    value="{{ $admin->country }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Phone</label>
                                                                                <input type="text" name="phone"
                                                                                    value="{{ $admin->phone }}"
                                                                                    class="form-control text-center">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="btn btn-primary btn-block">Save
                                                                        Changes</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Edit Details Modal -->
                                            </div>
                                        </div>
                                        <!-- /Personal Details -->
                                    </div>
                                    <!-- /Personal Details Tab -->

                                    <!-- Change Password Tab -->
                                    <div id="pass_tab" class="tab-pane fade">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Change Password</h5>
                                                <div class="row">
                                                    <div class="col-md-10 col-lg-6">
                                                    
                                                        <form action="{{ route('adminPasswordUpdate') }}" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="old_password">Old Password</label>
                                                                <input type="password" class="form-control"
                                                                    name="old_password" id="old_password">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="new_password">New Password</label>
                                                                <input type="password" class="form-control"
                                                                    name="new_password" id="new_password">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="confirm_password">Confirm Password</label>
                                                                <input type="password" class="form-control"
                                                                    name="confirm_password" id="confirm_password">
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Save
                                                                Changes</button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Change Password Tab -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Wrapper -->
            </div>
            <!-- /Main Wrapper -->
        </div>
    </div>

    <!--///////////////////////////////////////// END Of Header /////////////////////////////////////////-->
    </div>
    </div>
    <!-- jQuery -->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
@endsection
