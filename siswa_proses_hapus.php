<?php 
require 'koneksi.php';

$nis = $_GET['nis'];

$query = "DELETE FROM tbl_siswa WHERE nis = '$nis'";
$result = mysqli_query($koneksi, $query);

if($result)
{
    echo "<script>
    alert('Data berhasil dihapus!')
    document.location.href = 'siswa.php';
    </script>";
} else {
    echo "<script>
    alert('Data gagal dihapus!')
    document.location.href = 'siswa.php';
    </script>";
}
