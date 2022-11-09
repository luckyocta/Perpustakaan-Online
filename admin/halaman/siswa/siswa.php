<h3>
    <center>Daftar Siswa</center>
</h3>
<p>
<h3>
    <center>Perpustakaan UDB</center>
</h3>
<a href="index.php?page=siswatambah" class="btn btn-primary">Tambah Siswa</a>

<!--awal table-->
<table align="center" class="table table-bordered table-striped table-hover" border="1">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="20%" align="center">NIS</td>
        <td width="20%" align="center">Nama</td>
        <td width="10%" align="center">Kelas</td>
        <td width="25%" align="center">Alamat</td>
        <td width="20%" align="center">No HP</td>
        <td width="20%" align="center">Aksi</td>
    </tr>
    <!--akhir header table-->

    <?php
    //koneksi ke database melalui koneksi.php
    include "../koneksi.php";

    //menentukan banyak nya data yang akan ditampilkan dalam 1 halaman
    $batas   = 10;
    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
    $mulai  = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

    //ambil data dari tabel tbl_siswa
    $ambildata1     = mysqli_query($sambung, "SELECT * FROM tbl_siswa LIMIT $mulai, $batas");
    $ambildata2     = mysqli_query($sambung, "SELECT * FROM tbl_siswa");
    $jumlahdata     = mysqli_num_rows($ambildata2);
    $jumlahhalaman  = ceil($jumlahdata / $batas);
    $nomor = $mulai + 1;

    while ($tampildata = mysqli_fetch_array($ambildata1)) {
    ?>

        <!--awal menampilkan data dari tabel siswa ke halaman web-->
        <tr>
            <td> <?php echo $nomor++ ?></td>
            <td align="center"> <?php echo $tampildata['nis'] ?></td>
            <td align="center"> <?php echo $tampildata['namasiswa'] ?></td>
            <td align="center"> <?php echo $tampildata['kelas'] ?></td>
            <td align="center"> <?php echo $tampildata['alamat'] ?></td>
            <td align="center"> <?php echo $tampildata['hp'] ?></td>
            <td align="center">
                <a href="halaman/siswa/siswaubah.php?idsiswa=<?php echo $tampildata['idsiswa']; ?>">
                    Edit
                </a>
                |
                <a href="halaman/siswa/siswahapus.php?idsiswa=<?php echo $tampildata['idsiswa']; ?>" onclick="return confirm('Apa Anda yakin akan menghapus Data Buku?')">
                    Delete
                </a>
            </td>
        </tr>
        <!--akhir menampilkan data dari tabel siswa ke halaman web-->

    <?php
    }
    ?>
</table>
<!--akhir table-->

<!--awal menentukan banyaknya halaman pagination-->
<?php
$ambildata2 = mysqli_query($sambung, "select * from tbl_siswa");
$jumlahdata = mysqli_num_rows($ambildata2);
$jumlahhalaman = ceil($jumlahdata / $batas);
?>
<!--akhir menentukan banyaknya halaman pagination-->

<p>

    <!--awal navigasi pagination-->
    <nav>
    <ul class="pagination justify-content-center">
    <?php 
        for ($i=1; $i<=$jumlahhalaman; $i++) 
        { 
            if ($i != $halaman) 
            {
    ?>
        <li class="page-item"><a class="page-link" href="../admin/index.php?page=siswa&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php
        } 
            else {
                echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
            }
    
        } 
    ?>
    </ul>
</nav>
<!--akhir navigasi pagination-->