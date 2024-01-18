@extends('user.app')
@section('content')
<div class="container" style="background-image: url('cv_ammar.jpeg'); width:1000px; height:500px;">
    {{-- <div class="card border-0">
        <div class="card-body">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="background-image: url('cv_ammar.jpeg')">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img class="d-block m-auto" src="/layouts/drawKit/vector (7).svg" style="height: 400px;"
                            alt="First slide">
                        <div class="carousel-caption d-md-block" style=" background-color: rgba(0, 0, 0, 0.405)">
                            <h5>Pengiriman cepat dan andal</h5>
                            <p>Jangan sampai menunggu lama untuk mendapatkan alat tulis kantor yang anda butuhkan
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block m-auto" src="/layouts/drawKit/vector (4).svg" style="height: 400px;"
                            alt="Second slide">
                        <div class="carousel-caption d-md-block" style=" background-color: rgba(0, 0, 0, 0.405)">
                            <h5>Kami menyediakan alat tulis kantor secara lengkap
                            </h5>
                            <p>Sehingga Anda tidak perlu khawatir tentang kelengkapan barang kami</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block m-auto" src="/layouts/drawKit/vector (8).svg" style="height: 400px;"
                            alt="Third slide">
                        <div class="carousel-caption d-md-block" style=" background-color: rgba(0, 0, 0, 0.405)">
                            <h5>Dapatkan alat tulis kantor dengan harga terjangkau di sini! </h5>
                            <p>Kami menawarkan produk-produk terbaik tanpa merusak dompet Anda.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div> --}}

    {{-- <div class="media mx-5 justify-content-center">
        <div class="row">
            <div class="col-md text-center">
                <img class="align-self-center mr-3 w-50" src="/layouts/drawKit/vector (3).svg"
                    alt="Generic placeholder image">
            </div>
            <div class="col-md">
                <div class="media-body align-self-center text-white" style=" background-color: rgba(0, 0, 0, 0.405)">
                    <h3 class="mt-5">kami ingin memastikan bahwa kebutuhan kantor Anda terpenuhi dengan hemat dan efisien.
                    </h3>
                    <p>Kunjungi toko kami sekarang, dan sambut efisiensi dan kenyamanan dalam setiap kegiatan kantor Anda.
                        Promo ATK ini hanya berlaku untuk waktu terbatas, jadi segera dapatkan sebelum kehabisan!
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
    
    <div class="card-body text-center text-white" style=" background-color: rgba(0, 0, 0, 0.405)">
        <h2 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"><b>Selamat Datang Di Toko Kami Silahkan Pilih Produk Yang Anda Inginkan</b></h2>
    </div>
    {{-- <div class="site-section block-3 site-blocks-2" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center text-white pt-4" style=" background-color: rgba(0, 0, 0, 0.405)">
                    <h2>Produk Terlaris</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="nonloop-block-3 owl-carousel">
                        @foreach ($produks as $produk)
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="{{ Storage::url($produk->image) }}" alt="Image placeholder"
                                            class="img-fluid" width="100%" style="height:300px">
                                    </figure>
                                    </a>
                                    <div class="block-4-text p-4" style="height: 200px;">
                                        <h3 class="text-dark">{{ $produk->name }}</h3>
                                        <p class="mb-0">Rp. {{ number_format($produk->price, 2, ',', '.') }}</small> <br>
                                            @if ($produk->stok == 0)
                                                <a href="{{ route('user.produk.detail', ['id' => $produk->id]) }}"
                                                    class="btn btn-primary mt-2 disabled" tabindex="-1" role="button"
                                                    aria-disabled="true">Habis</a>
                                            @else
                                                <a href="{{ route('user.produk.detail', ['id' => $produk->id]) }}"
                                                    class="btn btn-dark mt-2">Detail</a>
                                            @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
