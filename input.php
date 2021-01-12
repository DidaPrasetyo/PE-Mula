<?php 
include('header.php');
include('config.php');

if (isset($_POST['submit'])) {
  $nomer = $_POST['no_penawaran'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_telp = $_POST['no_telp'];
  $email = $_POST['email'];
  $cp = $_POST['cp'];
  $panjang = $_POST['panjang'];
  $lebar = $_POST['lebar'];
  $tinggi = $_POST['tinggi'];
  $tbobot = $_POST['tbobot'];
  $tpadat = $_POST['tpadat'];
  $tipe_kandang = $_POST['tipe_kandang'];
  $id_keb_udara = $_POST['ventilasi'];

  

  $sql = "
  INSERT INTO pesanan 
  (no_penawaran,nama,alamat,no_telp,email,cp,panjang,lebar,tinggi,tbobot,tpadat,id_tipe_kandang,id_keb_udara) 
  VALUES 
  ('".$nomer."','".$nama."','".$alamat."','".$no_telp."','".$email."','".$cp."','".$panjang."','".$lebar."','".$tinggi."','".$tbobot."','".$tpadat."','".$tipe_kandang."','".$id_keb_udara."')
  ";
  if (mysqli_query($koneksi, $sql)) {
    $last_id = mysqli_insert_id($koneksi);

    $fan = $_POST['fan'];
    $cooling_pad = $_POST['cooling_pad'];
    $controller = $_POST['controller'];

    $id_produk = array( $fan, $cooling_pad, $controller );
    foreach ($id_produk as $row) {
      $sql = "INSERT INTO detil_pesanan (id_pesanan, id_produk) VALUES ('".$last_id."','".$row."')";
      mysqli_query($koneksi, $sql);
    }
    echo "<script> location.replace('kalkulasi.php?id=".$last_id."'); </script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
}

// GET DATA SELECT
$query = "SELECT * FROM keb_udara";
$data_ventilasi = mysqli_query($koneksi, $query);
mysqli_next_result($koneksi);

$query = "SELECT * FROM produk WHERE id_kategori = 1 AND EXISTS (SELECT * FROM produk_fan WHERE produk.id = produk_fan.id_produk)";
$data_fan = mysqli_query($koneksi, $query);
mysqli_next_result($koneksi);

$query = "SELECT * FROM produk WHERE id_kategori = 2";
$data_cpad = mysqli_query($koneksi, $query);
mysqli_next_result($koneksi);

$query = "SELECT * FROM produk WHERE id_kategori = 7";
$data_controller = mysqli_query($koneksi, $query);
mysqli_next_result($koneksi);
// while ($row = mysqli_fetch_assoc($data_fan)) {
//   var_dump($row['nama']);
// }
// foreach ($data_fan as $key) {
//   echo $key['nama'];
// }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Kandang</h1>
  </div>

  <!-- Content Row -->
  <form id="form" action="input.php" method="POST">
    <div class="row">
      <!-- Card -->
      <div class="col-xl-3 col-md-6 mb-3">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="font-weight-bold text-primary text-uppercase mb-1">
                Nomor Penawaran</div>
                <div class="input-group">
                  <input type="text" id="no_penawaran" name="no_penawaran" class="form-control bg-light border-0 small" placeholder="Nomor Penawaran"
                  aria-label="nama" aria-describedby="basic-addon2">
                </div>
                <hr>
                <div class="font-weight-bold text-primary text-uppercase mb-1">
                Data Kustomer</div>
                <div class="input-group">
                  <input type="text" id="nama" name="nama" class="form-control bg-light border-0 small" placeholder="Nama"
                  aria-label="nama" aria-describedby="basic-addon2">
                </div>
                <br>
                <div class="input-group">
                  <input type="text" id="alamat" name="alamat" class="form-control bg-light border-0 small" placeholder="Alamat"
                  aria-label="alamat" aria-describedby="basic-addon2">
                </div>
                <br>
                <div class="input-group">
                  <input type="text" id="cp" name="cp" class="form-control bg-light border-0 small" placeholder="Contact Person"
                  aria-label="cp" aria-describedby="basic-addon2">
                </div>
                <br>
                <div class="input-group">
                  <input type="number" id="no_telp" name="no_telp" class="form-control bg-light border-0 small" placeholder="No. Telp"
                  aria-label="no_telp" aria-describedby="basic-addon2">
                </div>
                <br>
                <div class="input-group">
                  <input type="email" id="email" name="email" class="form-control bg-light border-0 small" placeholder="Email"
                  aria-label="email" aria-describedby="basic-addon2">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-3">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="form-group">
                  <div class="font-weight-bold text-primary text-uppercase mb-1">
                  Tipe Kandang</div>
                  <select class="form-control" id="tipe_kandang" name="tipe_kandang">
                    <option value="1">Postal</option>
                    <option value="2">Slat</option>
                    <option value="3">Cages</option>
                  </select>
                </div>
                <div class="font-weight-bold text-primary text-uppercase mb-1">
                Dimensi Kandang</div>
                <div class="input-group">
                  <table width="100%">
                    <tr>
                      <td width="80%">
                        <input type="number" id="panjang" name="panjang" class="form-control bg-light border-0 small" placeholder="Panjang"
                        aria-label="panjang" aria-describedby="basic-addon2">
                      </td>
                      <td align="right" width="20%">m</td>
                    </tr>
                  </table>
                </div>
                <br>
                <div class="input-group">
                  <table width="100%">
                    <tr>
                      <td width="80%">
                        <input type="number" id="lebar" name="lebar" class="form-control bg-light border-0 small" placeholder="Lebar" aria-label="lebar" aria-describedby="basic-addon2">
                      </td>
                      <td align="right" width="20%">m</td>
                    </tr>
                  </table>
                </div>
                <br>
                <div class="input-group">
                  <table width="100%">
                    <tr>
                      <td width="80%">
                        <input type="number" id="tinggi" name="tinggi" class="form-control bg-light border-0 small" placeholder="Tinggi" aria-label="tinggi" aria-describedby="basic-addon2">
                      </td>
                      <td align="right" width="20%">m</td>
                    </tr>
                  </table>
                </div>
                <br>
                <table>
                  <tr>
                    <td width="60%">Luas</td>
                    <td width="20%">:</td>
                    <td width="20%"><label id="luas">0</label></td>
                    <td width="10%">m<sup>2</sup></td>
                  </tr>
                  <tr>
                    <td width="60%">Kapasitas</td>
                    <td width="20%">:</td>
                    <td width="20%"><label id="kapasitas">0</label></td>
                    <td width="10%">m<sup>3</sup></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-3">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="font-weight-bold text-primary text-uppercase mb-1">Kepadatan
                </div>
                <div class="input-group">
                  <table width="100%">
                    <tr>
                      <td width="80%">
                        <input type="number" id="tbobot" name="tbobot" class="form-control bg-light border-0 small" placeholder="Target Bobot" aria-label="Search" aria-describedby="basic-addon2">
                      </td>
                      <td align="right" width="20%">Kg</td>
                    </tr>
                  </table>
                </div>
                <br>
                <div class="input-group">
                  <table width="100%">
                    <tr>
                      <td width="80%">
                        <input type="number" id="tpadat" name="tpadat" class="form-control bg-light border-0 small" placeholder="Target Kepadatan" aria-label="Search" aria-describedby="basic-addon2">
                      </td>
                      <td align="right" width="20%">ekor/m<sup>2</sup></td>
                    </tr>
                  </table>
                </div>
                <br>
                <table width="100%">
                  <tr>
                    <td>Standar Kepadatan</td>
                    <td>:</td>
                    <td align="right"><label id="max">35</label></td>
                    <td align="right">Kg/m<sup>2</sup></td>
                  </tr>
                  <tr>
                    <td>Populasi Max</td>
                    <td>:</td>
                    <td align="right" width="30%">
                      <label id="pmax">0</label>
                    </td>
                    <td align="right">ekor/m<sup>2</sup></td>
                  </tr>
                  <tr>
                    <td>Populasi Total</td>
                    <td>:</td>
                    <td align="right" width="30%">
                      <label id="ptotal">0</label>
                    </td>
                    <td align="right">ekor</td>
                  </tr>
                </table>
                <br>
                <div id="ypadat" class="card bg-danger text-white shadow" style="display: none">
                  <div class="card-body">
                    Terlalu Padat
                  </div>
                </div>
                <div id="npadat" class="card bg-success text-white shadow" style="display: none">
                  <div class="card-body">
                    Kepadatan Oke
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pending Requests Card Example -->
      
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="font-weight-bold text-primary text-uppercase">
                Ventilasi</div>
                <div class="form-group">
                  <select class="form-control" id="ventilasi" name="ventilasi">
                    <?php foreach ($data_ventilasi as $row) { 
                      echo "<option value='".$row['id']."'>".$row['nama']."</option>";
                    } ?>
                  </select>
                </div>
                <div class="font-weight-bold text-primary text-uppercase">
                Exhaust Fan</div>
                <div class="form-group">
                  <select class="form-control" id="fan" name="fan">
                    <?php foreach ($data_fan as $row) { 
                      echo "<option value='".$row['id']."'>".$row['nama']."</option>";
                    } ?>
                  </select>
                </div>
                <div class="font-weight-bold text-primary text-uppercase">
                Cooling Pad</div>
                <div class="form-group">
                  <select class="form-control" id="cooling_pad" name="cooling_pad">
                    <?php foreach ($data_cpad as $row) { 
                      echo "<option value='".$row['id']."'>".$row['nama']."</option>";
                    } ?>
                  </select>
                </div>
                <div class="font-weight-bold text-primary text-uppercase">
                Controller</div>
                <div class="form-group">
                  <select class="form-control" id="controller" name="controller">
                    <?php foreach ($data_controller as $row) { 
                      echo "<option value='".$row['id']."'>".$row['nama']."</option>";
                    } ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <button name="submit" value="submit" class="btn btn-primary btn-icon-split btn-lg">
        <span class="icon text-white-50">
          <i class="fas fa-arrow-right"></i>
        </span>
        <span class="text">Simpan dan Lanjutkan</span>
      </button>
    </div>
  </form>

  <!-- Page Heading -->
</div>
<!-- /.container-fluid -->

</div>
<?php include('footer.php')?>
<script type="text/javascript">
  document.getElementById("form").addEventListener("input",function(){
    var p = document.getElementById("panjang").value;
    var l = document.getElementById("lebar").value;
    var t = document.getElementById("tinggi").value;
    var luas = p*l;
    document.getElementById("luas").innerHTML = luas;
    document.getElementById("kapasitas").innerHTML = p*l*t;
    var max = document.getElementById("max").innerHTML;
    var tbobot = document.getElementById("tbobot").value;
    if (tbobot == 0) {
      var pmax = 0;
    } else {
      var pmax = max/tbobot;
    }
    document.getElementById("pmax").innerHTML = pmax;
    var tpadat = document.getElementById("tpadat").value;
    document.getElementById("ptotal").innerHTML = tpadat*luas;

    var yes = document.getElementById("ypadat");
    var no = document.getElementById("npadat");
    if (tpadat != 0 && pmax != 0) {
      if (tpadat > pmax) {
        no.style.display = "none";
        yes.style.display = "block";
      } else {
        no.style.display = "block";
        yes.style.display = "none";
      }
    } else {
      no.style.display = "none";
      yes.style.display = "none";
    }
      // var x = document.querySelectorAll('input[type="checkbox"]:checked').length;
      // document.getElementById("jml").innerHTML = x;
      // var y = document.getElementById("price").value;
      // document.getElementById("total").value = x*y;
    });
  </script>