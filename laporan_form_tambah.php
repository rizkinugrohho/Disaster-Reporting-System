<?php
require 'koneksi.php';

$query = "SELECT * FROM kategori_bencana";
$result = mysqli_query($koneksi, $query);

?>
<?php require 'templates/header.php'?>
<?php require 'templates/footer.php'?>
<?php
$query1 = mysqli_query($koneksi, "SELECT max(nis) as kodeTerbesar FROM pelaporan");
$data = mysqli_fetch_array($query1);
$kodeBarang = $data['kodeTerbesar'];
$urutan = (int) substr($kodeBarang, 3, 3);
$urutan++;
$huruf = "LPB";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
?>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.ctrl').select2();
});
</script>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-3">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Bencana</h1>
  </div>

  <div class="row my-4">
    <div class="col-md-5">
      <a href="laporan.php" class="btn btn-danger">Kembali</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">

      <form action="laporan_proses_tambah.php" method="post">

        <div class="mb-3">
          <label for="nis" class="form-label">NIS</label>
          <input type="text" class="form-control" id="nis" name="nis" required="required" value="<?php echo $kodeBarang ?>" readonly>
        </div>

        <div class="mb-3">
          <label for="id_kategori_bencana" class="form-label">Kategori Bencana</label>
          <select class="form-select" aria-label="Default select example" name="id_kategori_bencana" id="id_kategori_bencana">
            <option selected>Pilih</option>
            <?php while ($data = mysqli_fetch_assoc($result)): ?>
              <option value="<?=$data['id_kategori_bencana']?>"> <?=$data['tingkat_bencana']?></option>
            <?php endwhile;?>
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


        <div class="form-group mb-3">
						<label>Provinsi:</label>
						<select class="form-control ctrl" name="provinsi" id="provinsi" required><br>
							<option value="">--Provinsi--</option>
							<?php
$provinsi = mysqli_query($koneksi, "select * from provinsi");
while ($f = mysqli_fetch_array($provinsi)) {
    ?>
							<option value="<?php echo $f['nama'] ?>"><?php echo $f['nama']; ?></option>
								<?php
}
?>
						</select>
					</div>
					<div class="form-group mb-3">
							<label>Kota</label>
							<select class="form-control ctrl" name="kota" id="kota" required><br>
        					<option value="">--Kota--</option>
						<?php
$kota = mysqli_query($koneksi, "select * from kota");
while ($f = mysqli_fetch_array($kota)) {
    ?>
							<option value="<?php echo $f['nama'] ?>"><?php echo $f['nama']; ?></option>
						<?php
}
?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label>Kecamatan</label>
						<select class="form-control ctrl" name="kecamatan" id="kecamatan"><br>
		                <option value="">--Kecamatan--</option>
					<?php
$kecamatan = mysqli_query($koneksi, "select * from kecamatan");
while ($f = mysqli_fetch_array($kecamatan)) {
    ?>
						<option value="<?php echo $f['nama'] ?>"><?php echo $f['nama']; ?></option>
					<?php
}
?>
						</select>
					</div>
          <button type="submit" class="btn btn-success" name="simpan">Tambah Data</button>
          </div>

      </form>

    </div>

</main>