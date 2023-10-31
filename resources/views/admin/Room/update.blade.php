<x-apps>
    <x-slot name="title">
        ROOM
    </x-slot>
    <div class="container">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">ROOM <small>/ {{ $room->nama_ruangan }}</small></h1>
    </div>

    <form action="{{ route('admin.room.update', ['id' => $room->id]) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="card shadow m-3">
            <div class="card-header font-weight-bold text-baseline">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ Storage::url($room->gambar) }}" class="rounded border-3"
                            style="object-fit: cover;
                                        object-position: center; width: 150px; height:150px;"
                            alt="{{ $room->nama_ruangan }}">
                    </div>
                    <div class="col-8">
                        <div class="custom-file">
                            <label for="exampleFormControlFile1">Foto Ruangan</label>
                            <input type="file" name="gambar" class="form-control-file btn btn-primary"
                                id="exampleFormControlFile1">
                            <small class="text-danger">Kosongkan jika tidak mengubah gambar</small>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputUsername1">Nama Ruangan</label>
                    <input required type="text" class="form-control" name="nama_ruangan" value="{{ $room->nama_ruangan }}">
                    @error('nama_ruangan')
                        <small class="text-danger form-text">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="Tersedia">Tersedia</option>
                        <option value="Tidak Tersedia">Tidak Tersedia</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="exampleInputUsername1">Harga Sewa</label>
                        <input required type="number" class="form-control" name="harga_sewa"
                            value="{{ $room->harga_sewa }}">
                        @error('harga_sewa')
                            <small class="text-danger form-text">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Fasilitas</label>
                    <textarea name="fasilitas" id="" cols="30" rows="5" class="form-control" required>{{ $room->fasilitas }}</textarea>
                    @error('fasilitas')
                        <small class="text-danger form-text">{{ $message }}</small>
                    @enderror
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary text-right"><i class="fas fa-check"></i>
                        Simpan</button>
                </div>
            </div>
        </div>
    </form>
</x-apps>
