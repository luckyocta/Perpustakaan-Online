<?php

  //mulai session
  session_start();

  //koneksi ke database
  include "koneksi.php";

  //ambil data dari form login
  $username=$_POST['nama'];
  $password=$_POST['katakunci'];

  //query dari tabel user
   $ambildata=mysqli_query($sambung,"SELECT * from tbl_petugas where username='$username' and password='$password'");
  
        //cek data
        $cek=mysqli_num_rows($ambildata);
        $row = mysqli_fetch_assoc($ambildata);
        if($cek>0)
        {
            $_SESSION['username']=$username;
            $_SESSION['status']='login';
            header("location:admin/index.php");
        }
        else if( $ambildata=mysqli_query($sambung,"SELECT * from tbl_siswa where username='$username' and password='$password'")){
            $cek=mysqli_num_rows($ambildata);
            $row = mysqli_fetch_assoc($ambildata);
                if($cek>0)
                {
                    $_SESSION['username']=$username;
                    $_SESSION['status']='login';
                    header("location:user/index.php");
                } else {
                    header("location:index.php?pesan=gagal");
                }
           
        }

 


?>