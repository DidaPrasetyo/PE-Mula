<?php
include('header.php');
include('config.php');
$query = "SELECT * FROM pesanan";
$data = mysqli_query($koneksi, $query);
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor Penawaran</th>
                            <th>Nama Kandang</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $row) { ?>
                            <tr>
                                <td><?php echo $row['no_penawaran'];?></td>
                                <td><?php echo $row['nama'];?></td>
                                <td><?php echo $row['alamat'];?></td>
                                <td>
                                    <a href="kalkulasi.php?id=<?php echo $row['id'] ?>">Lihat</a>
                                </td>
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