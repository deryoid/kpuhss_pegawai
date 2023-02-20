<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../../templates/head.php';

$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM nominatif_ppnpn WHERE id_ppnpn = '$id'");
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
                                        <h3 class="card-title">Nominatif PNS</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama_ppnpn" value="<?= $row['nama_ppnpn'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="tempat_lahir" value="<?= $row['tempat_lahir'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tanggal_lahir" value="<?= $row['tanggal_lahir'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" data-placeholder="Pilih" name="jk">
                                                    <option value="<?= $row['jk'] ?>"><?= $row['jk'] ?></option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Agama</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" data-placeholder="Pilih" name="agama">
                                                    <option value="<?= $row['agama'] ?>"><?= $row['agama'] ?></option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Protestan">Protestan</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Khonghucu">Khonghucu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pendidikan Umum</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" data-placeholder="Pilih" name="pendidikan">
                                                    <option value="<?= $row['pendidikan'] ?>"><?= $row['pendidikan'] ?></option>
                                                    <option value="SD">SD</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SMA">SMA</option>
                                                    <option value="D3">D3</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Ijazah Pendidikan Terakhir *Pdf</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="filependidikan" value="<?= $row['filependidikan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Sub. Bagian</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="sub_bagian" value="<?= $row['tgl_kegiatan_teknis'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">SK Penugasan/Sub Bagian *Pdf</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="filesubbagian" value="<?= $row['filesubbagian'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" name="ket"><?= $row['keterangan'] ?></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/ppnpn/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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
        $nama_ppnpn = $_POST['nama_ppnpn'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $pendidikan = $_POST['pendidikan'];
        $sub_bagian = $_POST['sub_bagian'];
        $ket = $_POST['ket'];
        if (!empty($_FILES['filependidikan']['name'])) {
            $filependidikanlama = $row['filependidikan'];
            // UPLOAD file PEMOHON
            $filependidikan      = $_FILES['filependidikan']['name'];
            $x_filependidikan    = explode('.', $filependidikan);
            $ext_filependidikan  = end($x_filependidikan);
            $nama_filependidikan = rand(1, 99999) . '.' . $ext_filependidikan;
            $size_filependidikan = $_FILES['filependidikan']['size'];
            $tmp_filependidikan  = $_FILES['filependidikan']['tmp_name'];
            $dir_filependidikan  = '../../file/';
            $allow_ext        = array('pdf');
            $allow_size       = 2048 * 2048 * 3;
            // var_dump($nama_file); die();

            if (in_array($ext_filependidikan, $allow_ext) === true) {
                if ($size_filependidikan <= $allow_size) {
                    move_uploaded_file($tmp_filependidikan, $dir_filependidikan . $nama_filependidikan);
                    if (file_exists($dir_filependidikan . $filependidikanlama)) {
                        unlink($dir_filependidikan . $filependidikanlama);
                    }
                    $e .= "Upload Success";
                } else {
                    echo "
        <script type='text/javascript'>
        setTimeout(function () {    
            swal({
                title: '',
                text:  'Ukuran File Terlalu Besar, Maksimal 3 Mb',
                type: 'warning',
                timer: 3000,
                showConfirmButton: true
            });     
        },10);  
        window.setTimeout(function(){ 
            window.history.back();
        } ,2000);   
        </script>";
                }
            } else {
                echo "
    <script type='text/javascript'>
    setTimeout(function () {    
        swal({
            title: 'Format File Tidak Didukung',
            text:  'Format File Harus Berupa PDF',
            type: 'warning',
            timer: 3000,
            showConfirmButton: true
        });     
    },10);  
    window.setTimeout(function(){ 
        window.history.back();
    } ,2000);   
    </script>";
            }
        } else {
            $nama_filependidikan = $row['filependidikan'];
            $e .= "Upload Success!";
        }
        if (!empty($_FILES['filediklat']['name'])) {
            $filesubbagianlama = $row['filesubbagian'];
            // UPLOAD file PEMOHON
            $filesubbagian      = $_FILES['filesubbagian']['name'];
            $x_filesubbagian    = explode('.', $filesubbagian);
            $ext_filesubbagian  = end($x_filesubbagian);
            $nama_filesubbagian = rand(1, 99999) . '.' . $ext_filesubbagian;
            $size_filesubbagian = $_FILES['filesubbagian']['size'];
            $tmp_filesubbagian  = $_FILES['filesubbagian']['tmp_name'];
            $dir_filesubbagian  = '../../file/';
            $allow_ext        = array('pdf');
            $allow_size       = 2048 * 2048 * 3;
            // var_dump($nama_file); die();

            if (in_array($ext_filesubbagian, $allow_ext) === true) {
                if ($size_filesubbagian <= $allow_size) {
                    move_uploaded_file($tmp_filesubbagian, $dir_filesubbagian . $nama_filesubbagian);
                    if (file_exists($dir_filesubbagian . $filesubbagianlama)) {
                        unlink($dir_filesubbagian . $filesubbagianlama);
                    }
                    $e .= "Upload Success";
                } else {
                    echo "
        <script type='text/javascript'>
        setTimeout(function () {    
            swal({
                title: '',
                text:  'Ukuran File Terlalu Besar, Maksimal 3 Mb',
                type: 'warning',
                timer: 3000,
                showConfirmButton: true
            });     
        },10);  
        window.setTimeout(function(){ 
            window.history.back();
        } ,2000);   
        </script>";
                }
            } else {
                echo "
    <script type='text/javascript'>
    setTimeout(function () {    
        swal({
            title: 'Format File Tidak Didukung',
            text:  'Format File Harus Berupa PDF',
            type: 'warning',
            timer: 3000,
            showConfirmButton: true
        });     
    },10);  
    window.setTimeout(function(){ 
        window.history.back();
    } ,2000);   
    </script>";
            }
        } else {
            $nama_filesubbagian = $row['filesubbagian'];
            $e .= "Upload Success!";
        }


        if (!empty($e)) {

            $submit = $koneksi->query("UPDATE nominatif_ppnpn SET 
        nama_ppnpn = '$nama_ppnpn',
        tempat_lahir = '$tempat_lahir',
        tanggal_lahir = '$tanggal_lahir',
        jk = '$jk',
        agama = '$agama',
        pendidikan = '$pendidikan',
        sub_bagian = '$sub_bagian',
        ket = '$ket',
        filependidikan = '$nama_filependidikan',
        filesubbagian = '$nama_filesubbagian'
        WHERE 
        id_ppnpn = '$id'
        ");
            // var_dump($submit, $koneksi->error);
            // die();

            if ($submit) {
                $_SESSION['pesan'] = "Data Berhasil Diubah";
                echo "<script>window.location.replace('../ppnpn/');</script>";
            }
        }
    }

    ?>
</body>

</html>