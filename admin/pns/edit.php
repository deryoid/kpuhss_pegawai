<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../../templates/head.php';

$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM nominatif_pegawai WHERE id_pegawai = '$id'");
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
                            <h1 class="m-0 text-dark">Nominatif PNS</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active">Nominatif PNS</li>
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
                                                <input type="text" class="form-control" name="nama_pegawai" value="<?= $row['nama_pegawai'] ?>">
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
                                            <label class="col-sm-2 col-form-label">NIP</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nip" value="<?= $row['nip'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pangkat Gol</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="pangkat_gol" value="<?= $row['pangkat_gol'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">TMT</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="pangkat_tmt" value="<?= $row['pangkat_tmt'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jabatan Struktural</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="jabatan_struktural" value="<?= $row['jabatan_struktural'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">TMT</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="jabatan_tmt" value="<?= $row['jabatan_tmt'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">No. SK Penempatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="no_sk_penempatan" value="<?= $row['no_sk_penempatan'] ?>">
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
                                                <select class="form-control" data-placeholder="Pilih" name="pendidikan_umum">
                                                    <option value="<?= $row['pendidikan_umum'] ?>"><?= $row['pendidikan_umum'] ?></option>
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
                                            <label class="col-sm-2 col-form-label">TMT</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="pendidikan_tmt" value="<?= $row['pendidikan_tmt'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Diklat Stuktural</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="diklat_struktural" value="<?= $row['diklat_struktural'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tgl Keg. Struktural</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tgl_kegiatan_struktural" value="<?= $row['tgl_kegiatan_struktural'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Diklat Fungsional</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="diklat_fungsional" value="<?= $row['diklat_fungsional'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tgl Keg. Fungsional</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tgl_kegiatan_fungsional" value="<?= $row['tgl_kegiatan_fungsional'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Diklat Teknis</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="diklat_teknis" value="<?= $row['diklat_teknis'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tgl Keg. Teknis</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tgl_kegiatan_teknis" value="<?= $row['tgl_kegiatan_teknis'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" name="keterangan"><?= $row['keterangan'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Berkas Pendukung Berupa Zip/Rar/Pdf (Ijazah, SK, Dll)</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="file">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/pns/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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
        $nama_pegawai = $_POST['nama_pegawai'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $nip = $_POST['nip'];
        $pangkat_gol = $_POST['pangkat_gol'];
        $pangkat_tmt = $_POST['pangkat_tmt'];
        $jabatan_struktural = $_POST['jabatan_struktural'];
        $jabatan_tmt = $_POST['jabatan_tmt'];
        $no_sk_penempatan = $_POST['no_sk_penempatan'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $pendidikan_umum = $_POST['pendidikan_umum'];
        $pendidikan_tmt = $_POST['pendidikan_tmt'];
        $diklat_struktural = $_POST['diklat_struktural'];
        $tgl_kegiatan_struktural = $_POST['tgl_kegiatan_struktural'];
        $diklat_fungsional = $_POST['diklat_fungsional'];
        $tgl_kegiatan_fungsional = $_POST['tgl_kegiatan_fungsional'];
        $diklat_teknis = $_POST['diklat_teknis'];
        $tgl_kegiatan_teknis = $_POST['tgl_kegiatan_teknis'];
        $keterangan = $_POST['keterangan'];


        //upload foto mhs
        $e = "";
        // CEK APAKAH FOTO DIGANTI
        if (!empty($_FILES['file']['name'])) {
            $filelama = $row['file'];

            // UPLOAD file PEMOHON
            $file      = $_FILES['file']['name'];
            $x_file    = explode('.', $file);
            $ext_file  = end($x_file);
            $nama_file = rand(1, 99999) . '.' . $ext_file;
            $size_file = $_FILES['file']['size'];
            $tmp_file  = $_FILES['file']['tmp_name'];
            $dir_file  = '../../file/';
            $allow_ext        = array('png', 'jpg', 'jpeg', 'zip', 'rar', 'pdf');
            $allow_size       = 1024 * 1024 * 1;
            // var_dump($nama_file); die();

            if (in_array($ext_file, $allow_ext) === true) {
                if ($size_file <= $allow_size) {
                    move_uploaded_file($tmp_file, $dir_file . $nama_file);
                    if (file_exists($dir_file . $filelama)) {
                        unlink($dir_file . $filelama);
                    }
                    $e .= "Upload Success";
                } else {
                    echo "
                <script type='text/javascript'>
                setTimeout(function () {    
                    swal({
                        title: '',
                        text:  'Ukuran  Terlalu Besar, Maksimal 1 Mb',
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
                    text:  'Format File Harus Berupa PNG atau JPG',
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
            $nama_file = $row['file'];
            $e .= "Upload Success!";
        }


        if (!empty($e)) {

            $submit = $koneksi->query("UPDATE nominatif_pegawai SET 
        nama_pegawai = '$nama_pegawai',
        tempat_lahir = '$tempat_lahir',
        tanggal_lahir = '$tanggal_lahir',
        nip = '$nip',
        pangkat_gol = '$pangkat_gol',
        pangkat_tmt = '$pangkat_tmt',
        jabatan_struktural = '$jabatan_struktural',
        jabatan_tmt = '$jabatan_tmt',
        no_sk_penempatan = '$no_sk_penempatan',
        jk = '$jk',
        agama = '$agama',
        pendidikan_umum = '$pendidikan_umum',
        pendidikan_tmt = '$pendidikan_tmt',
        diklat_struktural = '$diklat_struktural',
        tgl_kegiatan_struktural = '$tgl_kegiatan_struktural',
        diklat_fungsional = '$diklat_fungsional',
        tgl_kegiatan_fungsional = '$tgl_kegiatan_fungsional',
        diklat_teknis = '$diklat_teknis',
        tgl_kegiatan_teknis = '$tgl_kegiatan_teknis',
        keterangan = '$keterangan',
        file = '$nama_file'
        WHERE 
        id_pegawai = '$id'
        ");


            if ($submit) {
                $_SESSION['pesan'] = "Data Berhasil Diubah";
                echo "<script>window.location.replace('../pns/');</script>";
            }
        }
    }
    ?>
</body>

</html>