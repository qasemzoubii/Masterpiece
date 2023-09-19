@extends('admin.layouts.master')
@section('title', 'admin')

@section('content')
        <!--/////////////////////////////////////// END Of Header ///////////////////////////////////////-->

        <!--------------------------------------------- Users --------------------------------------------->
        <div class="container-fluid">
          <!--  Row 1 -->
          <div class="row">
            <div class="col-lg-12">
              <h3>Users</h3>
              <br />
              <br />
              <div class="row">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Image</th>
                      <th scope="col">Email</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Qasem AL-Zou'bi</td>
                      <td>
                        <img
                          src="../assets/images/profile/me.jpg"
                          alt="black coffee"
                          class="userimages"
                        />
                      </td>
                      <td>qasem@gmail.com</td>
                      <td>
                        <br />
                        <a href="addItem.html"
                          ><button
                            type="button"
                            class="btn btn-outline-success m-1"
                          >
                            <i class="ti ti-pencil"></i>Edit
                          </button></a
                        >
                        <button
                          type="button"
                          class="btn btn-outline-danger m-1 deleteBtn"
                        >
                          <i class="ti ti-trash"></i>Delete
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Omar Migdady</td>
                      <td>
                        <img
                          src="../assets/images/profile/omar.jpg"
                          alt="black coffee"
                          class="userimages"
                        />
                      </td>
                      <td>omar@gmail.com</td>
                      <td>
                        <br />
                        <a href="addItem.html"
                          ><button
                            type="button"
                            class="btn btn-outline-success m-1"
                          >
                            <i class="ti ti-pencil"></i>Edit
                          </button></a
                        >
                        <button
                          type="button"
                          class="btn btn-outline-danger m-1 deleteBtn"
                        >
                          <i class="ti ti-trash"></i>Delete
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Mawlana</td>
                      <td>
                        <img
                          src="../assets/images/profile/mawlana.jpg"
                          alt="black coffee"
                          class="userimages"
                        />
                      </td>
                      <td>mawlana@gmail.com</td>
                      <td>
                        <br />
                        <a href="addItem.html"
                          ><button
                            type="button"
                            class="btn btn-outline-success m-1"
                          >
                            <i class="ti ti-pencil"></i>Edit
                          </button></a
                        >
                        <button
                          type="button"
                          class="btn btn-outline-danger m-1 deleteBtn"
                        >
                          <i class="ti ti-trash"></i>Delete
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Mohammad Ghzawi</td>
                      <td>
                        <img
                          src="../assets/images/profile/ghzawi.jpg"
                          alt="black coffee"
                          class="userimages"
                        />
                      </td>
                      <td>mohhmad@gmail.com</td>
                      <td>
                        <br />
                        <a href="addItem.html"
                          ><button
                            type="button"
                            class="btn btn-outline-success m-1"
                          >
                            <i class="ti ti-pencil"></i>Edit
                          </button></a
                        >
                        <button
                          type="button"
                          class="btn btn-outline-danger m-1 deleteBtn"
                        >
                          <i class="ti ti-trash"></i>Delete
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Murad Elzero</td>
                      <td>
                        <img
                          src="../assets/images/profile/zero.jpg"
                          alt="black coffee"
                          class="userimages"
                        />
                      </td>
                      <td>elzero@gmail.com</td>
                      <td>
                        <br />
                        <a href="addItem.html"
                          ><button
                            type="button"
                            class="btn btn-outline-success m-1"
                          >
                            <i class="ti ti-pencil"></i>Edit
                          </button></a
                        >
                        <button
                          type="button"
                          class="btn btn-outline-danger m-1 deleteBtn"
                        >
                          <i class="ti ti-trash"></i>Delete
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div id="customModal" class="modal col-lg-2">
                <div class="modal-content">
                  <p id="sure">Are you sure?</p>
                  <button id="btnOK"><a id="btnOK" href="#">Delete</a></button>
                  <button id="btnCancel">
                    <a id="btnCancel" href="./uesrs.html">Cancel</a>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/////////////////////////////////////// END Of Users ///////////////////////////////////////-->
      </div>
      <script>
        let deleteBtn = document.getElementsByClassName("deleteBtn");
        for (let i = 0; i < 5; i++) {
          deleteBtn[i].addEventListener("click", function () {
            const customModal = document.getElementById("customModal");
            customModal.style.display = "block"; // Show the modal
          });
        }
      </script>
    </div>
@endsection
