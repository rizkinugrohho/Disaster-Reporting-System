<?php 
session_start();
require 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($koneksi, $query);
$check = mysqli_num_rows($result);

if($check > 0)
{
  $data = mysqli_fetch_assoc($result);

  if($data['level'] === 'admin') 
  {
    $_SESSION['login'] = true;
    $_SESSION['level'] = 'admin';
    $_SESSION['nama_user'] = $data['nama_user'];
    header("Location: dashboard.php");
    exit;
  } elseif($data['level'] === 'kepsek')
  {
    $_SESSION['login'] = true;
    $_SESSION['level'] = 'kepsek';
    $_SESSION['nama_user'] = $data['nama_user'];
    header("Location: dashboard.php");
    exit;
  } elseif($data['level'] === 'siswa')
  {
    $_SESSION['login'] = true;
    $_SESSION['level'] = 'siswa';
    $_SESSION['nama_user'] = $data['nama_user'];
    header("Location: dashboard.php");
    exit;
  } else 
  {
    header("Location: index.php?alert=gagal");
    exit;
  }
  
} else {
  header("Location: index.php?alert=gagal");
  exit;
}
