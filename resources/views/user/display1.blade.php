@extends('user.app')
@section('content')
    <div class="container my-5 text-center text-white">
        <h1 class="font-weight-bold text-white">MAAHIR STORE JAMBI
        <h3 class="font-weight-bold text-white">TOKO JUAL BELI HANDPHONE SECOND</h3>
        </h1>
    </div>

    <div class="container">
        <div class="site-blocks-cover rounded"
            style="background-image: url('https://images.unsplash.com/photo-1573148164257-8a2b173be464?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fHBldCUyMGNhdHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=700&q=60'); max-height:200px;"
            data-aos="fade">
            <div class="container">
                <div class="row align-items-start align-items-md-center justify-content-end">
                </div>
            </div>
        </div>
    </div>
    <div class="site-section block-3 site-blocks-2" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2 class="text-white">Produk Terbaru</h2>
                    <hr class="border">
                </div>
            </div>
            @php
                $random1 = App\Product::oldest()->first();
                $random2 = App\Product::inRandomOrder()
                    ->limit(2)
                    ->get();
                $random3 = App\Product::latest()
                    ->limit(2)
                    ->get();
            @endphp
           <div class="row">
            <div class="col-md-12">
                <div class="nonloop-block-3 owl-carousel">
                    @foreach ($produks as $produk)
                        <div class="item">
                            <div class="block-4 text-center border bg-secondary">
                                <img src="{{ Storage::url($produk->image) }}" alt="Image placeholder" class="img-fluid" width="100%" style="height:200px">
                                <div class="block-4-text p-4" style="height: 200px;">
                                    <h3 class="text-white">{{ Str::limit($produk->name, 20, '...') }}</h3>
                                    <p class="mb-0 text-white">Rp. {{ number_format($produk->price, 2, ',', '.') }}</p>
                                    @if ($produk->stok == 0)
                                        <a href="{{ route('user.produk.detail', ['id' => $produk->id]) }}" class="btn btn-primary mt-2 disabled" tabindex="-1" role="button" aria-disabled="true">Habis</a>
                                    @else
                                        <a href="{{ route('user.produk.detail', ['id' => $produk->id]) }}" class="btn btn-dark mt-2">Detail</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
            
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h6 class="text-white font-weight-bold text-uppercase mb-3">FITUR KAMI</h6>
                    <h1 class="font-weight-bold text-white mb-5">KAMI STORE TERPECAYA</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <i class="fa fa-globe text-white fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5 class="font-weight-bold text-white">Produk Asli</h5>
                            <p class="mb-0 text-white">Menjamin kualitas terbaik yang siap memenuhi kebutuhan dan harapan
                                pelanggan kami</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <i class="fa fa-shipping-fast text-white fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5 class="font-weight-bold text-white">Pengiriman Tepat Waktu</h5>
                            <p class="mb-0 text-white">Layanan pengiriman JNE yang membantu kami mengirimkan semua kebutuhan
                                Anda.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s"
                        style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                        <i class="fa fa-headphones text-white fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5 class="font-weight-bold text-white">Dukungan Telepon 24/7</h5>
                            <p class="mb-0 text-white">Anda dapat menghubungi kami kapan saja, baik siang maupun malam,
                                untuk
                                berkonsultasi tentang kebutuhan handphone Anda. Tim dukungan kami siap membantu Anda
                                dengan senang hati.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s"
                    style="min-height: 400px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100"
                            src="https://demo.htmlcodex.com/2202/shipping-company-website-template/img/feature.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection