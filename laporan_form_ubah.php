<?php
require 'koneksi.php';

$nis = $_GET['nis'];
$query = "SELECT * FROM pelaporan ts JOIN kategori_bencana tk ON tk.id_kategori_bencana = ts.id_kategori_bencana
          WHERE nis = $nis";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
// var_dump($data['nama_kelas']);

?>
<?php require 'templates/header.php'?>
<?php require 'templates/footer.php'?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-3">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Data Bencana</h1>
  </div>

  <div class="row my-4">
    <div class="col-md-5">
      <a href="laporan.php" class="btn btn-danger">Kembali</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">

      <form action="laporan_proses_ubah.php" method="post">

        <div class="mb-3">
          <label for="nis" class="form-label">NIS</label>
          <input type="text" class="form-control" id="nis" name="nis" value="<?=$nis?>" readonly>
        </div>

        <div class="mb-3">
        <label for="id_kategori_bencana" class="form-label">Kategori Bencana</label>
          <input type="text" class="form-control" id="id_kategori_bencana" name="id_kategori_bencana" value="<?=$id_kategori_bencana?>" readonly>
        </div>

        <div class="mb-3">
          <label for="nama_bencana" class="form-label">Nama Bencana</label>
          <input type="text" class="form-control" id="nama_bencana" name="nama_bencana" value="<?=$data['nama_bencana']?>">
        </div>

        <div class="mb-3">
          <label for="waktu_bencana" class="form-label">Waktu Bencana</label>
          <input type="text" class="form-control" id="waktu_bencana" name="waktu_bencana" value="<?=$data['waktu_bencana']?>">
          </div>
        </div>

        <div class="mb-3">
          <label for="provinsi" class="form-label">Provinsi</label>
          <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?=$data['nama_prov']?>">
        </div>

        <div class="mb-3">
          <label for="kota" class="form-label">Kota</label>
          <input type="text" class="form-control" id="kota" name="kota" value="<?=$data['nama_kota']?>">
        </div>

        <div class="mb-3">
          <label for="kecamatan" class="form-label">Kecamatan</label>
          <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?=$data['nama_kec']?>">
        </div>

        <button type="submit" class="btn btn-success" name="simpan">Ubah Data</button>

      </form>

    </div>
  </div>

</main>