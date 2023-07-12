<?php
require '../koneksi.php';

$query = "SELECT * FROM pelaporan ts
          INNER JOIN kategori_bencana tk ON tk.id_kategori_bencana = ts.id_kategori_bencana
          ORDER BY nis DESC LIMIT 5";
$result = mysqli_query($koneksi, $query);

?>
<?php require 'index_mas.php'?>
<?php require '../templates/footer.php'?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Histori</h1>
  </div>

  <div class="row my-4">
    <div class="col-md-5">
      <a href="mas_form_tambah.php" class="btn btn-success">Tambah Data Bencana</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-10">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Id Bencana</th>
            <th scope="col">Nama Bencana</th>
            <th scope="col">Tingkat Bencana</th>
            <th scope="col">Waktu Bencana</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Kota</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;?>
          <?php while ($data = mysqli_fetch_assoc($result)): ?>
            <tr>
              <th scope="row"><?=$no;?></th>
              <td><?=$data['nis']?></td>
              <td><?=$data['nama_bencana']?></td>
              <td><?=$data['tingkat_bencana']?></td>
              <td><?=$data['waktu_bencana']?></td>
              <td><?=$data['nama_prov']?></td>
              <td><?=$data['nama_kota']?></td>
              <td><?=$data['nama_kec']?></td>
            </tr>
            <?php $no++;?>
          <?php endwhile;?>
        </tbody>
      </table>

    </div>
  </div>

</main>