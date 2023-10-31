@extends('user.app')

@section('content')
<br>
<br>
@if ($errors->any())
@foreach ($errors->all() as $item)
<p>{{$item}}</p>
@endforeach
@endif
<div class="site-section">
    <div class="container">
        <div class="row">
      <div class="col-lg-7">
        <h2 class="section-heading"><strong>Sewa Penginapan Hewan</strong></h2>
      </div>
        </div>
        <br>
        <div class="card-body">
            <div class="badge badge-custom bg-{{ $rooms->status == 'Tersedia' ? 'success' : 'danger' }}
                text-white"
                style="top: 0; right: 0">
                {{$rooms -> status }}
            </div>
            <div class="block-4 border bg-primary">
                <img src="{{ Storage::url($rooms->gambar) }}" alt="Image placeholder" class="img-fluid"
                width="100%" style="height:100x">
                </a>
            <div class="block-4-text p-4" style="height: 200px;">
                <h3 class="text-white">Nama Ruangan : {{$rooms->nama_ruangan}}</h3>
                <p class="mb-0 text-white">Fasilitas : {{$rooms->fasilitas}}</p>
                <p class="mb-0 text-white">Rp. {{ number_format($rooms->harga_sewa, 2, ',', '.') }} / Perhari</p>
            </div>
        </div>
    </div>
      <form action="{{route ('user.sewa.store')}}" method="post">
        @csrf
        <h3 class="text-danger"><strong>Penting!</strong></h3>
        <h5>Silahkan Untuk Melengkapi Data Anda Dibawah Ini
          Untuk Menyelesaikan Pesanan.</h5>
          <h4>
            <strong class="text-capitalize">Harap di isi dengan data yang sebenarnya. Terimakasih</strong>
          </h4>
          <input type="hidden" name="room_id" value="{{$rooms->id}}">
          <input type="hidden" name="" value="">
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="nama"  class="form-control" required>
          </div>
          <div class="form-group">
            <label for="no_hp">No.HandPhone/Wa</label>
            <input type="number" name="no_hp"  class="form-control" required>
          </div>
          <div class="form-group">
            <label for="alamat">alamat</label>
            <input type="text" name="alamat"  class="form-control" required>
          </div>
          <div class="form-group">
            <label for="nama_hewan">Nama Hewan</label>
            <input type="text" name="nama_hewan"  class="form-control" required>
          </div>
          <div class="form-group">
            <label for="jenis">Jenis</label>
            <input type="jenis" name="jenis"  class="form-control" required>
          </div>
          <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk :</label>
            <input type="date" name="tanggal_masuk"  class="form-control" required>
          </div>
          <div class="form-group">
            <label for="tanggal_keluar">Tanggal Keluar :</label>
            <input type="date" name="tanggal_keluar" class="form-control" required>
          </div>

          <button type="submit" class="btn btn-success">Sewa</button>
      </form>
    </div>
</div>
@endsection
