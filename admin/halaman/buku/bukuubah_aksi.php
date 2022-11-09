<?php 
    //koneksi dengan database 
    include '../../../koneksi.php'; 
    
    //menangkap data yang dikirim dari form dengan methode post 
    $idbuku     =$_POST['idbuku']; 
    $judul      =$_POST['judul']; 
    $pengarang  =$_POST['pengarang']; 
    $penerbit   =$_POST['penerbit']; 
    
    //update data dari database 
    mysqli_query($sambung,"update tbl_buku set judul='$judul',pengarang='$pengarang',penerbit='$penerbit' where idbuku='$idbuku'"); 

    //mengalihkan ke halaman daftar buku 
    header("location:../../index.php?page=buku"); 
?>