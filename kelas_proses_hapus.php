<?php 
require 'koneksi.php';

$id_kategori_bencana = $_GET['id_kategori_bencana'];

$query = "DELETE FROM tbl_kelas WHERE id_kategori_bencana = $id_kategori_bencana";
$result = mysqli_query($koneksi, $query);

if($result)
{
    echo "<script>
    alert('Data berhasil dihapus!')
    document.location.href = 'kelas.php';
    </script>";
} else {
    echo "<script>
    alert('Data gagal dihapus!')
    document.location.href = 'kelas.php';
    </script>";
}

?>