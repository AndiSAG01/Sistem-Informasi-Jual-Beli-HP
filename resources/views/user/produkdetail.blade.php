@extends('user.app')
@section('content')
    <div class="py-3" style="background-color: rgb(117, 117, 117) ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="#" class="text-black">Home</a> <span class="mx-2 mb-0">/</span><a
                        href="#" class="text-black">Product</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-white">{{ $category->name }}</strong></div>
            </div>
        </div>
    </div>

    @foreach ($errors->all() as $error)
        <div class="container alert alert-danger alert-dismissible fade show text-center justify-content-center"
            role="alert">
            {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-black mb-4">
                    <h3 class="display-5 font-weight-bold" style="text-transform:uppercase">Detail Produk</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ Storage::url($produk->image) }}" alt="Image" width="100%" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2 class="font-weight-bold text-white">{{ $produk->name }}</h2>
                    <p class="text-white">
                        {{ $produk->description }}
                    </p>
                    <p>
                        <strong class="text-white h4">Rp {{ number_format($produk->price, 2, ',', '.') }} </strong>
                    </p>
                    <div class="mb-5">
                        <form action="{{ route('user.keranjang.simpan') }}" method="post">
                            @csrf
                            @if (Route::has('login'))
                                @auth
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                @endauth
                            @endif
                            <input type="hidden" name="products_id" value="{{ $produk->id }}">
                            
                            <small class="mb-4 text-white">Sisa Stok 
                                @if ($produk->stok <= 0)
                                    <button class="btn btn-danger">Stok Telah Habis</button>
                                @elseif ($produk->stok >= 0)
                                    {{ $produk->stok }}
                                @endif
                            </small>
                            <input type="hidden" value="{{ $produk->stock }}" id="sisastok">
                            
                            <div class="input-group mb-4" style="max-width: 120px;">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                </div>
                                <input type="text" name="qty" class="form-control text-center" value="1"
                                    placeholder="" aria-label="Example text with button addon"
                                    aria-describedby="button-addon1">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                </div>
                            </div>
                    
                            <p><button type="submit" class="buy-now btn btn-sm btn-white">Masukkan ke keranjang</button></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
