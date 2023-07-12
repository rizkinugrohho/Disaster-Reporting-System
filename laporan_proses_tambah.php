<?php
require 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $id_kategori_bencana = $_POST['id_kategori_bencana'];
    $nama_bencana = $_POST['nama_bencana'];
    $waktu_bencana = $_POST['waktu_bencana'];
    $provinsi = $_POST["provinsi"];
    $kota = $_POST['kota'];
    $kecamatan = $_POST['kecamatan'];

    $query = "INSERT INTO pelaporan (nis, id_kategori_bencana, nama_bencana, waktu_bencana, nama_prov, nama_kota, nama_kec)
    VALUES('$nis', '$id_kategori_bencana', '$nama_bencana', '$waktu_bencana', '$provinsi', '$kota', '$kecamatan')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'laporan.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'laporan.php';
        </script>";
    }
}
