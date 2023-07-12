<?php
require 'koneksi.php';

if (isset($_POST['simpan'])) {

    $id_kategori_bencana = $_POST['id_kategori_bencana'];
    $tingkat_bencana = $_POST['tingkat_bencana'];

    $query = "UPDATE kategori_bencana SET
            tingkat_bencana = '$tingkat_bencana' WHERE id_kategori_bencana = $id_kategori_bencana
  ";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
    alert('Data berhasil diubah!')
    document.location.href = 'kelas.php';
    </script>";
    } else {
        echo "<script>
    alert('Data gagal diubah!')
    document.location.href = 'kelas.php';
    </script>";
    }

}
