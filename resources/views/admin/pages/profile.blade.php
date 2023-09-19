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
                                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
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
                                                        <img class="rounded-circle" alt="User Image" src="../assets/images/profile/me.jpg" style="height: 100px; width: 100px;">
                                                    </a>
                                                </div>
                                                <div class="col ml-md-n2 profile-user-info">
                                                    <h4 class="user-name mb-0">Qasem AL-Zou'bi</h4>
                                                    <h6 class="text-muted">qasem.zoubi2000@gmail.com</h6>
                                                    <div class="user-Location"><span><i class="ti ti-map-pins"></i></span> Irbid, Jordan</div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="profile-menu">
                                            <ul class="nav nav-tabs nav-tabs-solid">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
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
                                                                    <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><span><i class="ti ti-edit"></i></span></i>Edit</a>
                                                                </h5>
                                                                <div class="row">
                                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                                                    <p class="col-sm-10">Qasem AL-Zou'bi</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                                                    <p class="col-sm-10">17 Jan 2000</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
                                                                    <p class="col-sm-10">qasem.zoubi2000@gmial.com</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                                                                    <p class="col-sm-10">+962 7 8765 6330</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col-sm-2 text-muted text-sm-right mb-0">Address</p>
                                                                    <p class="col-sm-10 mb-0">Jordan, Irbid, Alwefaq Street</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Edit Details Modal -->
                                                        <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog" style="height: 64%;">
                                                            <div class="modal-dialog modal-dialog-centered" role="document" >
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Personal Details</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 20px; height: 20px;">
                                                                            <span><i class="ti ti-x"></i></span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form>
                                                                            <div class="row form-row">
                                                                                <div class="col-12 col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>First Name</label>
                                                                                        <input type="text" class="form-control" value="Qasem">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>Last Name</label>
                                                                                        <input type="text"  class="form-control" value="AL-Zou'bi">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <label>Date of Birth</label>
                                                                                        <div class="cal-icon">
                                                                                            <input type="date" class="form-control" value="17/1/2000">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>Email</label>
                                                                                        <input type="email" class="form-control" value="qasem.zoubi2000@gmail.com">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>Mobile</label>
                                                                                        <input type="text" value="+962 7 9987 6142" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                    <label>Address</label>
                                                                                        <input type="text" class="form-control" value="Irbid, Jordan">
                                                                                    </div>
                                                                                </div>                                                                            
                                                                            </div>
                                                                            <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
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
                                                                <form>
                                                                    <div class="form-group">
                                                                        <label>Old Password</label>
                                                                        <input type="password" class="form-control">
                                                                    </div><br>
                                                                    <div class="form-group">
                                                                        <label>New Password</label>
                                                                        <input type="password" class="form-control">
                                                                    </div><br>
                                                                    <div class="form-group">
                                                                        <label>Confirm Password</label>
                                                                        <input type="password" class="form-control">
                                                                    </div><br>
                                                                    <button class="btn btn-primary" type="submit">Save Changes</button>
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