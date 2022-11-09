<a href="../../index.php?page=petugas">Kembali ke Data Siswa</a>
<br /><br />
<?php
include "../../../koneksi.php";
$idpetugas = $_GET['idpetugas'];
$ambildata = mysqli_query($sambung, "select * from tbl_petugas where idpetugas='$idpetugas'");
while ($tampildata = mysqli_fetch_array($ambildata)) {
?>

    <form action="../petugas/petugasubah_aksi.php" method="post" name="formubah">
        <table>
            <tr>
                <td><input type="hidden" name="idpetugas" value="<?php echo $tampildata['idpetugas'] ?>" readonly></td>
            </tr>

            <tr>
                <td>Nama Petugas</td>
                <td><input type="text" name="namapetugas" value="<?php echo $tampildata['namapetugas'] ?>"></td>
            </tr>

            <tr>
                <td>No HP</td>
                <td><input type="text" name="hp" value="<?php echo $tampildata['hp'] ?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $tampildata['username'] ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="<?php echo $tampildata['password'] ?>"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="tombolubah" value="Ubah" onclick="return confirm('Apa Anda yakin akan mengubah data buku?')">
            </tr>
        </table>
    </form>

<?php
}
?>