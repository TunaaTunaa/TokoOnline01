<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/akr_logo.png') }}">
    <link href="{{ asset('backend/matrix-admin-package-full/dist/css/style.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="main-wrapper">
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark" style="min-height: 100vh;">
            <div class="auth-box bg-dark border-top border-secondary">
                <div class="text-center pt-3 pb-3">
                    <span class="db">
                        <img src="{{ asset('image/akr_logo1.png') }}" alt="logo" />
                    </span>
                </div>

                <form action="{{ route('backend.register.store') }}" method="POST" class="form-horizontal mt-3">
                    @csrf
                    <div class="row p-b-30">
                        <div class="col-12">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info text-white"><i class="ti-user"></i></span>
                                </div>
                                <input type="text" name="nama" class="form-control form-control-lg" placeholder="Nama" value="{{ old('nama') }}" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-success text-white"><i class="ti-email"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" value="{{ old('email') }}" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-white"><i class="ti-lock"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-white"><i class="ti-lock"></i></span>
                                </div>
                                <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="Konfirmasi Password" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info text-white"><i class="ti-mobile"></i></span>
                                </div>
                                <input type="text" name="hp" class="form-control form-control-lg" placeholder="No. HP" value="{{ old('hp') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="pt-3">
                                    <a href="{{ route('backend.login') }}" class="btn btn-info">
                                        <i class="fa fa-arrow-left"></i> Kembali ke Login
                                    </a>
                                    <button class="btn btn-success float-end text-white" type="submit">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Optional: jQuery dan Bootstrap (sama seperti login.blade) -->
    <script src="{{ asset('backend/matrix-admin-package-full/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/matrix-admin-package-full/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
