<?php 
require 'koneksi.php';

$id_user = $_GET['id_user'];

$query = "DELETE FROM tbl_users WHERE id_user = $id_user";
$result = mysqli_query($koneksi, $query);

if($result)
{
    echo "<script>
    alert('Data berhasil dihapus!')
    document.location.href = 'users.php';
    </script>";
} else {
    echo "<script>
    alert('Data gagal dihapus!')
    document.location.href = 'users.php';
    </script>";
}

?>