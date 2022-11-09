<?php
    include "../koneksi.php";
?>

<form action="halaman/pinjam/pinjamtambah_aksi.php" method="post">
    <table>
        <tr>
            <td>ID Pinjam</td>
            <td>
                <input type="text" name="idpinjam" placeholder="Masukan ID Peminjaman">
            </td>
        </tr>

        <tr>
            <td>Petugas</td>
            <td>
                <select name="idpetugas" >
                    <option>Pilih Nama Petugas</option>
                    <?php
                        $petugas_query = mysqli_query($sambung,"select * from tbl_petugas");
                        while($petugas_data = mysqli_fetch_array($petugas_query))
                        {
                    ?>     
                        <option value="<?php echo $petugas_data['idpetugas']?>">
                            <?php echo $petugas_data['namapetugas']?>
                        </option>    
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Siswa</td>
            <td>
                <select name="idsiswa">
                    <option>Pilih Nama Siswa</option>
                    
                    <?php
                        $siswa_query = mysqli_query($sambung,"select * from tbl_siswa");
                        while($siswa_data = mysqli_fetch_array($siswa_query))
                        {
                    ?>    
                        <option value="<?php echo $siswa_data['idsiswa']?>"><?php echo $siswa_data['namasiswa']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Judul</td>
            <td>
                <select name="idbuku">
                    <option>Pilih Judul Buku</option>
                    <?php
                        $buku_query = mysqli_query($sambung,"select * from tbl_buku");
                        while($buku_data = mysqli_fetch_array($buku_query))
                        {
                    ?>   
                        <option value="<?php echo $buku_data['idbuku']?>"><?php echo $buku_data['judul']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"></td>
        </tr>
    </table>
</form>