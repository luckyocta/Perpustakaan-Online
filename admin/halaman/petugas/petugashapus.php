<?php
    //koneksikan dengan database
    include "../../../koneksi.php";

    //ambil idsiswa yang akan dihapus sebagai referensi
    $idpetugas=$_GET['idpetugas'];

    //query untuk menghapus data siswa
    mysqli_query($sambung,"delete from tbl_petugas where idpetugas='$idpetugas'");

    //arahkan ke halaman data siswa setelah menghapus 1 data siswa
    header("location:../../index.php?page=petugas");
?>