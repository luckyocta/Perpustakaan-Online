<!DOCTYPE html>
<html>

<head>
    <title>Perpustakaan UDB</title>
</head>

<body>
    <h2>
        <center>Aplikasi Perpustakaan</center>
    </h2>
    <h2>
        <center>Universitas Duta Bangsa</center>
    </h2>
    <center>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == 'gagal') {
            echo "Gagal Login, username atau password salah";
        } else
                if ($_GET['pesan'] == 'logout') {
            echo "Anda sudah logout";
        }
        if ($_GET['pesan'] == 'belum_login') {
            echo  "Anda harus login sebagai admin dahulu untuk mengakses halaman admin";
        }
    }
    ?>
    <p>PASWORD ADMIN : admin <br>USERNAME ADMIN : admin
    </p>
    </center>
    <table align="center">
        <form method="post" action="login_aksi.php" name="formlogin">

            <tr>
                <td>Username</td>
                <td><input type="text" name="nama" placeholder="Masukan username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="katakunci" placeholder="Masukan password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tombollogin" value="LOGIN"></td>
            </tr>
            <tr>

        </form>
        <td></td>
        <td><button onclick="window.location.href='/Perpus_onlen/daftar.php';">DAFTAR</button> </td>
        </tr>
    </table>

</body>

</html>