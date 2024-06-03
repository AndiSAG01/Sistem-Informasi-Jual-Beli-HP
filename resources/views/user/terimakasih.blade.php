@extends('user.app')
@section('content')
    <div class=" py-3" style="background-color: rgb(117, 117, 117) ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0">
                    <a href="#" class="text-black">Home</a>
                    <span class="mx-2 mb-0">/</span>
                    <a href="#" class="text-black">Order</a>
                    <span class="mx-2 mb-0">/</span>
                    <strong class="text-white">Success</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="icon-check_circle display-3 text-success"></span>
                    <h2 class="display-3 text-white font-weight-bold">Terima Kasih!</h2>
                    <p class="lead mb-5 text-black">Pesanan Kamu Berhasil Dibuat. Silahkan Konfirmasi Pembayaran Lewat
                        Menu Konfirmasi Pembayaran.</p>
                    <p><a href="{{ route('user.order') }}" class="btn btn-sm btn-dark">Menu Pembayaran</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
