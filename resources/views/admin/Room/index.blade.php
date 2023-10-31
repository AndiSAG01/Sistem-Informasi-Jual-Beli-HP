<x-apps>
    <x-slot name="title">RUANG PENGINAPAN</x-slot>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">RUANG PENGINAPAN</h1>
        @if (session('success'))
            <div class="alert alert-primary shadow" role="alert">
                {{ session('success') }}
            </div>
        @elseif ($errors->any())
            <div class="alert alert-danger shadow" role="alert">
                Ada yang salah dengan inputan anda, silahkan input ulang.
            </div>
        @endif
        @include('admin.room.create')
    </div>
    <div class="card shadow m-3">
        <div class="card-body">
            <table id="mytable" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Gambar</th>
                        <th>Nama Ruangan</th>
                        <th>Fasilitas</th>
                        <th>Harga Sewa</th>
                        <th>Status</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($room as $no => $rooms)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td><img src="{{ Storage::url($rooms->gambar)}}"
                            style="object-fit: cover;
                              object-position: center; width: 150px; height:150px;" alt=""></td>
                        <td>{{ $rooms->nama_ruangan }}</td>
                        <td>{{ $rooms->fasilitas }}</td>
                        <td>{{$rooms->harga_sewa}}</td>
                        <td>{{$rooms->status}}</td>
                        <td>
                            <div class="d-flex" style="gap: 5px">
                                <a href="{{ route('admin.room.edit', ['id' => $rooms->id])}}"
                                    class="btn btn-warning btn-sm"><i class="fa fa-gavel" aria-hidden="true"></i>
                                    Ubah</a>
                                <a href="{{ route('admin.room.delete', ['id' => $rooms->id])}}"
                                    onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </div>
                        </td>

                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
</x-apps>
