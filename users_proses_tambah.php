<?php
require 'koneksi.php';

if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_user = $_POST['nama_user'];
    $level = $_POST['level'];

    $query = "INSERT INTO tbl_users VALUES('', '$username', '$password', '$nama_user', '$level')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'users.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'users.php';
        </script>";
    }
}
