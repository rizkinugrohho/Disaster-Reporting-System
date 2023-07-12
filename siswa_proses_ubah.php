<?php 
require 'koneksi.php';

if(isset($_POST['simpan']))
{

  $nis = $_POST['nis'];
  $id_kategori_bencana = $_POST['id_kategori_bencana'];
  $nama_bencana = $_POST['nama_bencana'];
  $waktu_bencana = $_POST['waktu_bencana'];
  $no_hp_siswa = $_POST['no_hp_siswa'];

  $query = "UPDATE tbl_siswa SET 
            id_kategori_bencana = '$id_kategori_bencana',
            nama_bencana = '$nama_bencana',
            waktu_bencana = '$waktu_bencana',
            no_hp_siswa = '$no_hp_siswa',
            nama_siswa = '$nama_bencana' WHERE nis = $nis
  ";

  $result = mysqli_query($koneksi, $query);

  if($result)
  {
    echo "<script>
    alert('Data berhasil diubah!')
    document.location.href = 'siswa.php';
    </script>";
  } else {
    echo "<script>
    alert('Data gagal diubah!')
    document.location.href = 'siswa.php';
    </script>";
  }

}
