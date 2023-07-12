<?php
require '../koneksi.php';
?>
<?php require 'index_m.php'?>
<?php require '../templates/footer.php'?>

<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pencarian</h1>
  </div>
            <!-- form filter data berdasarkan range tanggal  -->
            <form action="pencarian.php" method="get">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label class="col-form-label">Periode</label>
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-control" name="dari" required>
                    </div>
                    <div class="col-auto">
                        -
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-control" name="ke" required>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form><br>


  <div class="row">
    <div class="col-md-10">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama Bencana</th>
            <th scope="col">Waktu Bencana</th>
            <th scope="col">Kategori Bencana</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
                        <?php
//jika tanggal dari dan tanggal ke ada maka
if (isset($_GET['dari']) && isset($_GET['ke'])) {
    // tampilkan data yang sesuai dengan range tanggal yang dicari
    $data = mysqli_query($koneksi, "SELECT * FROM pelaporan ts join kategori_bencana tk on tk.id_kategori_bencana = ts.id_kategori_bencana
                                    WHERE waktu_bencana BETWEEN '" . $_GET['dari'] . "' and '" . $_GET['ke'] . "'");
} else {
    //jika tidak ada tanggal dari dan tanggal ke maka tampilkan seluruh data
    $data = mysqli_query($koneksi, "SELECT * FROM pelaporan ts join kategori_bencana tk on tk.id_kategori_bencana = ts.id_kategori_bencana");
}
// $no digunakan sebagai penomoran
$no = 1;
// while digunakan sebagai perulangan data
while ($d = mysqli_fetch_array($data)) {
    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nis']; ?></td>
                            <td><?php echo $d['nama_bencana']; ?></td>
                            <td><?php echo $d['waktu_bencana']; ?></td>
                            <td><?php echo $d['tingkat_bencana']; ?></td>
                        </tr>
                        <?php }?>
                    </table>
                </div>
            </div>
        </div>
                            </main>
