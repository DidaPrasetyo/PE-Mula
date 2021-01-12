<?php 
include('header.php');
include('config.php');
$query = "SELECT t1.*, t2.kategori FROM produk as t1, kategori as t2 WHERE t1.id_kategori = t2.id ";
$data = mysqli_query($koneksi, $query);
mysqli_next_result($koneksi);
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Content -->
  <div class="container">

    <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Catalogue Gallery</h1>

    <hr class="mt-2 mb-5">

    <div class="row text-center text-lg-left">

      <div class="col-lg-3 col-md-4 col-6">
        <img class="img-fluid img-thumbnail" src="img/EXH FAN EC52 MUNTERS.jpg">
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <img class="img-fluid img-thumbnail" src="img/EXH FAN EOC 53 PERICOLIjpg.jpg">
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <img class="img-fluid img-thumbnail" src="img/EXH FAN EHS 50 AGRIN.jpg">
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <img class="img-fluid img-thumbnail" src="img/R-TRON 313,612, MUNTERS PLATINUM PRO.jpg">
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <img class="img-fluid img-thumbnail" src="img/EXH FAN BUTTERFLY CONE 50 AGRIN.jpg">
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <img class="img-fluid img-thumbnail" src="img/EXH FAN HYPERMAX 54.jpg">
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <img class="img-fluid img-thumbnail" src="img/EXH FAN EOS 31,42,53.jpg">
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <img class="img-fluid img-thumbnail" src="img/Temptron 304,304D, 607AC.jpg">
      </div>
    </div>

  </div>
  <!-- /.container -->
  <br>
  <hr>
  <br>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Produk</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama Produk</th>
              <th>Kategori</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $row) { ?>
              <tr>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['kategori']; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<?php include('footer.php')?>