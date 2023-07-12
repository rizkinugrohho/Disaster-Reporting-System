<?php
require '../koneksi.php';

if (isset($_POST['simpan'])) {
    $id_korban = $_POST['id_korban'];
    $nis = $_POST['nis'];
    $nama_korban = $_POST['nama_korban'];
    $umur = $_POST['umur'];
    $kondisi = $_POST['kondisi'];

    $query = "INSERT INTO detail_korban (id_korban, nis, nama_korban, umur, kondisi)
    VALUES('$id_korban', '$nis', '$nama_korban', '$umur', '$kondisi')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'korban.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'korban.php';
        </script>";
    }
}
