<x-layout>
    <x-slot name="title">Laporan Produk</x-slot>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">LAPORAN PRODUK</h1>
    </div>
    <div class="card m-3">
        <div class="card-header text-center">
            <strong>LAPORAN PRODUK</strong>
        </div>
        <div class="card-body">
            <table class="table" id="mytable">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Berat</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $no => $product)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $product->name }}</td>
                            <td>Rp. {{ number_format($product->price, 2, ',', '.') }}</td>
                            <td>{{ $product->weigth }}gr</td>
                            <td>{{ $product->stok }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layout>
