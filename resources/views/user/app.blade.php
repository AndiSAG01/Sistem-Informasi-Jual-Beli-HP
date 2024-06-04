@php
    $toko = App\Alamat_toko::where('id', 1)->first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $toko->name_store }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{ asset('shopper') }}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('shopper') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('shopper') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('shopper') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('shopper') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('shopper') }}/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="{{ asset('shopper') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('shopper') }}/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <script src="https://kit.fontawesome.com/be87c3e44a.js" crossorigin="anonymous"></script>



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

        body {
            font-family: 'Georgia', sans-serif;
        }

        img {
            overflow: hidden;
            position: relative;
            object-fit: cover;

        }
/* animasi text */
        @import url("https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600");

        :root {
            --bar-scale-y: 0;
            --sparkle-color: rgb(253 244 215 / 40%);
        }

        @keyframes pop-word {
            to {
                transform: rotateX(0);
            }
        }

        @keyframes show {
            to {
                opacity: 1;
            }
        }

        @keyframes bar-scale {
            to {
                transform: scaleY(1);
            }
        }

        @keyframes sparkle {
            0% {
                transform: scale(0);
            }

            60% {
                transform: scale(1) translate(4px, 1px) rotate(8deg);
            }

            100% {
                transform: scale(0) translate(4px, 1px) rotate(8deg);
            }
        }

        @keyframes shimmer {
            to {
                text-shadow: 0 0 8px red;
            }
        }

        body {
            display: grid;
            height: 100vh;

            background-color: black;
            place-items: center;
        }

        text {
            color: white;
            font-family: "Playfair Display", Vidaloka, serif;
            font-size: 8rem;

            line-height: 0.85;
            perspective: 500px;
        }

        .word {
            display: block;

            animation: show 0.01s forwards, pop-word 1.5s forwards;
            animation-timing-function: cubic-bezier(0.14, 1.23, 0.33, 1.16);
            opacity: 0;

            transform: rotateX(120deg);
            transform-origin: 50% 100%;
        }

        .word:nth-of-type(2) {
            padding: 0 2rem;

            animation-delay: 1.5s;

            color: rgb(0, 0, 0);
        }

        .superscript {
            position: relative;
            animation-delay: 3.6s;

            animation-duration: 0.25s;
            animation-name: shimmer;

            vertical-align: text-top;
        }

        /* bars */
        .superscript::before {
            --bar-width: 25%;

            position: absolute;

            top: 37%;
            left: 47%;
            width: 14%;
            height: 48%;

            animation: bar-scale 0.25s linear 3s 1 forwards;

            background: linear-gradient(to right,
                    white var(--bar-width),
                    transparent var(--bar-width) calc(100% - var(--bar-width)),
                    white calc(100% - var(--bar-width)));

            content: "";

            transform: scaleY(var(--bar-scale-y));
        }

        /* sparkle */
        .superscript::after {
            --size: 10rem;

            position: absolute;

            top: -5%;
            left: -85%;

            width: var(--size);
            height: var(--size);

            animation: sparkle 0.4s linear 3.5s 1 forwards;

            background: radial-gradient(circle at center,
                    rgb(252 249 241 / 94%) 0% 7%,
                    transparent 7% 100%),
                conic-gradient(transparent 0deg 18deg,
                    var(--sparkle-color) 18deg,
                    transparent 20deg 40deg,
                    var(--sparkle-color) 40deg,
                    transparent 43deg 87deg,
                    var(--sparkle-color) 87deg,
                    transparent 95deg 175deg,
                    var(--sparkle-color) 175deg,
                    transparent 178deg 220deg,
                    var(--sparkle-color) 220deg,
                    transparent 222deg 270deg,
                    var(--sparkle-color) 270deg,
                    transparent 275deg 300deg,
                    var(--sparkle-color) 300deg,
                    transparent 303deg 360deg);

            border-radius: 50%;
            clip-path: polygon(50% 0,
                    59.13% 26.64%,
                    85.13% -2.35%,
                    100% 50%,
                    50% 100%,
                    0 50%,
                    31.39% 34.86%);

            content: "";

            filter: blur(1px);

            transform: scale(0);
        }

        @media screen and (max-width: 600px) {
            h1 {
                font-size: 5rem;
            }

            /* sparkle */
            .superscript::after {
                --size: 6rem;
            }
        }
        /* end animasi text */



        #border {
            margin: 0 auto;
            height: 300px;
            width: 900px;
            border-radius: 20px;
        }

        #bord {
            margin: 0 auto;
            height: 400px;
            width: 900px;
            border-radius: 20px;
        }

        #gr {
            margin: 0 auto;
            height: 90px;
            width: 450px;
            font-family: 'Blackletter';
        }

        #tr {
            margin: 0 auto;
            height: 200px;
            width: 600px;
            border-radius: 10px
        }


        #btn {
            width: 50px;
            height: 30px;
            border-radius: 20px;
            background-color: rgb(20, 48, 228)90, 230);

        }
    </style>
</head>

