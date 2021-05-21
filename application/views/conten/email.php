<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Verifikasi User</h1>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data User</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nama Toko</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Provinsi</th>
                                    <th>Kecamatan</th>
                                    <th>Kabupaten</th>
                                    <th>Alamat</th>
                                    <th>verified at</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if ($data === 404) {
                                    echo "";
                                } else {
                                    $user = count($data);
                                    for ($i = 0; $i < $user; $i++) { ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $data[0]['nama'] ?></td>
                                            <td><?php echo $data[0]['nama_toko'] ?></td>
                                            <td><?php echo $data[0]['email'] ?></td>
                                            <td><?php echo $data[0]['no_hp'] ?></td>
                                            <td><?php echo $data[0]['provinsi'] ?></td>
                                            <td><?php echo $data[0]['kabupaten'] ?></td>
                                            <td><?php echo $data[0]['kecamatan'] ?></td>
                                            <td><?php echo $data[0]['alamat'] ?></td>
                                            <td><?php echo $data[0]['email_verified_at'] ?></td>
                                        </tr>

                                <?php $no++;
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <script>
                function datadel(value, jenis) {
                    document.getElementById('mylink').href = "hapus.php?del=" + value + "&data=" + jenis;
                }
            </script>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Data akan terhapus !</h4>
                        </div>
                        <div class="modal-body">
                            Anda yakin ingin menghapus data ini ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <a id="mylink" href=""><button type="button" class="btn btn-primary">Delete Data</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
</div>