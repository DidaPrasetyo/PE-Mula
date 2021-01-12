<?php 
include('header.php');
include('config.php');
if (!isset($_GET['id'])) {
  echo "<script> location.replace('404.php'); </script>";
}
$query = "SELECT pesanan.*, keb_udara.nilai, tipe_kandang.nilai_pa FROM pesanan INNER JOIN keb_udara ON keb_udara.id = pesanan.id_keb_udara INNER JOIN tipe_kandang ON pesanan.id_tipe_kandang = tipe_kandang.id WHERE pesanan.id = ".$_GET['id'];
$data = mysqli_query($koneksi, $query);
$data_kandang = mysqli_fetch_assoc($data);
mysqli_next_result($koneksi);

if (isset($_POST['submit'])) {
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
  $sql = "UPDATE pesanan SET 
  alamat = '".$alamat."',
  no_telp = '".$no_telp."',
  email = '".$email."',
  cp = '".$cp."',
  panjang = '".$panjang."',
  lebar = '".$lebar."',
  tinggi = '".$tinggi."',
  tbobot = '".$tbobot."',
  tpadat = '".$tpadat."',
  id_tipe_kandang = '".$tipe_kandang."',
  id_keb_udara = '".$id_keb_udara."'
  WHERE id = '".$_GET['id']."'";
  if (mysqli_query($koneksi, $sql)) {

    $fan = $_POST['fan'];
    $cooling_pad = $_POST['cooling_pad'];
    $controller = $_POST['controller'];

    $id_produk = array( $fan, $cooling_pad, $controller );
    foreach ($id_produk as $row) {
      $sql = "UPDATE detil_pesanan SET 
      id_produk = '".$row."'
      WHERE id = '".$_GET['id']."'";
      mysqli_query($koneksi, $sql);
    }
    echo "<script> location.replace('kalkulasi.php?id=".$_GET['id']."'); </script>";
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

//GET DATA YANG ADA DI DB
// $query = "SELECT * FROM keb_udara WHERE id = ".$data_kandang['id_keb_udara'];
// $db_ventilasi = mysqli_query($koneksi, $query);
// mysqli_next_result($koneksi);
// var_dump($data_kandang['nilai']);
// var_dump(mysqli_fetch_assoc($db_ventilasi));

$query = "SELECT * FROM detil_pesanan INNER JOIN produk ON detil_pesanan.id_produk = produk.id WHERE id_pesanan = ".$_GET['id'];
$db_produk = mysqli_query($koneksi, $query);
mysqli_next_result($koneksi);
// while($row = mysqli_fetch_assoc($db_produk)){
//   echo $row['id_kategori'];
// }

//ambil data fan
foreach ($db_produk as $row) {
  if ($row['id_kategori'] == 1) {
    $query = "SELECT * FROM produk_fan WHERE pa = ".$data_kandang['nilai_pa']." AND id_produk=".$row['id_produk'];
    $db_fan = mysqli_query($koneksi, $query);
    mysqli_next_result($koneksi);
  }
}
$data_db_fan = mysqli_fetch_assoc($db_fan)['m3/h'];
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Kandang</h1>
  </div>

  <!-- HIDDEN VALUE SSUUTH-->
  <input type="text" id="fan_cap" value="<?php echo $data_db_fan ?>" readonly hidden>
  <input type="text" id="KebUd_nilai" value="<?php echo $data_kandang['nilai'] ?>" readonly hidden>
  <!-- HIDDEN VALUE SSUUTH-->

  <!-- Content Row -->
  <form id="form" action="kalkulasi.php?id=<?php echo $_GET['id'] ?>" method="POST">
    <div class="row">
      <!-- Card -->
      <div class="col-xl-3 col-md-6 mb-3">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="font-weight-bold text-primary text-uppercase mb-1">
                  Nomor Penawaran
                </div>
                <h5 class="text-info"><?php echo $data_kandang['no_penawaran']; ?></h5>
                <hr>
                <div class="font-weight-bold text-primary text-uppercase mb-1">
                Data Kustomer</div>
                <div class="font-weight text-primary text-uppercase mb-1">
                Nama :</div>
                <h5 class="text-info"><?php echo $data_kandang['nama']; ?></h5>
                <br>
                <div class="input-group">
                  <input type="text" id="alamat" name="alamat" class="form-control bg-light border-0 small" placeholder="Alamat" aria-label="alamat" aria-describedby="basic-addon2" value="<?php echo $data_kandang['alamat']; ?>">
                </div>
                <br>
                <div class="input-group">
                  <input type="text" id="cp" name="cp" class="form-control bg-light border-0 small" placeholder="Contact Person" aria-label="cp" aria-describedby="basic-addon2" value="<?php echo $data_kandang['cp']; ?>">
                </div>
                <br>
                <div class="input-group">
                  <input type="number" step=".01" id="no_telp" name="no_telp" class="form-control bg-light border-0 small" placeholder="No. Telp" aria-label="no_telp" aria-describedby="basic-addon2" value="<?php echo $data_kandang['no_telp']; ?>">
                </div>
                <br>
                <div class="input-group">
                  <input type="email" id="email" name="email" class="form-control bg-light border-0 small" placeholder="Email"
                  aria-label="email" aria-describedby="basic-addon2" value="<?php echo $data_kandang['email']; ?>">
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
                    <option value="1" <?php if($data_kandang['id_tipe_kandang']==1) echo 'selected="selected"'; ?>>Postal</option>
                    <option value="2" <?php if($data_kandang['id_tipe_kandang']==2) echo 'selected="selected"'; ?>>Slat</option>
                    <option value="3" <?php if($data_kandang['id_tipe_kandang']==3) echo 'selected="selected"'; ?>>Cages</option>
                  </select>
                </div>
                <div class="font-weight-bold text-primary text-uppercase mb-1">
                Dimensi Kandang</div>
                <div class="input-group">
                  <table width="100%">
                    <tr>
                      <td width="80%">
                        <input type="number" step=".01" id="panjang" name="panjang" class="form-control bg-light border-0 small" placeholder="Panjang" aria-label="panjang" aria-describedby="basic-addon2" value="<?php echo $data_kandang['panjang']; ?>">
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
                        <input type="number" step=".01" id="lebar" name="lebar" class="form-control bg-light border-0 small" placeholder="Lebar" aria-label="lebar" aria-describedby="basic-addon2" value="<?php echo $data_kandang['lebar']; ?>">
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
                        <input type="number" step=".01" id="tinggi" name="tinggi" class="form-control bg-light border-0 small" placeholder="Tinggi" aria-label="tinggi" aria-describedby="basic-addon2" value="<?php echo $data_kandang['tinggi']; ?>">
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
                        <input type="number" step=".01" id="tbobot" name="tbobot" class="form-control bg-light border-0 small" placeholder="Target Bobot" aria-label="Search" aria-describedby="basic-addon2" value="<?php echo $data_kandang['tbobot']; ?>">
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
                        <input type="number" step=".01" id="tpadat" name="tpadat" class="form-control bg-light border-0 small" placeholder="Target Kepadatan" aria-label="Search" aria-describedby="basic-addon2" value="<?php echo $data_kandang['tpadat']; ?>">
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

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="font-weight-bold text-primary text-uppercase">
                Ventilasi</div>
                <div class="form-group">
                  <select class="form-control" id="ventilasi" name="ventilasi">
                    <?php foreach ($data_ventilasi as $row) { ?>
                      <option value="<?php echo $row['id']?>" <?php if($data_kandang['id_keb_udara']==$row['id']) echo 'selected="selected"'; ?>><?php echo $row['nama']?></option>;
                    <?php } ?>
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
        <span class="text">Update Data Kandang</span>
      </button>
    </div>
  </form>

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Hasil Kalkulasi Peralatan</h1>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-3">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="form-group">
                <div class="font-weight-bold text-primary text-uppercase mb-1">
                Jumlah Lantai</div>
                <input type="number" id="lantai" name="lantai" class="form-control bg-light border-0 small" placeholder="Jumlah Lantai" aria-label="lantai" aria-describedby="basic-addon2" value="1" onchange="hitung()">
              </div>
              <div class="form-group">
                <div class="font-weight-bold text-primary text-uppercase mb-1">
                Perhitungan Berdasarkan</div>
                <select class="form-control" id="hitung_by" name="hitung_by" onchange="hitung()">
                  <option value="">--PILIH--</option>
                  <option value="1">Kebutuhan Udara</option>
                  <option value="2">Dimensi Kandang</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card -->
    <div class="col-xl-3 col-md-6 mb-3">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="font-weight-bold text-primary text-uppercase mb-1">
                Jumlah Exhaust Fan dibutuhkan
              </div>
              <h5 class="text-dark"><span class="font-weight-bold text-ku" style="font-size: 2rem;" id="fan_result">0</span> Unit/Lantai - Total : <span class="font-weight-bold text-ku" style="font-size: 2rem;" id="fan_result_total">0</span> Unit</h5>
              <hr>
              <div class="font-weight-bold text-primary text-uppercase mb-1">
                Jumlah Cooling Pad dibutuhkan
              </div>
              <h5 class="text-dark"><span class="font-weight-bold text-ku" style="font-size: 2rem;" id="coolpad_result">0</span> Unit/Lantai - Total : <span class="font-weight-bold text-ku" style="font-size: 2rem;" id="coolpad_result_total">0</span> Unit</h5>
              <hr>
              <div class="font-weight-bold text-primary text-uppercase mb-1">
                Jumlah Controller dibutuhkan
              </div>
              <h5 class="text-dark"><span class="font-weight-bold text-ku" style="font-size: 2rem;" id="controller_result">0</span> Unit/Lantai - Total : <span class="font-weight-bold text-ku" style="font-size: 2rem;" id="controller_result_total">0</span> Unit</h5>
              <hr>
              <div class="font-weight-bold text-primary text-uppercase mb-1">
                Jumlah Panel Listrik dibutuhkan
              </div>
              <h5 class="text-dark"><span class="font-weight-bold text-ku" style="font-size: 2rem;" id="panel_result">0</span> Unit/Fan - Total : <span class="font-weight-bold text-ku" style="font-size: 2rem;" id="panel_result_total">0</span> Unit</h5>
              <hr>
              <div class="font-weight-bold text-primary text-uppercase mb-1">
                Jumlah Gutter System dibutuhkan
              </div>
              <h5 class="text-dark"><span class="font-weight-bold text-ku" style="font-size: 2rem;" id="gutter_result">0</span> Unit/Lantai - Total : <span class="font-weight-bold text-ku" style="font-size: 2rem;" id="gutter_result_total">0</span> Unit</h5>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <button name="submit" onclick="keb_udara()" class="btn btn-primary btn-icon-split btn-lg">
      <span class="icon text-white-50">
        <i class="fas fa-arrow-right"></i>
      </span>
      <span class="text">Simpan Data Kalkulasi</span>
    </button>
  </div> -->
</form>

<!-- Page Heading -->
</div>
<!-- /.container-fluid -->

</div>
<?php include('footer.php')?>
<script type="text/javascript">
  document.getElementById("form").addEventListener("input", myfunction);
  document.getElementById("page-top").addEventListener("load", myfunction);

  function myfunction(){
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
    };

    function hitung(){
      var by = document.getElementById("hitung_by").value;
      var lt = document.getElementById("lantai").value;
      var p = document.getElementById("panjang").value;
      var l = document.getElementById("lebar").value;
      var t = document.getElementById("tinggi").value;
      var tp = document.getElementById("tpadat").value;
      var tb = document.getElementById("tbobot").value;
      var cap = document.getElementById("fan_cap").value;
      var nilai = document.getElementById("KebUd_nilai").value;
      if (by == 1) {
        var kebUd = (p*l*tp*tb) * nilai;
        var fan = (kebUd / cap) + 1;
      } else if (by == 2) {
        var penampang = l * t;
        var cap_total = penampang * 3.2 * 3600;
        var fan = cap_total / cap;
      }
        var hasil_fan = Math.ceil(fan);

        document.getElementById("fan_result").innerHTML = hasil_fan;
        document.getElementById("fan_result_total").innerHTML = hasil_fan * lt;

        var LpenampangPad = Math.ceil(((cap/3600) * hasil_fan)/1.8);
        
        var LpenampangSisi = LpenampangPad/2;
        
        var JumlahPad = Math.ceil((LpenampangSisi/1.5)/0.6);
        
        document.getElementById("coolpad_result").innerHTML = JumlahPad;
        document.getElementById("coolpad_result_total").innerHTML = JumlahPad * lt;        

        document.getElementById("controller_result").innerHTML = 1;
        document.getElementById("controller_result_total").innerHTML = 1 * lt;

        document.getElementById("panel_result").innerHTML = hasil_fan;
        document.getElementById("panel_result_total").innerHTML = hasil_fan * lt;

        document.getElementById("gutter_result").innerHTML = 2;
        document.getElementById("gutter_result_total").innerHTML = 2 * lt;
    }
  </script>