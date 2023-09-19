@extends('admin.layouts.master')
@section('title', 'admin')

@section('content')
            <!--/////////////////////////////////////// END Of Header ///////////////////////////////////////-->
            
            <!--------------------------------------------- Header --------------------------------------------->
            <div class="container-fluid">
                <!-- Row 1 -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Inquiries</h3>
                        <br>
                        <br>
                        <div class="row">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Inquiry</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="col-lg-1">1</th>
                                        <td class="col-lg-2">
                                            <div class="user-info">
                                                <div class="user-details d-flex justify-content-between">
                                                    <!-- <img src="../assets/images/profile/omar.jpg" alt="" class="userimagescomments"> -->
                                                    <div class="user-details"><br>
                                                        <span class="user-name">Omar Migdady</span> <br>
                                                        <!-- <span class="user-email">ramaababneh@gmail.com</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                                
                                        </td>
                                        <td><span class="user-email">omar@gmail.com</span></td>

                                        <!-- <td>omar@gmail.com</td> -->
                                        <td class="col-lg-6">Where is your location?</td>
                                        <td class="col-lg-1">
                                            <br>
                                            <button type="button" class="btn btn-outline-primary m-1 primary Btn"><i class="ti ti-primary"></i>Replay</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="col-lg-1">2</th>
                                        <td class="col-lg-2">
                                            <div class="user-info">
                                                <div class="user-details d-flex justify-content-between">
                                                    <!-- <img src="../assets/images/profile/rania.jpg" alt="Rania Taha" class="userimagescomments"> -->
                                                    <div class="user-details"><br>
                                                        <span class="user-name">Nooraldeen Amrabet</span> <br>
                                                        <!-- <span class="user-email">@gmail.com</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <td><span class="user-email">noor@gmail.com</span></td>

                                        </td>
                                        <td class="col-lg-6">A wonderful website that contains a lot of things.</td>
                                        <td>
                                            <br>
                                            <button type="button" class="btn btn-outline-primary m-1 primary Btn"><i class="ti ti-primary"></i>Replay</button>

                                            <!-- <button type="button" class="btn btn-outline-danger m-1 deleteBtn"><i class="ti ti-trash"></i>Delete</button> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="col-lg-1">3</th>
                                        <td class="col-lg-2">
                                            <div class="user-info">
                                                <div class="user-details d-flex justify-content-between">
                                                    <!-- <img src="../assets/images/profile/razan.jpg" alt="Razan Rjoub" class="userimagescomments"> -->
                                                    <div class="user-details"><br>
                                                        <span class="user-name">Mohammed alhouwari</span> <br>
                                                        <!-- <span class="user-email">mohammad@gmail.com</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <td><span class="user-email">houwary@gmail.com</span></td>
    
                                        </td>
                                        <td class="col-lg-6">can you help me?</td>
                                        <td>
                                            <br>
                                            <button type="button" class="btn btn-outline-primary m-1 primary Btn"><i class="ti ti-primary"></i>Replay</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="col-lg-1">4</th>
                                        <td class="col-lg-2">
                                            <div class="user-info">
                                                <div class="user-details d-flex justify-content-between">
                                                    <!-- <img src="../assets/images/profile/leena.jpg" alt="Leena Al-Rababeh" class="userimagescomments"> -->
                                                    <div class="user-details"><br>
                                                        <span class="user-name">Mohammad Ghzawi</span> <br>
                                                        <!-- <span class="user-email">leenarabaeh@gmail.com</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <td><span class="user-email">ghzawi@gmail.com</span></td>
    
                                        </td>
                                        <td class="col-lg-6">A website full of amazing stuff. There are absolutely amazing Gifts.</td>
                                        <td>
                                            <br>
                                            <button type="button" class="btn btn-outline-primary m-1 primary Btn"><i class="ti ti-primary"></i>Replay</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="col-lg-1">5</th>
                                        <td class="col-lg-2">
                                            <div class="user-info">
                                                <div class="user-details d-flex justify-content-between">
                                                    <!-- <img src="../assets/images/profile/salam.jpg" alt="Salam Al-Tamimi" class="userimagescomments"> -->
                                                    <div class="user-details"><br>
                                                        <span class="user-name">Murad Elzero</span> <br>
                                                        <!-- <span class="user-email">salamtamimi@gmail.com</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <td><span class="user-email">elzero@gmail.com</span></td>

                                        </td>
                                        <td class="col-lg-6">Amazing Services</td>
                                        <td>
                                            <br>
                                            <button type="button" class="btn btn-outline-primary m-1 primary Btn"><i class="ti ti-primary"></i>Replay</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="customModal" class="modal col-lg-2">
                            <div class="modal-content">
                                <p id="sure">Are you sure?</p>
                                <button id="btnOK"><a id="btnOK" href='#'>Delete</a></button>
                                <button id="btnCancel"><a id="btnCancel" href='./comments.html'>Cancel</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            <!--/////////////////////////////////////// END Of Users ///////////////////////////////////////-->
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
@endsection