<!-- Button trigger modal -->
<button type="button" class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-solid fa-cube"></i> Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="alert alert-warning" role="alert">
                    <small class="modal-title" id="exampleModalLabel">
                        <strong><i class="fas fa-regular fa-bell"></i> Peringatan!!!</strong> <br>Anda harus memasukkan
                        informasi secara lengkap dan
                        akurat sebelum menyimpannya. Pastikan Anda Membuat Nama Ruangan , Deskripsi , dan Harga sewa yang sesuai.
                        </p>
                </div>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.room.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Ruangan</label>
                        <input type="text" name="nama_ruangan" class="form-control" id="formGroupExampleInput" placeholder="Masukan Nama Ruangan">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Fasilitas</label>
                        <input type="text" name="fasilitas" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Deskripsi ">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput">Harga Sewa</label>
                        <input type="number" name="harga_sewa" class="form-control" id="formGroupExampleInput" placeholder=" Masukan Harga Sewa">
                      </div>
                      <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
                    </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="formGroupExampleInput2" placeholder="">
                      </div>
                      <div class="text-right">
                        <button type="submit" class="btn btn-primary text-right"><i class="fas fa-check"></i>
                            Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
