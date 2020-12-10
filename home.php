<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Agrinusa PE-MULA</div>
            </a>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Menu Penghitungan</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-primary text-uppercase mb-1">
                                            Nomor Penawaran :</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">000XX/Upgrade/Jabar-LE/XII/2020</div>
                                            <br>
                                            <div class="font-weight-bold text-primary text-uppercase mb-1">
                                                Data Kustomer</div>
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Nama"
                                                    aria-label="Search" aria-describedby="basic-addon2">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Alamat"
                                                    aria-label="Search" aria-describedby="basic-addon2">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Kontak Person"
                                                    aria-label="Search" aria-describedby="basic-addon2">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-light border-0 small" placeholder="No. Telp"
                                                    aria-label="Search" aria-describedby="basic-addon2">
                                                </div>
                                                <br>
                                            </form>
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
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Panjang (m)"
                                                    aria-label="Search" aria-describedby="basic-addon2">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Lebar (m)"
                                                    aria-label="Search" aria-describedby="basic-addon2">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Tinggi (m)"
                                                    aria-label="Search" aria-describedby="basic-addon2">
                                                </div>
                                                <br>
                                                <table width="100%">
                                                    <tr>
                                                        <td width="50%">Capacity</td>
                                                        <td>:</td>
                                                        <td align="right" width="30%">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control bg-light border-0 small" placeholder="10"
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
                                                                <input type="text" class="form-control bg-light border-0 small" placeholder="10"
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
                                                                <input type="text" class="form-control bg-light border-0 small" placeholder="10"
                                                                aria-label="Search" aria-describedby="basic-addon2" readonly>
                                                            </div>
                                                        </td>
                                                        <td align="right">m<sup>2</sup></td>
                                                    </tr>
                                                </table>
                                            </form>
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
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Target Bobot"
                                                    aria-label="Search" aria-describedby="basic-addon2">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Target Kepadatan"
                                                    aria-label="Search" aria-describedby="basic-addon2">
                                                </div>
                                                <br>
                                                <table width="100%">
                                                    <tr>
                                                        <td width="50%">Max</td>
                                                        <td>:</td>
                                                        <td align="right" width="30%">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control bg-light border-0 small" placeholder="10"
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
                                                                <input type="text" class="form-control bg-light border-0 small" placeholder="10"
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
                                                                <input type="text" class="form-control bg-light border-0 small" placeholder="10"
                                                                aria-label="Search" aria-describedby="basic-addon2" readonly>
                                                            </div>
                                                        </td>
                                                        <td align="right">ekor</td>
                                                    </tr>
                                                </table>
                                            </form>
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
                                                  <option>1</option>
                                                  <option>2</option>
                                              </select>
                                          </div>
                                          <div class="font-weight-bold text-primary text-uppercase">
                                          Exhaust Fan</div>
                                          <div class="form-group">
                                            <select class="form-control" id="">
                                              <option>1</option>
                                              <option>2</option>
                                          </select>
                                      </div>
                                      <div class="font-weight-bold text-primary text-uppercase">
                                      Cooling Pad</div>
                                      <div class="form-group">
                                        <select class="form-control" id="">
                                          <option>1</option>
                                          <option>2</option>
                                      </select>
                                  </div>
                                  <div class="font-weight-bold text-primary text-uppercase">
                                  Nipple</div>
                                  <div class="form-group">
                                    <select class="form-control" id="">
                                      <option>1</option>
                                      <option>2</option>
                                  </select>
                              </div>
                              <div class="font-weight-bold text-primary text-uppercase">
                              Controller</div>
                              <div class="form-group">
                                <select class="form-control" id="">
                                  <option>1</option>
                                  <option>2</option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

                  </div>
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      <a href="#" class="btn btn-primary btn-icon-split btn-lg">
                        <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Mulai Menghitung</span>
                    </a>

                </div>

                  <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Hasil Penghitungan</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Print </a>
                    </div>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#ExhaustFan" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="ExhaustFan">
                        <h6 class="m-0 font-weight-bold text-primary">Exhaust Fan</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                        <div class="collapse show" id="ExhaustFan">
                            <div class="card-body">
                                This is a collapsable card example using Bootstrap's built in collapse
                                functionality. <strong>Click on the card header</strong> to see the card body collapse and expand!
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#CoolingPad" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="CoolingPad">
                            <h6 class="m-0 font-weight-bold text-primary">Cooling Pad</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="CoolingPad">
                            <div class="card-body">
                                This is a collapsable card example using Bootstrap's built in collapse functionality. <strong>Click on the card header</strong> to see the card body collapse and expand!
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#CBFD" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="CBFD">
                            <h6 class="m-0 font-weight-bold text-primary">Curtain, Brooding, Feeding, Drinking</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="CBFD">
                            <div class="card-body">
                                This is a collapsable card example using Bootstrap's built in collapse functionality. <strong>Click on the card header</strong> to see the card body collapse and expand!
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#PositivePressure" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="PositivePressure">
                            <h6 class="m-0 font-weight-bold text-primary">Positive Pressure, Pully, Sling</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="PositivePressure">
                            <div class="card-body">
                                This is a collapsable card example using Bootstrap's built in collapse functionality. <strong>Click on the card header</strong> to see the card body collapse and expand!
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#NippleSet" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="NippleSet">
                            <h6 class="m-0 font-weight-bold text-primary">Nipple Set</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="NippleSet">
                            <div class="card-body">
                                This is a collapsable card example using Bootstrap's built in collapse functionality. <strong>Click on the card header</strong> to see the card body collapse and expand!
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>