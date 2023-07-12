<?php
require 'koneksi.php';

$query = "SELECT * FROM tbl_users";
$result = mysqli_query($koneksi, $query);


?>
<?php require 'templates/header.php' ?>
<?php require 'templates/footer.php' ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Users</h1>
  </div>

  <div class="row my-4">
    <div class="col-md-5">
      <a href="users_form_tambah.php" class="btn btn-success">Tambah Data Users</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-7">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama User</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">level</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php while ($data = mysqli_fetch_assoc($result)) : ?>
            <tr>
              <th scope="row"><?= $no; ?></th>
              <td><?= $data['nama_user'] ?></td>
              <td><?= $data['username'] ?></td>
              <td><?= $data['password'] ?></td>
              <td><?= $data['level'] ?></td>
              <td>
                <a href="users_form_ubah.php?id_user=<?= $data['id_user'] ?>" class="badge text-bg-primary text-decoration-none">Ubah</a>
                <a href="users_proses_hapus.php?id_user=<?= $data['id_user'] ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('Yakin ingin dihapus?')">Hapus</a>
              </td>
            </tr>
            <?php $no++; ?>
          <?php endwhile; ?>
        </tbody>
      </table>

    </div>
  </div>

</main>