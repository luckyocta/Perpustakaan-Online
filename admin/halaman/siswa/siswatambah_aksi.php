<?php
    include "../../../koneksi.php";

    if(isset($_POST['tomboltambah'])){
        $idsiswa    = $_POST['idsiswa'];
        $nis        = $_POST['nis'];
        $namasiswa  = $_POST['namasiswa'];
        $kelas      = $_POST['kelas'];
        $alamat     = $_POST['alamat'];
        $hp         = $_POST['hp'];
        $username         = $_POST['username'];
        $password         = $_POST['password'];

        mysqli_query($sambung,"insert into tbl_siswa (idsiswa,nis,namasiswa,kelas,alamat,hp,username,password) values ('$idsiswa','$nis','$namasiswa','$kelas','$alamat','$hp','$username','$password')");
    }

    header("location:../../index.php?page=siswa");
?>