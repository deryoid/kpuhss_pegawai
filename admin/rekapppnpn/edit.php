<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../../templates/head.php';

$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM rekap_ppnpn WHERE id_rekap_ppnpn = '$id'");
$row = $data->fetch_array();
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
                            <h1 class="m-0 text-dark">Nominatif PPNPN</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active">Nominatif PPNPN</li>
                                <li class="breadcrumb-item active">Edit Data</li>
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
                                        <h3 class="card-title">Nominatif PPNPN</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Satker</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="satker" value="<?= $row['satker'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jumlah Pegawai</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="jumlah_ppnpn" value="<?= $row['jumlah_ppnpn'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Laki - Laki</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="jk_lakilaki" value="<?= $row['jk_lakilaki'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Perempuan</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="jk_perempuan" value="<?= $row['jk_perempuan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik SD</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="sd" value="<?= $row['sd'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik SMP</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="smp" value="<?= $row['smp'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik SMA</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="sma" value="<?= $row['sma'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik D1</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="d1" value="<?= $row['d1'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik D2</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="d2" value="<?= $row['d2'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik D3</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="d3" value="<?= $row['d3'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik D4</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="d4" value="<?= $row['d4'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik S1</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="s1" value="<?= $row['s1'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik S2</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="s2" value="<?= $row['s2'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidik S3</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="s3" value="<?= $row['s3'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pramubakti</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="pramubakti" value="<?= $row['pramubakti'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pengamanan</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="pengamanan" value="<?= $row['pengamanan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Supir</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="supir" value="<?= $row['supir'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Bidang Administrasi/Teknis</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="bidang_administrasi" value="<?= $row['bidang_administrasi'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Islam</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="islam" value="<?= $row['islam'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Protestan</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="protestan" value="<?= $row['protestan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Katolik</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="katolik" value="<?= $row['katolik'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Hindu</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="hindu" value="<?= $row['hindu'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Budha</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="budha" value="<?= $row['budha'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Khonghucu</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="khonghucu" value="<?= $row['khonghucu'] ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/rekappnpn/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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


    <?php
    if (isset($_POST['submit'])) {
        $satker = $_POST['satker'];
        $jumlah_ppnpn = $_POST['jumlah_ppnpn'];
        $jk_lakilaki = $_POST['jk_lakilaki'];
        $jk_perempuan = $_POST['jk_perempuan'];
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
        $pramubakti = $_POST['pramubakti'];
        $pengamanan = $_POST['pengamanan'];
        $supir = $_POST['supir'];
        $bidang_administrasi = $_POST['bidang_administrasi'];
        $islam = $_POST['islam'];
        $protestan = $_POST['protestan'];
        $katolik = $_POST['katolik'];
        $hindu = $_POST['hindu'];
        $budha = $_POST['budha'];
        $khonghucu = $_POST['khonghucu'];


        $submit = $koneksi->query("UPDATE rekap_ppnpn SET 
        satker = '$satker',
        jumlah_ppnpn = '$jumlah_ppnpn',
        jk_lakilaki = '$jk_lakilaki',
        jk_perempuan = '$jk_perempuan',
        sd = '$sd',
        smp = '$smp',
        sma = '$sma',
        d1 = '$d1',
        d2 = '$d2',
        d3 = '$d3',
        d4 = '$d4',
        s1 = '$s1',
        s2 = '$s2',
        s3 = '$s3',
        pramubakti = '$pramubakti',
        pengamanan = '$pengamanan',
        supir = '$supir',
        bidang_administrasi = '$bidang_administrasi',
        islam = '$islam',
        protestan = '$protestan',
        katolik = '$katolik',
        hindu = '$hindu',
        budha = '$budha',
        khonghucu = '$khonghucu'
        WHERE 
        id_rekap_ppnpn = '$id'
        ");
        // var_dump($submit, $koneksi->error);
        // die();

        if ($submit) {
            $_SESSION['pesan'] = "Data Berhasil Diubah";
            echo "<script>window.location.replace('../rekapppnpn/');</script>";
        }
    }

    ?>
</body>

</html>