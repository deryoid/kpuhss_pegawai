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
                            <h1 class="m-0 text-dark">Nominatif PNS</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active">Nominatif PNS</li>
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
                                        <h3 class="card-title">Nominatif PNS</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama_pegawai">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="tempat_lahir">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tanggal_lahir">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">NIP</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nip">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pangkat Gol</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="pangkat_gol">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">TMT</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="pangkat_tmt">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">SK Pangkat *Pdf</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="filepangkat">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jabatan Struktural</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="jabatan_struktural">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">TMT</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="jabatan_tmt">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">SK Jabatan *Pdf</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="filejabatan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">No. SK Penempatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="no_sk_penempatan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">SK Penempatan *Pdf</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="filepenempatan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" data-placeholder="Pilih" name="jk">
                                                    <option value="">-Pilih-</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Agama</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" data-placeholder="Pilih" name="agama">
                                                    <option value="">-Pilih-</option>
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
                                                    <option value="">-Pilih-</option>
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
                                                <input type="date" class="form-control" name="pendidikan_tmt">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Ijazah Pendidikan Terakhir*Pdf</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="filependidikan">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" name="keterangan"></textarea>
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

    <script>
    </script>
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
        $keterangan = $_POST['keterangan'];


        // CEK APAKAH file DIGANTI
        if (!empty($_FILES['filepangkat']['name'])) {

            // UPLOAD file PEMOHON
            $filepangkat      = $_FILES['filepangkat']['name'];
            $x_filepangkat    = explode('.', $filepangkat);
            $ext_filepangkat  = end($x_filepangkat);
            $nama_filepangkat = rand(1, 99999) . '.' . $ext_filepangkat;
            $size_filepangkat = $_FILES['filepangkat']['size'];
            $tmp_filepangkat  = $_FILES['filepangkat']['tmp_name'];
            $dir_filepangkat  = '../../file/';
            $allow_ext        = array('pdf');
            $allow_size       = 2048 * 2048 * 3;
            // var_dump($nama_file); die();

            if (in_array($ext_filepangkat, $allow_ext) === true) {
                if ($size_filepangkat <= $allow_size) {
                    move_uploaded_file($tmp_filepangkat, $dir_filepangkat . $nama_filepangkat);
                    // if (file_exists($dir_file . $filelama)) {
                    //     unlink($dir_file . $filelama);
                    // }
                    // $e .= "Upload Success"; 
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
        }

        if (!empty($_FILES['filejabatan']['name'])) {

            // UPLOAD file PEMOHON
            $filejabatan      = $_FILES['filejabatan']['name'];
            $x_filejabatan    = explode('.', $filejabatan);
            $ext_filejabatan  = end($x_filejabatan);
            $nama_filejabatan = rand(1, 99999) . '.' . $ext_filejabatan;
            $size_filejabatan = $_FILES['filejabatan']['size'];
            $tmp_filejabatan  = $_FILES['filejabatan']['tmp_name'];
            $dir_filejabatan  = '../../file/';
            $allow_ext        = array('pdf');
            $allow_size       = 2048 * 2048 * 3;
            // var_dump($nama_file); die();

            if (in_array($ext_filejabatan, $allow_ext) === true) {
                if ($size_filejabatan <= $allow_size) {
                    move_uploaded_file($tmp_filejabatan, $dir_filejabatan . $nama_filejabatan);
                    // if (file_exists($dir_file . $filelama)) {
                    //     unlink($dir_file . $filelama);
                    // }
                    // $e .= "Upload Success"; 
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
        }
        if (!empty($_FILES['filepenempatan']['name'])) {

            // UPLOAD file PEMOHON
            $filepenempatan      = $_FILES['filepenempatan']['name'];
            $x_filepenempatan    = explode('.', $filepenempatan);
            $ext_filepenempatan  = end($x_filepenempatan);
            $nama_filepenempatan = rand(1, 99999) . '.' . $ext_filepenempatan;
            $size_filepenempatan = $_FILES['filepenempatan']['size'];
            $tmp_filepenempatan  = $_FILES['filepenempatan']['tmp_name'];
            $dir_filepenempatan  = '../../file/';
            $allow_ext        = array('pdf');
            $allow_size       = 2048 * 2048 * 3;
            // var_dump($nama_file); die();

            if (in_array($ext_filepenempatan, $allow_ext) === true) {
                if ($size_filepenempatan <= $allow_size) {
                    move_uploaded_file($tmp_filepenempatan, $dir_filepenempatan . $nama_filepenempatan);
                    // if (file_exists($dir_file . $filelama)) {
                    //     unlink($dir_file . $filelama);
                    // }
                    // $e .= "Upload Success"; 
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
        }
        if (!empty($_FILES['filependidikan']['name'])) {

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
                    // if (file_exists($dir_file . $filelama)) {
                    //     unlink($dir_file . $filelama);
                    // }
                    // $e .= "Upload Success"; 
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
        }

        $submit = $koneksi->query("INSERT INTO nominatif_pegawai VALUES (
        NULL,
        '$nama_pegawai',
        '$tempat_lahir',
        '$tanggal_lahir',
        '$nip',
        '$pangkat_gol',
        '$pangkat_tmt',
        '$jabatan_struktural',
        '$jabatan_tmt',
        '$no_sk_penempatan',
        '$jk',
        '$agama',
        '$pendidikan_umum',
        '$pendidikan_tmt',
        '$keterangan',
        '$nama_filepangkat',
        '$nama_filejabatan',
        '$nama_filepenempatan',
        '$nama_filependidikan'
        )");
        // var_dump($submit, $koneksi->error);
        // die();
        if ($submit) {
            $_SESSION['pesan'] = "Data Berhasil Ditambahkan";
            echo "<script>window.location.replace('../pns/');</script>";
        }
    }

    ?>
</body>

</html>