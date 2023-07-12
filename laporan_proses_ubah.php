<?php
require 'koneksi.php';

if (isset($_POST['simpan'])) {

    $nis = $_POST['nis'];
    $id_kategori_bencana = $_POST['id_kategori_bencana'];
    $nama_bencana = $_POST['nama_bencana'];
    $waktu_bencana = $_POST['waktu_bencana'];
    $nama_prov = $_POST['nama_prov'];
    $nama_kota = $_POST['nama_kota'];
    $nama_kec = $_POST['nama_kec'];

    $query = "UPDATE pelaporan SET
            id_kategori_bencana = '$id_kategori_bencana',
            nama_bencana = '$nama_bencana',
            waktu_bencana = '$waktu_bencana',
            nama_prov = '$nama_prov',
            nama_kota = '$nama_kota',
            nama_kec = '$nama_kec' WHERE nis = $nis";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
    alert('Data berhasil diubah!')
    document.location.href = 'laporan.php';
    </script>";
    } else {
        echo "<script>
    alert('Data gagal diubah!')
    document.location.href = 'laporan.php';
    </script>";
    }

}
