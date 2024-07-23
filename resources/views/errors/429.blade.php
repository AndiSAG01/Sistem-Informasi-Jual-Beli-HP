
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
        width: 500px; height:500px;
    }
</style>

<body class="bg-white">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            @if ($errors->any())
                <div class="alert alert-danger mt-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($errors->has('login'))
            <div class="alert alert-danger">
                {{ $errors->first('login') }}
            </div>
        @endif
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" style="background: rgb(0, 0, 0)">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block full-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <h1>Anda Sudah Terlalu Banyak Melakukan Login Tunggu <span id="countdown">60</span> detik Untuk Melakukan Login Kembali</h1>
                                    <p>Silakan tunggu...</p>
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
        $(".btn-refresh").click(function() {
            $.ajax({
                type: 'GET',
                url: '/refresh-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if ($errors->has('email') || $errors->has('password'))
                document.getElementById('email').value = '';
                document.getElementById('password').value = '';
            @endif
        });
    </script>
     <script>
        let countdown = 60; // Detik sebelum redirect
        const countdownElement = document.getElementById('countdown');

        setInterval(function() {
            countdown--;
            countdownElement.textContent = countdown;

            if (countdown <= 0) {
                window.location.href = 'http://127.0.0.1:8000/login'; // Ganti dengan URL halaman utama Anda
            }
        }, 500); // Update setiap detik
    </script>



</body>

</html>