<body style="background-color:rgb(117, 117, 117)">
    <x-dateTarget></x-dateTarget>
    <div class="site-wrap">
        <header class="site-navbar" style="background-color: rgb(117, 117, 117) " role="banner">
            <div class="site-navbar-top">
                <div class="container p-3 rounded text-dark bg-white">
                    <div class="row align-items-center">

                        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                            <div class="font-weight-bold">
                                <img src="\adminassets\assets\images\maahir.jpg" alt="haloo" width="50px">
                                <a href="{{ route('home') }}"
                                    class="js-logo-clone d-sm-none d-lg-inline text-dark">{{ $toko->name_store }}</a>
                            </div>
                        </div>

                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-left">
                            <form action="{{ route('user.produk.cari') }}" method="get"
                                class="site-block-top-search">
                                @csrf
                                <input type="text" style="background-color: rgba(117, 117, 117, 0.44)"
                                    class="form-control border-0" name="cari" placeholder="Search">
                            </form>
                        </div>


                        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                            <div class="top-right links">
                                <div class="site-top-icons">
                                    <ul>
                                        @if (Route::has('login'))
                                            @auth
                                                <li>
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" id="dropdownMenuButton"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="icon icon-person"></span>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item"
                                                                href="{{ route('user.alamat') }}">Pengaturan Alamat</a>
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                                                                Logout
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <?php
                                                    $user_id = \Auth::user()->id;
                                                    $total_keranjang = \DB::table('keranjang')->select(DB::raw('count(id) as jumlah'))->where('user_id', $user_id)->first();
                                                    ?>
                                                    <a href="{{ route('user.keranjang') }}" class="site-cart">
                                                        <span class="icon icon-add_shopping_cart text-black"></span>
                                                        <span class="count">{{ $total_keranjang->jumlah }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php
                                                    $user_id = \Auth::user()->id;
                                                    $total_order = \DB::table('order')->select(DB::raw('count(id) as jumlah'))->where('user_id', $user_id)->where('status_order_id', '!=', 5)->where('status_order_id', '!=', 6)->first();
                                                    ?>
                                                    <a href="{{ route('user.order') }}" class="site-cart">
                                                        <span class="icon icon-shopping_cart text-black"></span>
                                                        <span class="count">{{ $total_order->jumlah }}</span>
                                                    </a>
                                                </li>
                                            @else
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" id="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="icon icon-person"></span>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="{{ route('login') }}">Masuk</a>
                                                        @if (Route::has('register'))
                                                            <a class="dropdown-item"
                                                                href="{{ route('register') }}">Daftar</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endauth
                                        @endif
                                        <li class="d-inline-block d-md-none ml-md-0"><a
                                                href="#"class="site-menu-toggle js-menu-toggle"><span
                                                    class="icon-menu text-black"></span></a></li>
                                </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="site-navigation text-right text-md-center" role="navigation">
                    <div class="container">
                        <ul class="site-menu js-clone-nav d-none d-md-block">
                            <li class="{{ Request::path() === '/' ? '' : '' }}"><a href="{{ route('home') }}"><span
                                        class="text-white">Beranda</span></a>
                            </li>
                            <li class="{{ Request::path() === 'produk' ? '' : '' }}"><a
                                    href="{{ route('user.produk') }}"><span class="text-white">Produk</span></a></li>
                        </ul>
                    </div>
                </nav>
        </header>

        @yield('content')

        <footer class="site-footer border-top">
            <div class="container bg-white p-5 rounded">
                <div class="row">
                    <div class="col-md mb-5 mb-lg-0">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4 text-black font-weight-bold">Tentang Toko</h3>
                                <ul class="list-unstyled text-black">
                                    <p>{{ $toko->description }}</p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @php
                        $city = App\City::where('city_id', $toko->city_id)->first();
                    @endphp
                    <div class="col-md col-lg-4">
                        <div class="block-5 mb-5">
                            <h3 class="footer-heading mb-4 text-black font-weight-bold">Contact Info</h3>
                            <ul class="list-unstyled">
                                <li class="address text-black">
                                    {{ $city->title }}, {{ $toko->detail }}
                                </li>
                                <li class="phone"><a
                                        href="https://api.whatsapp.com/send/?phone={{ $toko->telp }}&text&type=phone_number&app_absent=0"
                                        class="text-black">{{ $toko->telp }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('shopper') }}/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script src="{{ asset('shopper') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('shopper') }}/js/popper.min.js"></script>
    <script src="{{ asset('shopper') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('shopper') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('shopper') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('shopper') }}/js/aos.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.nonloop-block-3').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>


    <script src="{{ asset('shopper') }}/js/main.js"></script>
    @yield('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var minusBtn = document.querySelector('.js-btn-minus');
            var plusBtn = document.querySelector('.js-btn-plus');
            var qtyInput = document.querySelector('input[name="qty"]');

            minusBtn.addEventListener('click', function() {
                if (parseInt(qtyInput.value) > 1) {
                    qtyInput.value = parseInt(qtyInput.value) - 1;
                }
            });

            plusBtn.addEventListener('click', function() {
                qtyInput.value = parseInt(qtyInput.value) + 1;
            });
        });
    </script>

</body>

</html>
