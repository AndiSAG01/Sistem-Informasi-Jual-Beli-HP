<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Page</title>

    <!-- Custom fonts for this template-->
    <link href="/layouts/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/layouts/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
    .full-image {
    background-image: url('{{ asset('/adminassets/assets/images/maahir.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>

<body class="bg-white">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" style="background: rgb(0, 0, 0)">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block full-image" ></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-white mb-4 font-weight-bold">Selamat datang kembali!</h1>
                                        <div class="alert bg-info  text-white alert-primary" role="alert">
                                            <small>Silakan masukkan email dan password Anda untuk login. Jika Anda belum
                                                memiliki akun, silakan klik tombol daftar di bawah ini.
                                            </small>
                                        </div>

                                    </div>
                                    <form class="pt-3" method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror form-control-user"
                                                name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror form-control-user"
                                                name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <input id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha">
                                                @error('captcha')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="captcha">
                                                    <span>{!! captcha_img() !!}</span>
                                                    <button type="button" class="btn btn-success btn-refresh mt-1">Refresh</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label text-white" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-user btn-block">
                                            Masuk
                                        </button>
                                    </form>
                                    
                                    <hr>
                                    <div class="text-center">
                                        <strong><a class="small text-white" href="/register">Buat Akun!</a></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/layouts/vendor/jquery/jquery.min.js"></script>
    <script src="/layouts/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/layouts/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/layouts/js/sb-admin-2.min.js"></script>
    <script type="text/javascript">
        $(".btn-refresh").click(function(){
            $.ajax({
                type: 'GET',
                url: '/refresh-captcha',
                success: function(data){
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
    

</body>

</html>
