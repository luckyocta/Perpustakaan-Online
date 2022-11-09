<div class="konten">
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include "halaman/home.php";
                break;
            case 'buku':
                include "halaman/buku/buku.php";
                break;
            case 'siswa':
                include "halaman/siswa/siswa.php";
                break;
            case 'pinjam':
                include "halaman/pinjam/pinjam.php";
                break;
            case 'pinjamtambah':
                include "halaman/pinjam/pinjamtambah.php";
                break;
            case 'petugas':
                include "halaman/petugas/petugas.php";
                break;
            case 'bukutambah':
                include "halaman/buku/bukutambah.php";
                break;
            case 'bukuubah':
                include "halaman/buku/bukuubah.php";
                break;
            case 'siswaubah':
                include "halaman/siswa/siswaubah.php";
                break;
            case 'siswatambah':
                include "halaman/siswa/siswatambah.php";
                break;
            case 'petugasaubah':
                include "halaman/petugas/petugasubah.php";
                break;
            case 'petugastambah':
                include "halaman/petugas/petugastambah.php";
                break;
            default:
                echo "Maaf halaman yang anda tuju tidak ada";
                break;
        }
    }
    ?>
</div>
</div>