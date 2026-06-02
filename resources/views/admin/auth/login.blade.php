<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login | THE NIACE</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/css/sb-admin-2.min.css">

    <style>
        body { font-family: 'Nunito', sans-serif; }
        .bg-gradient-primary { background: linear-gradient(180deg, #DF4C18 10%, #c23e12 100%) !important; }
        .btn-primary          { background-color: #DF4C18; border-color: #DF4C18; }
        .btn-primary:hover    { background-color: #c23e12; border-color: #c23e12; }
        .text-primary         { color: #DF4C18 !important; }
        a                     { color: #DF4C18; }
        a:hover               { color: #c23e12; }
        .card                 { border: none; border-radius: 14px; }
    </style>
</head>
<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center" style="min-height:100vh; align-items:center;">
            <div class="col-xl-5 col-lg-6 col-md-8">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <div class="p-5">
                            <div class="text-center mb-4">
                                <h1 class="h3 font-weight-bold" style="color:#DF4C18;">
                                    <span style="color:#111;">THE</span> NIACE
                                </h1>
                                <p class="text-muted small">Admin Panel — Secure Login</p>
                            </div>

                            @if($errors->any())
                                <div class="alert alert-danger py-2 small">
                                    {{ $errors->first() }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('admin.login.submit') }}">
                                @csrf

                                <div class="form-group">
                                    <label class="small font-weight-bold text-gray-700">Email Address</label>
                                    <input type="email" name="email"
                                           class="form-control form-control-user @error('email') is-invalid @enderror"
                                           placeholder="admin@example.com"
                                           value="{{ old('email') }}" required autofocus>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="small font-weight-bold text-gray-700">Password</label>
                                    <input type="password" name="password"
                                           class="form-control form-control-user"
                                           placeholder="••••••••" required>
                                </div>

                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                        <label class="custom-control-label" for="remember">Remember Me</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block font-weight-bold">
                                    Login to Admin Panel
                                </button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/js/sb-admin-2.min.js"></script>
</body>
</html>
