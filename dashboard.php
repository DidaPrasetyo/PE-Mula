<?php include('header.php')?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Menu Penghitungan</h1>
    </div>

    <!-- Content Row -->
    <form>
        <div class="row">

            <!-- Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <!-- <div class="font-weight-bold text-primary text-uppercase mb-1">
                                Nomor Penawaran :</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">000XX/Upgrade/Jabar-LE/XII/2020</div>
                                <br> -->
                                <div class="font-weight-bold text-primary text-uppercase mb-1">
                                Data Kustomer</div>
                                <div class="input-group">
                                    <input type="text" name="nama" class="form-control bg-light border-0 small" placeholder="Nama"
                                    aria-label="Search" aria-describedby="basic-addon2">
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="text" name="alamat" class="form-control bg-light border-0 small" placeholder="Alamat"
                                    aria-label="Search" aria-describedby="basic-addon2">
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="text" name="cp" class="form-control bg-light border-0 small" placeholder="Contact Person"
                                    aria-label="Search" aria-describedby="basic-addon2">
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="text" name="no_telp" class="form-control bg-light border-0 small" placeholder="No. Telp"
                                    aria-label="Search" aria-describedby="basic-addon2">
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-primary text-uppercase mb-1">
                                Dimensi Kandang</div>
                                <div class="input-group">
                                    <input type="text" name="panjang" class="form-control bg-light border-0 small" placeholder="Panjang (m)"
                                    aria-label="Search" aria-describedby="basic-addon2">
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="text" name="lebar" class="form-control bg-light border-0 small" placeholder="Lebar (m)"
                                    aria-label="Search" aria-describedby="basic-addon2">
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="text" name="tinggi" class="form-control bg-light border-0 small" placeholder="Tinggi (m)"
                                    aria-label="Search" aria-describedby="basic-addon2">
                                </div>
                                <br>
                                <table width="100%">
                                    <tr>
                                        <td width="50%">Capacity</td>
                                        <td>:</td>
                                        <td align="right" width="30%">
                                            <div class="input-group">
                                                <input type="text" name="capacity" class="form-control bg-light border-0 small input-right" placeholder="10"
                                                aria-label="Search" aria-describedby="basic-addon2" readonly>
                                            </div>
                                        </td>
                                        <td align="right">m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <td>Cross Section</td>
                                        <td>:</td>
                                        <td align="right" width="30%">
                                            <div class="input-group">
                                                <input type="text" name="cross" class="form-control bg-light border-0 small input-right" placeholder="10"
                                                aria-label="Search" aria-describedby="basic-addon2" readonly>
                                            </div>
                                        </td>
                                        <td align="right">m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <td>Luas</td>
                                        <td>:</td>
                                        <td align="right" width="30%">
                                            <div class="input-group">
                                                <input type="text" name="luas" class="form-control bg-light border-0 small input-right" placeholder="10"
                                                aria-label="Search" aria-describedby="basic-addon2" readonly>
                                            </div>
                                        </td>
                                        <td align="right">m<sup>2</sup></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-primary text-uppercase mb-1">Kepadatan
                                </div>
                                <div class="input-group">
                                    <input type="text" name="tbobot" class="form-control bg-light border-0 small" placeholder="Target Bobot"
                                    aria-label="Search" aria-describedby="basic-addon2">
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="text" name="tpadat" class="form-control bg-light border-0 small" placeholder="Target Kepadatan"
                                    aria-label="Search" aria-describedby="basic-addon2">
                                </div>
                                <br>
                                <table width="100%">
                                    <tr>
                                        <td width="50%">Max</td>
                                        <td>:</td>
                                        <td align="right" width="30%">
                                            <div class="input-group">
                                                <input type="text" name="max" class="form-control bg-light border-0 small input-right" placeholder="10"
                                                aria-label="Search" aria-describedby="basic-addon2" readonly>
                                            </div>
                                        </td>
                                        <td align="right">kg/m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <td>Populasi Max</td>
                                        <td>:</td>
                                        <td align="right" width="30%">
                                            <div class="input-group">
                                                <input type="text" name="pmax" class="form-control bg-light border-0 small input-right" placeholder="10"
                                                aria-label="Search" aria-describedby="basic-addon2" readonly>
                                            </div>
                                        </td>
                                        <td align="right">ekor/m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <td>Populasi Total</td>
                                        <td>:</td>
                                        <td align="right" width="30%">
                                            <div class="input-group">
                                                <input type="text" name="ptotal" class="form-control bg-light border-0 small input-right" placeholder="10"
                                                aria-label="Search" aria-describedby="basic-addon2" readonly>
                                            </div>
                                        </td>
                                        <td align="right">ekor</td>
                                    </tr>
                                </table>
                                <br>
                                <div class="card bg-danger text-white shadow">
                                    <div class="card-body">
                                        Terlalu Padat
                                    </div>
                                </div>
                                <!-- <div class="card bg-success text-white shadow">
                                    <div class="card-body">
                                        Kepadatan Oke
                                    </div>
                                </div> -->
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
                                Strain Ayam</div>
                                <div class="form-group">
                                    <select class="form-control" id="">
                                        <option value="1">Cobb</option>
                                        <option value="2">ISA Brown</option>
                                    </select>
                                </div>
                                <div class="font-weight-bold text-primary text-uppercase">
                                Exhaust Fan</div>
                                <div class="form-group">
                                    <select class="form-control" id="" name="strain">
                                        <option value="1">Munters EC 52"</option>
                                        <option value="2">EOS 53" Pericoli</option>
                                    </select>
                                </div>
                                <div class="font-weight-bold text-primary text-uppercase">
                                Cooling Pad</div>
                                <div class="form-group">
                                    <select class="form-control" id="" name="colling pad">
                                        <option value="1">C.P AGRIN, 1500X600X150MM, 15/45 COATED W/ WDP</option>
                                        <option value="2">C.P MUNTERS, 1500X600X150MM, 15/45 UNCOATED W/ WDP</option>
                                    </select>
                                </div>
                                <div class="font-weight-bold text-primary text-uppercase">
                                Nipple</div>
                                <div class="form-group">
                                    <select class="form-control" id="" name="nipple">
                                        <option value="1">Pipa PVC 3/4" + 20 nipple Impex 10013</option>
                                        <option value="2">Pipa PVC 3/4" + 16 nipple Impex 10013</option>
                                    </select>
                                </div>
                                <div class="font-weight-bold text-primary text-uppercase">
                                Controller</div>
                                <div class="form-group">
                                    <select class="form-control" id="" name="controller">
                                        <option value="1">Temptron 607A-C</option>
                                        <option value="2">R-Tron 612</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="result.php" class="btn btn-primary btn-icon-split btn-lg">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Mulai Menghitung</span>
            </a>
        </div>
    </form>

    <!-- Page Heading -->
</div>
<!-- /.container-fluid -->

</div>
<?php include('footer.php')?>