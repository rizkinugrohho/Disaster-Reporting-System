<?php 
require 'koneksi.php';

if(isset($_POST['simpan']))
{

  $id_user = $_POST['id_user'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nama_user = $_POST['nama_user'];
  $level = $_POST['level'];

  $query = "UPDATE tbl_users SET 
            username = '$username',
            password = '$password',
            nama_user = '$nama_user',
            level = '$level' WHERE id_user = $id_user
  ";

  $result = mysqli_query($koneksi, $query);

  if($result)
  {
    echo "<script>
    alert('Data berhasil diubah!')
    document.location.href = 'users.php';
    </script>";
  } else {
    echo "<script>
    alert('Data gagal diubah!')
    document.location.href = 'users.php';
    </script>";
  }

}
