<?php
require '../koneksi.php';

$query = "SELECT * FROM pelaporan ts JOIN detail_korban dk ON dk.nis = ts.nis";
$result = mysqli_query($koneksi, $query);

?>

<?php require 'index_m.php'?>
<?php require '../templates/footer.php'?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Korban</h1>
  </div>


  <div class="row">
    <div class="col-md-10">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Id Korban</th>
            <th scope="col">Nama Bencana</th>
            <th scope="col">Waktu Bencana</th>
            <th scope="col">Nama Korban</th>
            <th scope="col">Umur Korban</th>
            <th scope="col">Kondisi Korban</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;?>
          <?php while ($data = mysqli_fetch_assoc($result)): ?>
            <tr>
              <th scope="row"><?=$no;?></th>
              <td><?=$data['id_korban']?></td>
              <td><?=$data['nama_bencana']?></td>
              <td><?=$data['waktu_bencana']?></td>
              <td><?=$data['nama_korban']?></td>
              <td><?=$data['umur']?></td>
              <td><?=$data['kondisi']?></td>
            </tr>
            <?php $no++;?>
          <?php endwhile;?>
        </tbody>
      </table>

    </div>
  </div>

</main>