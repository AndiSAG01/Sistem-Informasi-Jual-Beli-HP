@extends('user.app')
@section('content')
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="#">Home</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">Penginapan</strong></div>
            </div>
        </div>
    </div>
 
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center font-weight-bold text-primary mb-4">
                    <h3 class="display-5 font-weight-bold" style="text-transform:uppercase">Penginapan Hewan</h3>
                    <hr>
                </div>
                @foreach ($room as $rooms )
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="badge badge-custom bg-{{ $rooms->status == 'Tersedia' ? 'success' : 'danger' }}
                        text-white"
                        style="top: 0; right: 0">
                        {{$rooms -> status }}
                    </div>
                    <div class="block-4 border bg-primary">
                        <img src="{{ Storage::url($rooms->gambar) }}" alt="Image placeholder" class="img-fluid"
                        width="100%" style="height:200px">
                        </a>
                    <div class="block-4-text p-4" style="height: 200px;">
                        <h3 class="text-white">Nama Ruangan : {{$rooms->nama_ruangan}}</h3>
                        <p class="mb-0 text-white">Fasilitas : {{$rooms->fasilitas}}</p>
                        <p class="mb-0 text-white">Rp. {{ number_format($rooms->harga_sewa, 2, ',', '.') }} / Perhari</p>
                        <div class="d-flex justify-content-center">
                            <p>
                               @if ($rooms->status == 'Tersedia')
                               <a href="{{ route('user.sewa', ['id' => $rooms->id]) }}" class="btn btn-success">Sewa</a>
                               @else
                               <p class="btn btn-danger">Sedang Di sewa</p>
                               @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
@endsection
