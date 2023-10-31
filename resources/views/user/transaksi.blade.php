@extends('user.app')

@section('content')
@if ($errors->any())
@foreach ($errors->all() as $item)
<p>{{$item}}</p>
@endforeach
@endif
    <x-slot name="title">TRANSAKSI</x-slot>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold text-center">TRANSAKSI</h1>
    </div>
    <div class="card shadow m-3">
        <table id="example" class="table bg-white table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No.HandPhone / Wa</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nama Hewan</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Tanggal Keluar</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1; // Initialize the $no variable
                @endphp

                @foreach ($sewa as $sw)
                <tr>
                    <td>{{ $no++ }}</td> <!-- Increment the $no variable and display it -->
                    <td>{{ $sw->nama }}</td>
                    <td>{{ $sw->no_hp }}</td>
                    <td>{{ $sw->alamat }}</td>
                    <td>{{ $sw->nama_hewan }}</td>
                    <td>{{ $sw->jenis }}</td>
                    <td>{{ $sw->tanggal_masuk }}</td>
                    <td>{{ $sw->tanggal_keluar }}</td>
                    <td>
                        @if ($sw->status == 'selesai')
                        <a class="btn btn-success" href="#" role="button">Selesai</a>
                    @elseif($sw->status == 'telah di sewa')
                        <a class="btn btn-info" href="#" role="button">Sedang disewa</a>
                    @elseif($sw->status == 'menunggu konfirmasi')
                        <a class="btn btn-secondary" href="#" role="button">Menunggu Konfirmasi</a>
                    @elseif($sw->status == 'sewa anda di tolak')
                        <span class="text-white p-3 badge bg-danger">Di Tolak</span>
                        <form onclick="return confirm('anda yakin data dihapus?');" class="d-inline" action="{{ route('transaksi.delete',$sw->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                            @method('delete')
                        </form>
                    @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        </div>
    </div>



@endsection

