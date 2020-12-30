<?php include('header.php')?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">
                        <?php for ($i=0; $i <10 ; $i++) { ?>
                            <div class="col-sm-3">
                                <div class="card" style="margin-bottom: 1rem;">
                                    <img src="img/not_found.png" class="card-img-top">
                                    <div class="card-body">
                                        <p class="card-text">Nama Produk</p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
<?php include('footer.php')?>