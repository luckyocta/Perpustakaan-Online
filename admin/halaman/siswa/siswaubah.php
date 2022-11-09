<a href="../../index.php?page=siswa">Kembali ke Data Siswa</a>
<br /><br />
<?php
include "../../../koneksi.php";
$idsiswa = $_GET['idsiswa'];
$ambildata = mysqli_query($sambung, "select * from tbl_siswa where idsiswa='$idsiswa'");
while ($tampildata = mysqli_fetch_array($ambildata)) {
?>

    <form action="../siswa/siswaubah_aksi.php" method="post" name="formubah">
        <table>
            <tr>
                <td><input type="hidden" name="idsiswa" value="<?php echo $tampildata['idsiswa'] ?>" readonly></td>
            </tr>

            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" value="<?php echo $tampildata['nis'] ?>"></td>
            </tr>

            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" name="namasiswa" value="<?php echo $tampildata['namasiswa'] ?>"></td>
            </tr>

            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?php echo $tampildata['kelas'] ?>"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $tampildata['alamat'] ?>"></td>
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
                <td>No HP</td>
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