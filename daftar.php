<?php
    //koneksi ke database
    include "koneksi.php";
    ?>

    <form name="siswa" action="admin/halaman/siswa/siswatambah_aksi.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                 <div>
                    <input type="text" name="idsiswa" placeholder="ID Siswa">
                </div>
    
                <div>
                    <input type="text" name="nis" placeholder="NIS Siswa">
                </div>
                <div>
                    <input type="text" name="namasiswa" placeholder="Nama Lengkap">
                </div>
                <div>
                    <input type="text" name="kelas" placeholder="Kelas Siswa">
                </div>
                <div>
                    <input type="text" name="alamat" placeholder="Alamat Siswa">
                </div>
                <div>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div>
                    <input type="password" name="password" placeholder="Kata Sandi">
                </div>
                <div>
                    <!-- /.col -->
                    <div>
                        <button type="submit" name="tomboltambah" value="tambah">Daftar Sekarang</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>