<?php
require 'koneksi.php';

if (isset($_POST['simpan'])) {
    $tingkat_bencana = $_POST['tingkat_bencana'];

    $query = "INSERT INTO kategori_bencana VALUES('', '$tingkat_bencana')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'kelas.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'kelas.php';
        </script>";
    }
}
