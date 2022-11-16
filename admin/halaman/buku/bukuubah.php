<a href="index.php?page=buku">Kembali ke Data Buku</a>
<br /><br />
<?php
include "../koneksi.php";
$idbuku = $_GET['idbuku'];
$ambildata = mysqli_query($sambung, "select * from tbl_buku where idbuku='$idbuku'");
while ($tampildata = mysqli_fetch_array($ambildata)) {
?>

    <form action="halaman/buku/bukuubah_aksi.php" method="post" name="formubah">
    <div class="form-group row">
            <div class="col-sm-10">
                <input type="hidden" class="form-control" name="idbuku" value="<?php echo $tampildata['idbuku'] ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="judul" value="<?php echo $tampildata['judul'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="pengarang" value="<?php echo $tampildata['pengarang'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="penerbit" value="<?php echo $tampildata['penerbit'] ?>">
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary" name="tombolubah" onclick="return confirm('Apa Anda yakin akan mengubah data buku?')">Ubah</button>
        
    </form>

<?php
}
?>