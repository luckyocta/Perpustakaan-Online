<?php
    //koneksikan dengan database
    include "../../../koneksi.php";

    //ambil idsiswa yang akan dihapus sebagai referensi
    $idsiswa=$_GET['idsiswa'];

    //query untuk menghapus data siswa
    mysqli_query($sambung,"delete from tbl_siswa where idsiswa='$idsiswa'");

    //arahkan ke halaman data siswa setelah menghapus 1 data siswa
    header("location:../../index.php?page=siswa");
?>