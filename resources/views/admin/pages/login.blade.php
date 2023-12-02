<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Present Perfect - Dashboard</title>
    <!-- <link rel="shortcut icon" type="image/png" href="../assets/images/logos/SClogo.png" /> -->
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body style="background-color: #fdebd1;">
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="{{ route('dashboard_login') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="../assets/images/logos/logo.png" width="180" alt="">
                                </a>
                                <p class="text-center">Access To Your Dashboard</p>
                                <form method="POST" action="{{ route('loginAdmin') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" value='{{ old('email') }}' class="form-control" id="email"
                                            aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            required>
                                    </div>
                                    {{-- <div class="mb-4">
                                        <a class="fw-bold" href="{{ route('password.request') }}"
                                            style="color: #c49b63;">Forgot Password?</a>
                                    </div> --}}
                                    <button type="submit" class="btn btn-primary w-100 py-2 fs-4 mb-4 rounded-2">Login
                                        </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <script>
            window.addEventListener('DOMContentLoaded', (event) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    html: `@foreach ($errors->all() as $error)
                    <li style = "color: red;">{{ $error }}</li>

                    @endforeach` ,
                    footer: 'Fix the  issue and try again'
                });
            });
        </script>
    @endif
    @if (session('error'))
                        <script>
                            window.addEventListener('DOMContentLoaded', (event) => {
                                Swal.fire(
                                    'error!',
                                    '{{ session('error') }}',
                                    'error'
                                );
                            });
                        </script>
                    @endif
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
