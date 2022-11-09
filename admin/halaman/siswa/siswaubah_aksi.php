<?php 
    //koneksi dengan database 
    include '../../../koneksi.php'; 
    
    //menangkap data yang dikirim dari form dengan methode post 
    $idsiswa     =$_POST['idsiswa']; 
    $nis         =$_POST['nis']; 
    $namasiswa   =$_POST['namasiswa']; 
    $kelas       =$_POST['kelas']; 
    $alamat      =$_POST['alamat']; 
    $hp          =$_POST['hp']; 
    $username         = $_POST['username'];
    $password         = $_POST['password'];
    
    //update data dari database 
    mysqli_query($sambung,"update tbl_siswa set nis='$nis',namasiswa='$namasiswa',kelas='$kelas', alamat='$alamat', hp='$hp', username='$username', password='$password' where idsiswa='$idsiswa'"); 

    //mengalihkan ke halaman daftar siswa
    header("location:../../index.php?page=siswa"); 
?>