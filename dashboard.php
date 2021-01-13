<?php 
include('header.php');
include('config.php');
$query = "SELECT count(*) as jml FROM pesanan";
$jml_pesanan = mysqli_query($koneksi, $query);
mysqli_next_result($koneksi);

$query = "SELECT count(*) as jml FROM produk";
$jml_produk = mysqli_query($koneksi, $query);
mysqli_next_result($koneksi);
?>
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Overview</h1>
	</div>

	<!-- Content Row -->
	<div class="row">

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
							Total Pesanan</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php foreach ($jml_pesanan as $row) {
								echo $row['jml'];
							} ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							Database Barang</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php foreach ($jml_produk as $row) {
								echo $row['jml']." Item";
							} ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Page Heading -->
</div>
<!-- /.container-fluid -->

</div>
<?php include('footer.php')?>