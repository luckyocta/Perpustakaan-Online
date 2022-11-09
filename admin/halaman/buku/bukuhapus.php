<?php
    //koneksikan dengan database
    include "../../../koneksi.php";

    //ambil idbuku yang akan dihapus sebagai referensi
    $idbuku=$_GET['idbuku'];

    //query untuk menghapus data buku
    mysqli_query($sambung,"delete from tbl_buku where idbuku='$idbuku'");

    //arahkan ke halaman data buku setelah menghapus 1 data buku
    header("location:../../index.php?page=buku");
?>