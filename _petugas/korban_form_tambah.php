<?php
require '../koneksi.php';

$query = "SELECT * FROM detail_korban dk join pelaporan ts on ts.nis = dk.nis";
$result = mysqli_query($koneksi, $query);

?>
<?php require 'index_m.php'?>
<?php require '../templates/footer.php'?>

<?php
$query1 = mysqli_query($koneksi, "SELECT max(id_korban) as kodeTerbesar FROM detail_korban");
$data = mysqli_fetch_array($query1);
$kodeBarang = $data['kodeTerbesar'];
$urutan = (int) substr($kodeBarang, 3, 3);
$urutan++;
$huruf = "NIK";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-3">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Korban</h1>
  </div>

  <div class="row my-4">
    <div class="col-md-5">
      <a href="korban.php" class="btn btn-danger">Kembali</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">

      <form action="korban_proses_tambah.php" method="post">

      <div class="mb-3">
          <label for="id_korban" class="form-label">Id Korban</label>
          <input type="text" class="form-control" id="id_korban" name="id_korban" required="required" value="<?php echo $kodeBarang ?>" readonly>
        </div>

      <div class="mb-3">
          <label for="nis" class="form-label">Kode Bencana</label>
          <select class="form-select" aria-label="Default select example" name="nis" id="nis">
            <option selected>Pilih</option>
            <?php while ($data = mysqli_fetch_assoc($result)): ?>
              <option value="<?=$data['nis']?>"> <?=$data['nama_bencana'], '-', $data['nis']?></option>
            <?php endwhile;?>
          </select>
        </div>

        <div class="mb-3">
          <label for="nama_korban" class="form-label">Nama Korban</label>
          <input type="text" class="form-control" id="nama_korban" name="nama_korban">
        </div>

        <div class="mb-3">
          <label for="umur" class="form-label">Umur Korban</label>
          <input type="text" class="form-control" id="umur" name="umur">
        </div>

        <div class="mb-3">
          <label for="kondisi" class="form-label">Kondisi Korban</label>
          <input type="text" class="form-control" id="kondisi" name="kondisi">
          </div>
        </div>

        <button type="submit" class="btn btn-success" name="simpan">Tambah Data</button>

      </form>

    </div>
  </div>

</main>