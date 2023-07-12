<?php
require 'koneksi.php';

$id_kategori_bencana = $_GET['id_kategori_bencana'];
$query = "SELECT * FROM kategori_bencana WHERE id_kategori_bencana = $id_kategori_bencana";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
// var_dump($data['kategori_bencana']);
?>
<?php require 'templates/header.php'?>
<?php require 'templates/footer.php'?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Data Kelas</h1>
  </div>

  <div class="row my-4">
    <div class="col-md-5">
      <a href="kelas.php" class="btn btn-danger">Kembali</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">

      <form action="kelas_proses_ubah.php" method="post">

      <input type="hidden" name="id_kategori_bencana" value="<?=$id_kategori_bencana?>">

        <div class="mb-3">
          <label for="tingkat_bencana" class="form-label">Tingkat Kelas</label>
          <select class="form-select" aria-label="Default select example" name="tingkat_bencana" id="tingkat_bencana">
            <option <?=($data['tingkat_bencana'] === '') ? 'selected' : ''?>>Pilih Tingkat</option>
            <option value="Ringan" <?=($data['tingkat_bencana'] === 'Ringan') ? 'selected' : ''?>>Ringan</option>
            <option value="Sedang" <?=($data['tingkat_bencana'] === 'Sedang') ? 'selected' : ''?>>Sedang</option>
            <option value="Parah" <?=($data['tingkat_bencana'] === 'Parah') ? 'selected' : ''?>>Parah</option>
          </select>
        </div>

        <button type="submit" class="btn btn-success" name="simpan">Ubah Data</button>

      </form>

    </div>
  </div>

</main>