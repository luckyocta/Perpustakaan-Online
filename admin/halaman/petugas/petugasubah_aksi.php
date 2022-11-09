<?php 
    //koneksi dengan database 
    include '../../../koneksi.php'; 
    
    //menangkap data yang dikirim dari form dengan methode post 
    $idpetugas    =$_POST['idpetugas']; 
    $namapetugas         =$_POST['namapetugas']; 
    $hp          =$_POST['hp']; 
    $username         = $_POST['username'];
    $password         = $_POST['password'];
    
    //update data dari database 
    mysqli_query($sambung,"update tbl_petugas set namapetugas='$namapetugas', hp='$hp', username='$username', password='$password' where idpetugas='$idpetugas'"); 

    //mengalihkan ke halaman daftar petugas
    header("location:../../index.php?page=petugas"); 
?>