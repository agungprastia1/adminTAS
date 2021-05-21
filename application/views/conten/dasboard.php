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
                                    <th>Action</th>
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
                                            <td style='text-align:center'>
                                                <a href="<?= site_url('Welcome/verifiEmail/') . $data[0]['id'] ?>"><button class="btn btn-success">verikasi</button></a>
                                            </td>
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
    </section>
</div>