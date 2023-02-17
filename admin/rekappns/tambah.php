<?php
require '../../config/config.php';
require '../../config/koneksi.php';
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
                                <li class="breadcrumb-item active">Tambah Data</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- left column -->
                    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Horizontal Form -->
                                <div class="card card-red">
                                    <div class="card-header">
                                        <h3 class="card-title">Rekap Nominatif PNS</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Satker</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="satker" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Sekretaris</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="sekretaris" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kasubbag</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="kasubbag" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jumlah Staff</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="jumlah_staff" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jumlah Pegawai</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="jumlah_pegawai" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Laki - Laki</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="jk_lakilaki" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Perempuan</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="jk_perempuan" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jumlah DPK</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="jumlah_dpk" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jumlah Organik</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="jumlah_organik" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik SD</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="sd" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik SMP</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="smp" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik SMA</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="sma" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik D1</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="d1" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik D2</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="d2" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik D3</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="d3" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik D4</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="d4" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik S1</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="s1" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik S2</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="s2" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik S3</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="s3" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Islam</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="islam" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Protestan</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="protestan" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Katolik</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="katolik" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Hindu</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="hindu" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Budha</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="budha" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Khonghucu</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="khonghucu" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Es III</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="es3" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Es IV</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="es4" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Keterangan Jabatan Kosong</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" name="ket_jabatan_kosong" required=""></textarea>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/rekappns/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
                                        <button type="submit" name="submit" class="btn bg-gradient-primary float-right mr-2"><i class="fa fa-save"> Simpan</i></button>
                                    </div>
                                    <!-- /.card-footer -->

                                </div>

                            </div>
                            <!--/.col (left) -->
                        </div>

                    </form>

                </div><!-- /.container-fluid -->
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
    </script>
    <?php
    if (isset($_POST['submit'])) {
        $satker = $_POST['satker'];
        $sekretaris = $_POST['sekretaris'];
        $kasubbag = $_POST['kasubbag'];
        $jumlah_staff = $_POST['jumlah_staff'];
        $jumlah_pegawai = $_POST['jumlah_pegawai'];
        $jk_lakilaki = $_POST['jk_lakilaki'];
        $jk_perempuan = $_POST['jk_perempuan'];
        $jumlah_dpk = $_POST['jumlah_dpk'];
        $jumlah_organik = $_POST['jumlah_organik'];
        $sd = $_POST['sd'];
        $smp = $_POST['smp'];
        $sma = $_POST['sma'];
        $d1 = $_POST['d1'];
        $d2 = $_POST['d2'];
        $d3 = $_POST['d3'];
        $d4 = $_POST['d4'];
        $s1 = $_POST['s1'];
        $s2 = $_POST['s2'];
        $s3 = $_POST['s3'];
        $islam = $_POST['islam'];
        $protestan = $_POST['protestan'];
        $katolik = $_POST['katolik'];
        $hindu = $_POST['hindu'];
        $budha = $_POST['budha'];
        $khonghucu = $_POST['khonghucu'];
        $es3 = $_POST['es3'];
        $es4 = $_POST['es4'];
        $ket_jabatan_kosong = $_POST['ket_jabatan_kosong'];

        $submit = $koneksi->query("INSERT INTO rekap_pns VALUES (
        NULL,
        '$satker',
        '$sekretaris',
        '$kasubbag',
        '$jumlah_staff',
        '$jumlah_pegawai',
        '$jk_lakilaki',
        '$jk_perempuan',
        '$jumlah_dpk',
        '$jumlah_organik',
        '$sd',
        '$smp',
        '$sma',
        '$d1',
        '$d2',
        '$d3',
        '$d4',
        '$s1',
        '$s2',
        '$s3',
        '$islam',
        '$protestan',
        '$katolik',
        '$hindu',
        '$budha',
        '$khonghucu',
        '$es3',
        '$es4',
        '$ket_jabatan_kosong'
        )");
        // var_dump($submit, $koneksi->error);
        // die();
        if ($submit) {
            $_SESSION['pesan'] = "Data Berhasil Ditambahkan";
            echo "<script>window.location.replace('../rekappns/');</script>";
        }
    }

    ?>
</body>

</html>