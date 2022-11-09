<?php
    include "../../../koneksi.php";

    if(isset($_POST['tomboltambah'])){
        $idpinjam   = $_POST['idpinjam'];
        $namapetugas  = $_POST['idpetugas'];
        $namasiswa    = $_POST['idsiswa'];
        $judul     = $_POST['idbuku'];

        mysqli_query($sambung,"insert into tbl_peminjaman (idpinjam,idpetugas,idsiswa,idbuku) values ('$idpinjam','$namapetugas','$namasiswa','$judul')");
    }

    header("location:../../index.php?page=pinjam");
?>