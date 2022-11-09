<?php
    //mulai session
    session_start();
    //cek status sudah login
    if($_SESSION['status']!="login")
    {
        header("location:../index.php?pesan=belum_login");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Perpustakaan UDB</title>
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    </head>
    <body>
    <div class="container">
            <?php
                include "header.php";
                include "menu.php";
                include "sidebar.php";
                include "konten.php";
                include "footer.php";
            ?>
        </div>
    </body>
</html>