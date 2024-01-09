<x-apps>
    <x-slot name="title">Suppliers</x-slot>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">SUPPLIERS</h1>
        @if (session('success'))
            <div class="alert alert-primary shadow" role="alert">
                {{ session('success') }}
            </div>
        @elseif ($errors->any())
            <div class="alert alert-danger shadow" role="alert">
                Ada yang salah dengan inputan anda, silahkan input ulang.
            </div>
            @elseif (session('danger'))
            <div class="alert alert-danger shadow" role="alert">
                {{ session('danger') }}
            </div>
        @else
            <div class="media bg-primary rounded mb-3 text-white p-3">
                <img class="align-self-center mr-3" width="230px" src="/layouts/drawKit/vector (14).svg"
                    alt="Generic placeholder image">
                <div class="media-body">
                    <small> <strong><i class="fas fa-regular fa-bell"></i> Peringatan!!!</strong><br>Pada menu admin
                        bagian
                        suppliers, Anda dapat melihat dan nama supplier dan nomor supplier yang digunakan melihat
                        informasi supplier. Nomor supplier ini harus sesuai dengan nama dan identitas Anda
                        sebagai admin. Terima kasih atas kerjasama Anda.
                    </small>
                </div>
            </div>
        @endif
        @include('admin.suppliers.tambah')
    </div>
    <div class="card shadow m-4">
        <div class="card-body">
            <table id="mytable" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Supplier</th>
                        <th>No HandPhone</th>
                        <th>Nama Barang</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($supplier as $no => $sup)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $sup->name }}</td>
                            <td>{{ $sup->no_telp }}</td>
                            <td>{{ $sup->name_item }}</td>
                            <td style="gap: 3px">
                                <a href="{{ route('admin.supplier.edit', ['id' => $sup->id]) }}"
                                    class="btn btn-warning btn-sm">
                                    <i class="fa fa-gavel" aria-hidden="true"></i> Ubah
                                </a>
                                <a href="{{ route('admin.supplier.delete', ['id' => $sup->id]) }}"
                                    onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-apps>
