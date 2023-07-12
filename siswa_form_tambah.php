<?php
require 'koneksi.php';

$query = "SELECT * FROM tbl_kelas";
$result = mysqli_query($koneksi, $query);

?>
<?php require 'templates/header.php' ?>
<?php require 'templates/footer.php' ?>
<?php 
$query1 = mysqli_query($koneksi, "SELECT max(nis) as kodeTerbesar FROM tbl_siswa");
$data = mysqli_fetch_array($query1);
$kodeBarang = $data['kodeTerbesar'];
$urutan = (int) substr($kodeBarang, 3, 3);
$urutan++;
$huruf = "LPB";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-3">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Siswa</h1>
  </div>

  <div class="row my-4">
    <div class="col-md-5">
      <a href="siswa.php" class="btn btn-danger">Kembali</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">

      <form action="siswa_proses_tambah.php" method="post">

        <div class="mb-3">
          <label for="nis" class="form-label">NIS</label>
          <input type="text" class="form-control" id="nis" name="nis" required="required" value="<?php echo $kodeBarang ?>" readonly>
        </div>

        <div class="mb-3">
          <label for="id_kategori_bencana" class="form-label">Kategori Bencana</label>
          <select class="form-select" aria-label="Default select example" name="id_kategori_bencana" id="id_kategori_bencana">
            <option selected>Pilih Kelas</option>
            <?php while ($data = mysqli_fetch_assoc($result)) : ?>
              <option value="<?= $data['id_kategori_bencana'] ?>"> <?= $data['kategori_bencana'] ?></option>
            <?php endwhile; ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="nama_bencana" class="form-label">Nama Bencana</label>
          <input type="text" class="form-control" id="nama_bencana" name="nama_bencana">
        </div>

        <div class="mb-3">
          <label for="waktu_bencana" class="form-label">Waktu Bencana</label>
          <input type="date" class="form-control" id="waktu_bencana" name="waktu_bencana">
          </div>
        </div>

        <div class="mb-3">
          <label for="no_hp_siswa" class="form-label">No HP</label>
          <input type="text" class="form-control" id="no_hp_siswa" name="no_hp_siswa">
        </div>

        <button type="submit" class="btn btn-success" name="simpan">Tambah Data</button>

      </form>

    </div>
  </div>

</main>