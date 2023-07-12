<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/dashboard.css" rel="stylesheet">
</head>

<body>


  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">SMA xyz</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3 text-white" onclick="return confirm('Yakin ingin keluar?')" href="logout.php">
          <?=$_SESSION['nama_user']?> anda login sebagai <?=$_SESSION['level']?>, Keluar
          <span data-feather="log-out" class="align-text-bottom"></span>
        </a>
      </div>
    </div>
  </header>

  <div class="container-fluid">

    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">

        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashboard.php">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="kelas.php">
                <span data-feather="file-plus" class="align-text-bottom"></span>
                Kategori Bencana
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="laporan.php">
                <span data-feather="file-plus" class="align-text-bottom"></span>
                Data Bencana
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="users.php">
                <span data-feather="users" class="align-text-bottom"></span>
                Data Users
              </a>
            </li>

          </ul>
        </div>
      </nav>