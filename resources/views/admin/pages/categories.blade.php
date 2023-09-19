@extends('admin.layouts.master')
@section('title', 'admin')

@section('content')
            <!--///////////////////////////////////////// END Of Header /////////////////////////////////////////-->
        <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <h2>Category</h2>
                    <center><div class="col-lg-2">
                        <a href="./addItem.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"><i class="ti ti-plus"></i> Add Category</a>
                    </div></center>
                </div>
                <!--  Row 2 -->
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Category_id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Build Your Box</td>                                
                                <td><img src="../assets/images/category/box.jpg" alt="black coffee" class="images"></td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Architecto, vitae earum aliquam aspernatur ratione explicabo<br>, neque, fugit cumque quisquam fuga id temporibus nemo?<br> Voluptatibus, placeat exercitationem magnam inventore <br> at dolorum?</td>
                                <td>
                                    <br>
                                    <a href="addItem.html"><button type="button" class="btn btn-outline-success m-1"><i class="ti ti-pencil"></i>Edit</button></a>
                                    <button type="button" class="btn btn-outline-danger m-1 deleteBtn"><i class="ti ti-trash"></i>Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Birthday</td>                                
                                <td><img src="../assets/images/category/Birthday_2.png" alt="americano coffee" class="images"></td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Architecto, vitae earum aliquam aspernatur ratione explicabo<br>, neque, fugit cumque quisquam fuga id temporibus nemo?<br> Voluptatibus, placeat exercitationem magnam inventore <br> at dolorum?</td>
                                <td>
                                    <br>
                                    <a href="addItem.html"><button type="button" class="btn btn-outline-success m-1"><i class="ti ti-pencil"></i>Edit</button></a>
                                    <button type="button" class="btn btn-outline-danger m-1 deleteBtn"><i class="ti ti-trash"></i>Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Graduations</td>                                
                                <td><img src="../assets/images/category/Graduation_Gifts.jpg" alt="cafe au latte coffee" class="images"></td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Architecto, vitae earum aliquam aspernatur ratione explicabo<br>, neque, fugit cumque quisquam fuga id temporibus nemo?<br> Voluptatibus, placeat exercitationem magnam inventore <br> at dolorum?</td>
                                <td>
                                    <br>
                                    <a href="addItem.html"><button type="button" class="btn btn-outline-success m-1"><i class="ti ti-pencil"></i>Edit</button></a>
                                    <button type="button" class="btn btn-outline-danger m-1 deleteBtn"><i class="ti ti-trash"></i>Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Wedding</td>
                                <td><img src="../assets/images/category/Wedding_Gifts.jpg" alt="cappuccino coffee" class="images"></td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Architecto, vitae earum aliquam aspernatur ratione explicabo<br>, neque, fugit cumque quisquam fuga id temporibus nemo?<br> Voluptatibus, placeat exercitationem magnam inventore <br> at dolorum?</td>
                                <td>
                                    <br>
                                    <a href="addItem.html"><button type="button" class="btn btn-outline-success m-1"><i class="ti ti-pencil"></i>Edit</button></a>
                                    <button type="button" class="btn btn-outline-danger m-1 deleteBtn"><i class="ti ti-trash"></i>Delete</button>
                                </td>
                            </tr>
                            <!-- <tr>
                                <th scope="row">5</th>
                                <td>Espresso Coffee</td>                                
                                <td><img src="../assets/images/menu/espresso coffee.jpg" alt="espresso coffee" class="images"></td>
                                <td>Cappuccinos are a popular Italian <br> coffee drink made with equal  parts <br> espresso, steamed milk, and foam.</td>
                                <td>
                                    <br>
                                    <a href="addItem.html"><button type="button" class="btn btn-outline-success m-1"><i class="ti ti-pencil"></i>Edit</button></a>
                                    <button type="button" class="btn btn-outline-danger m-1 deleteBtn"><i class="ti ti-trash"></i>Delete</button>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
                <div id="customModal" class="modal col-lg-2">
                    <div class="modal-content">
                        <p id="sure">Are you sure?</p>
                        <button id="btnOK"><a id="btnOK" href='#'>Delete</a></button>
                        <button id="btnCancel"><a id="btnCancel" href='./menu.html'>Cancel</a></button>
                    </div>
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