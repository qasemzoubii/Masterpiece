@extends('admin.Layouts.master')
@section('title', 'Contacts')
@section('content')
<div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <h2>Inquireis</h2>
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
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                                {{-- <th scope="row">{{ $category->id }}</th> --}}
                                <td>{{ $contact->name }}</td>                                
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>
                                    <br>
                                
                                <a href="{{ route('index',$contact->id) }}"><button type="button" class="btn btn-outline-success m-1 w-50"></i>Replay</button></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{ $contacts->links('pagination::bootstrap-4')}}  
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

