<?php
require 'koneksi.php';

$nis = $_GET['nis'];

$query = "DELETE FROM pelaporan ts JOIN kategori_bencana tk ON tk.id_kategori_bencana = ts.id_kategori_bencana
            WHERE nis = '$nis'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>
    alert('Data berhasil dihapus!')
    document.location.href = 'laporan.php';
    </script>";
} else {
    echo "<script>
    alert('Data gagal dihapus!')
    document.location.href = 'laporan.php';
    </script>";
}
