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
                            <h1 class="m-0 text-dark">Rekap Nominatif PNS</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active">Rekap Nominatif PNS</li>
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
                                                    <th>Satuan Kerja</th>
                                                    <th>Sekretaris</th>
                                                    <th>Kasubbag</th>
                                                    <th>Jumlah Staff</th>
                                                    <th>Jumlah Pegawai</th>
                                                    <th>Laki - laki</th>
                                                    <th>Perempuan</th>
                                                    <th>DPK</th>
                                                    <th>Organik</th>
                                                    <th>SD</th>
                                                    <th>SMP</th>
                                                    <th>SMA</th>
                                                    <th>D1</th>
                                                    <th>D2</th>
                                                    <th>D3</th>
                                                    <th>D4</th>
                                                    <th>S1</th>
                                                    <th>S2</th>
                                                    <th>S3</th>
                                                    <th>Islam</th>
                                                    <th>Protestan</th>
                                                    <th>Katolik</th>
                                                    <th>Hindu</th>
                                                    <th>Budha</th>
                                                    <th>Khonghucu</th>
                                                    <th>Es III</th>
                                                    <th>Es IV</th>
                                                    <th>Ket Jabatan Kosong</th>
                                                </tr>
                                            </thead>
                                            <tbody style="background-color: white">
                                                <?php
                                                $no = 1;
                                                $data = $koneksi->query("SELECT * FROM rekap_pns ORDER BY id_rekap_pns ASC");
                                                while ($row = $data->fetch_array()) {
                                                ?>
                                                    <tr>
                                                        <td align="center">
                                                            <a href="edit?id=<?= $row['id_rekap_pns'] ?>" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-edit"></i> Edit</a>
                                                            <a href="hapus?id=<?= $row['id_rekap_pns'] ?>" class="btn btn-danger btn-sm alert-hapus" title="Hapus"><i class="fa fa-trash"></i> Hapus</a>
                                                        </td>
                                                        <td align="center"><?= $no++ ?></td>
                                                        <td><?= $row['satker'] ?></td>
                                                        <td><?= $row['sekretaris'] ?></td>
                                                        <td><?= $row['kasubbag'] ?></td>
                                                        <td><?= $row['jumlah_staff'] ?></td>
                                                        <td><?= $row['jumlah_pegawai'] ?></td>
                                                        <td><?= $row['jk_lakilaki'] ?></td>
                                                        <td><?= $row['jk_perempuan'] ?></td>
                                                        <td><?= $row['jumlah_dpk'] ?></td>
                                                        <td><?= $row['jumlah_organik'] ?></td>
                                                        <td><?= $row['sd'] ?></td>
                                                        <td><?= $row['smp'] ?></td>
                                                        <td><?= $row['sma'] ?></td>
                                                        <td><?= $row['d1'] ?></td>
                                                        <td><?= $row['d2'] ?></td>
                                                        <td><?= $row['d3'] ?></td>
                                                        <td><?= $row['d4'] ?></td>
                                                        <td><?= $row['s1'] ?></td>
                                                        <td><?= $row['s2'] ?></td>
                                                        <td><?= $row['s3'] ?></td>
                                                        <td><?= $row['islam'] ?></td>
                                                        <td><?= $row['protestan'] ?></td>
                                                        <td><?= $row['katolik'] ?></td>
                                                        <td><?= $row['hindu'] ?></td>
                                                        <td><?= $row['budha'] ?></td>
                                                        <td><?= $row['khonghucu'] ?></td>
                                                        <td><?= $row['es3'] ?></td>
                                                        <td><?= $row['es4'] ?></td>
                                                        <td><?= $row['ket_jabatan_kosong'] ?></td>
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
                    <div class="row">
                        <div class="col-6">
                            <div class="card card-red card-outline">
                                <div class="card-header">
                                    <h6>Jabatan</h6>
                                </div>
                                <div style="width: 100%;margin: 0px auto;">
                                    <canvas id="chartJabatan"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-red card-outline">
                                <div class="card-header">
                                    <h6>DPK & Organik</h6>
                                </div>
                                <div style="width: 100%;margin: 0px auto;">
                                    <canvas id="chartDO"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-red card-outline">
                                <div class="card-header">
                                    <h6>Pendidikan</h6>
                                </div>
                                <div style="width: 100%;margin: 0px auto;">
                                    <canvas id="chartPendidikan"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-red card-outline">
                                <div class="card-header">
                                    <h6>Jenis Kelamin</h6>
                                </div>
                                <div style="width: 100%;margin: 0px auto;">
                                    <canvas id="chartJK"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-red card-outline">
                                <div class="card-header">
                                    <h6>Agama</h6>
                                </div>
                                <div style="width: 100%;margin: 0px auto;">
                                    <canvas id="chartAgama"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-red card-outline">
                                <div class="card-header">
                                    <h6>Pangkat</h6>
                                </div>
                                <div style="width: 100%;margin: 0px auto;">
                                    <canvas id="chartPangkat"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script>
        var ctx = document.getElementById("chartJabatan").getContext('2d');
        var chartJabatan = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Sekretaris", "Kasubbag", "Staff", "Pegawai"],
                datasets: [{
                    label: '',
                    data: [
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['sekretaris'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['kasubbag'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['jumlah_staff'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['jumlah_pegawai'];
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("chartJK").getContext('2d');
        var chartJK = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Laki-Laki", "Perempuan"],
                datasets: [{
                    label: '',
                    data: [
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['jk_lakilaki'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['jk_perempuan'];
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("chartDO").getContext('2d');
        var chartDO = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["DPK", "Organik"],
                datasets: [{
                    label: '',
                    data: [
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['jumlah_dpk'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['jumlah_organik'];
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("chartPendidikan").getContext('2d');
        var chartPendidikan = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["SD", "SMP", "SMA", "DI", "DII", "DIII", "DIV", "S1", "S2", "S3"],
                datasets: [{
                    label: '',
                    data: [
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['sd'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['smp'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['sma'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['d1'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['d2'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['d3'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['d4'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['s1'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['s2'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['s3'];
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("chartAgama").getContext('2d');
        var chartAgama = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Islam", "Protestan", "Khatolik", "Hindu", "Budha", "Khonghucu"],
                datasets: [{
                    label: '',
                    data: [
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['islam'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['protestan'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['katolik'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['hindu'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['budha'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['khonghucu'];
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("chartPangkat").getContext('2d');
        var chartPangkat = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Eselon III", "Eselon IV", "Jabatan Kosong"],
                datasets: [{
                    label: '',
                    data: [
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['es3'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['es4'];
                        ?>,
                        <?php
                        $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                        echo $data['ket_jabatan_kosong'];
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
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