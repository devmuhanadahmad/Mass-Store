<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Register</h3>
                            @if (\Session::has('message'))
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input name="name" type="text" value="{{ old('name') }}" autocomplete="name"
                                        autofocus class="form-control p_input" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="email" value="{{ old('email') }}"
                                        autocomplete="email" autofocus class="form-control p_input" required>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" type="password" value="{{ old('password') }}"
                                        autocomplete="password" autofocus class="form-control p_input" required>
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input name="password_confirmation" value="{{ old('password_confirmation') }}"
                                        autocomplete="password_confirmation" autofocus type="password"
                                        class="form-control p_input" required>
                                </div>
                                <div class="form-group">
                                    <x-form.status lable="Type Account" name="type_account" required
                                        :option="['salesman ' => 'Salesman', 'trader' => 'Trader']" />
                                    @error('type_account')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn btn-primary btn-block enter-btn w-50">Login</button>
                                </div>

                                <p class="sign-up text-center">Already have an Account?<a href="{{ route('login') }}">
                                        Sign Up</a></p>
                                <p class="terms">By creating an account you are accepting our<a href="#"> Terms &
                                        Conditions</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
