<form action="halaman/buku/bukutambah_aksi.php" method="post">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="hidden" class="form-control" name="idbuku" placeholder="Masukan ID Buku">
        </div>
    </div>

    <div class="form-group row">
        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Buku">
        </div>
    </div>

    <div class="form-group row">
        <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="pengarang" placeholder="Masukan Nama Pengarang">
        </div>
    </div>

    <div class="form-group row">
        <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="penerbit" placeholder="Masukan Nama Penerbit">
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary" name="tomboltambah">Tambah</button>

</form>