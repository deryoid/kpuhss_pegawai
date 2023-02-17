<?php
require '../../config/config.php';
require '../../config/koneksi.php';
require '../../config/day.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../../templates/head.php';
?>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php
        include '../../templates/navbar.php';
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include '../../templates/sidebar.php';
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Nominatif PNS</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active">Nominatif PNS</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-red card-outline">
                                <div class="card-header">
                                    <a href="tambah" class="btn bg-green"><i class="fa fa-plus-circle"> Tambah Data</i></a>
                                    <a href="print" target="blank" class="btn bg-dark"><i class="fa fa-print"> Cetak</i></a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                                    ?>
                                        <div class="alert alert-info alertinfo" role="alert">
                                            <i class="fa fa-check-circle"> <?= $_SESSION['pesan']; ?></i>
                                        </div>
                                    <?php
                                        $_SESSION['pesan'] = '';
                                    }
                                    ?>

                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead class="bg-red">
                                                <tr align="center">
                                                    <th></th>
                                                    <th>No</th>
                                                    <th>Berkas Pendukung Berupa Zip/Rar/Pdf (Ijazah, SK, Dll)</th>
                                                    <th>Nama</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>NIP</th>
                                                    <th>Pangkat Golongan</th>
                                                    <th>TMT</th>
                                                    <th>Jabatan Struktural</th>
                                                    <th>TMT</th>
                                                    <th>No SK Penempatan</th>
                                                    <th>JK</th>
                                                    <th>Agama</th>
                                                    <th>Pendidikan Umum</th>
                                                    <th>TMT</th>
                                                    <th>Diklat Struktural</th>
                                                    <th>Tanggal Keg. Struktural</th>
                                                    <th>Diklat Fungsional</th>
                                                    <th>Tanggal Keg. Fungsional</th>
                                                    <th>Diklat Teknis</th>
                                                    <th>Tanggal Keg. Teknis</th>
                                                    <th>Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody style="background-color: white">
                                                <?php
                                                $no = 1;
                                                $data = $koneksi->query("SELECT * FROM nominatif_pegawai ORDER BY id_pegawai ASC");
                                                while ($row = $data->fetch_array()) {
                                                ?>
                                                    <tr>
                                                        <td align="center">
                                                            <a href="edit?id=<?= $row['id_pegawai'] ?>" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-edit"></i> Edit</a>
                                                            <a href="hapus?id=<?= $row['id_pegawai'] ?>" class="btn btn-danger btn-sm alert-hapus" title="Hapus"><i class="fa fa-trash"></i> Hapus</a>
                                                        </td>
                                                        <td align="center"><?= $no++ ?></td>
                                                        <td><a href="<?= base_url(); ?>/file/<?= $row['file'] ?>" class="btn btn-sm" title="Download"><i class="fa fa-download"></i> Download</i></a></td>
                                                        <td><?= $row['nama_pegawai'] ?></td>
                                                        <td><?= $row['tempat_lahir'] ?></td>
                                                        <td><?= $row['tanggal_lahir'] ?></td>
                                                        <td><?= $row['nip'] ?></td>
                                                        <td><?= $row['pangkat_gol'] ?></td>
                                                        <td><?= $row['pangkat_tmt'] ?></td>
                                                        <td><?= $row['jabatan_struktural'] ?></td>
                                                        <td><?= $row['jabatan_tmt'] ?></td>
                                                        <td><?= $row['no_sk_penempatan'] ?></td>
                                                        <td><?= $row['jk'] ?></td>
                                                        <td><?= $row['agama'] ?></td>
                                                        <td><?= $row['pendidikan_umum'] ?></td>
                                                        <td><?= $row['pendidikan_tmt'] ?></td>
                                                        <td><?= $row['diklat_struktural'] ?></td>
                                                        <td><?= $row['tgl_kegiatan_struktural'] ?></td>
                                                        <td><?= $row['diklat_fungsional'] ?></td>
                                                        <td><?= $row['tgl_kegiatan_fungsional'] ?></td>
                                                        <td><?= $row['diklat_teknis'] ?></td>
                                                        <td><?= $row['tgl_kegiatan_teknis'] ?></td>
                                                        <td><?= $row['keterangan'] ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include_once "../../templates/footer.php"; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php include_once "../../templates/script.php"; ?>

    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });
    </script>


</body>

</html>


<!-- MODAL LAPORAN SURAT MASUK -->
<div id="dat" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                <h4 class="modal-title">Daftar Aktiva Tetap</h4>
            </div>
            <div class="modal-body">

                <!-- kategori -->
                <label style="font-size: 15px; font-style: bold;">Berdasarkan Departemen</label>
                <form method="POST" target="blank" action="<?= base_url('admin/dat/print.php') ?>">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <select class="form-control" data-placeholder="Pilih" name="jenis_aktiva" required="">
                                    <option value="">-Pilih-</option>
                                    <option value="HRGA">HRGA</option>
                                    <option value="ENG">ENG</option>
                                    <option value="HRM">HRM</option>
                                    <option value="HSE">HSE</option>
                                    <option value="CSR">CSR</option>
                                    <option value="PLAN">PLAN</option>
                                    <option value="PORT">PORT</option>
                                    <option value="LOGISTIK">LOGISTIK</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" name="c1" class="btn btn-info waves-effect waves-light m-l-10 btn-md"><i class="mdi mdi-printer"></i> Cetak</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end kategori -->

            </div><!-- modal body -->

            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="mdi mdi-close"></i> Batal</button>
            </div>
        </div>
    </div>
</div>