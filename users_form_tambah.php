<?php require 'templates/header.php' ?>
<?php require 'templates/footer.php' ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data User</h1>
  </div>

  <div class="row my-4">
    <div class="col-md-5">
      <a href="users.php" class="btn btn-danger">Kembali</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">

      <form action="users_proses_tambah.php" method="post">

        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        
        <div class="mb-3">
          <label for="nama_user" class="form-label">Nama User</label>
          <input type="nama_user" class="form-control" id="nama_user" name="nama_user">
        </div>

        <div class="mb-3">
          <label for="level" class="form-label">Level</label>
          <select class="form-select" aria-label="Default select example" name="level" id="level">
            <option selected>Pilih Level</option>
            <option value="admin">admin</option>
            <option value="kepsek">kepsek</option>
            <option value="siswa">siswa</option>
          </select>
        </div>

        <button type="submit" class="btn btn-success" name="simpan">Tambah Data</button>

      </form>

    </div>
  </div>

</main>