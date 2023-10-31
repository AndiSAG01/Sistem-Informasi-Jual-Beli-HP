<x-apps>
    <x-slot name="title">PEENGINAPAN HEWAN</x-slot>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">DATA PENGINAPAN HEWAN</h1>
        @if (session('success'))
            <div class="alert alert-primary shadow" role="alert">
                {{ session('success') }}
            </div>
        @elseif ($errors->any())
            <div class="alert alert-danger shadow" role="alert">
                Ada yang salah dengan inputan anda, silahkan input ulang.
            </div>
        @endif
        {{-- @include('') --}}
    </div>
    <div class="card shadow m-3">
        <div class="card-body">
            <table id="mytable" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Costumer</th>
                        <th>No.Handphone</th>
                        <th>Alamat</th>
                        <th>Nama Hewan</th>
                        <th>Jenis Hewan</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Status</th>
                        <th width="15%">Aksi</th>
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
                        @elseif ($sw->status == 'sewa anda di tolak' )
                            <a class="btn btn-danger" href="#" role="button">Di Tolak</a>
                        @endif
                        </td>
                        <td>
                            @if ($sw->status == 'selesai')
                        <a class="btn btn-success" href="#" role="button">Selesai</a>
                    @elseif($sw->status == 'telah di sewa')
                        <a href="{{ Route('admin.transaksi.selesai', $sw->id) }}"
                            class="btn btn-success">Selesai</a>
                    @elseif($sw->status == 'menunggu konfirmasi')
                        <form action="{{ Route('transaksi.confirmation', $sw->id) }}" method="post">
                            @csrf
                            @method('put')
                            <button type="submit" class="btn btn-primary">Konfirmasi</button>
                        </form>

                    @elseif ($sw->status == null )
                    <form action="{{ Route('admin.transaksi.reject', $sw->id) }}" method="post">
                        @csrf
                        @method('put')

                        <button type="submit" class="btn btn-danger">Tolak</button>
                    </form>

                    @else
                    <form action="{{Route('admin.penginapan.delete', $sw->id)}}" method="post">
                        @csrf
                        @method('put')
                        <button type="submit" class="btn btn-danger">Hapus</button>

                    </form>
                    @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-apps>
