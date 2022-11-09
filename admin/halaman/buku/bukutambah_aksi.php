<?php
    include "../../../koneksi.php";

    if(isset($_POST['tomboltambah'])){
        $idbuku     = $_POST['idbuku'];
        $judul      = $_POST['judul'];
        $pengarang  = $_POST['pengarang'];
        $penerbit   = $_POST['penerbit'];

        mysqli_query($sambung,"insert into tbl_buku (idbuku,judul,pengarang,penerbit) values ('$idbuku','$judul','$pengarang','$penerbit')");
    }

    header("location:../../index.php?page=buku");
?>