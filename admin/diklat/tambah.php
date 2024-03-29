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
                            <h1 class="m-0 text-dark">Diklat </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active">Diklat </li>
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
                                        <h3 class="card-title">Diklat </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Pegawai</label>
                                            <div class="col-sm-10">
                                                <select class="form control select2" name="id_user" data-placeholder="Pilih" style="width: 100%;" required>
                                                    <option value=""></option>
                                                    <?php
                                                    $k = $koneksi->query("SELECT * FROM user AS u 
                                                    LEFT JOIN nominatif_pegawai AS np ON u.id_user = np.id_user");
                                                    foreach ($k as $item) {
                                                    ?>
                                                        <option value="<?= $item['id_user'] ?>">
                                                            <?= $item['nama_pegawai'] ?>
                                                        </option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"> Kegiatan</label>
                                            <div class="col-sm-10">
                                                <select class="form control select2" name="id_kegiatan" data-placeholder="Pilih" style="width: 100%;" required>
                                                    <option value=""></option>
                                                    <?php
                                                    $k = $koneksi->query("SELECT * FROM kegiatan");
                                                    foreach ($k as $item) {
                                                    ?>
                                                        <option value="<?= $item['id_kegiatan'] ?>">
                                                            Nama Kegiatan : <?= $item['nama_kegiatan'] ?> |
                                                            Tanggal Kegiatan : <?= $item['tgl_mulai'] . " S/d " . $item['tgl_selesai'] ?> |
                                                            Deskripsi : <?= $item['deskripsi'] ?>
                                                        </option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"> Status Diklat</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" data-placeholder="Pilih" name="status_diklat">
                                                    <option value="">-Pilih-</option>
                                                    <option value="Pelaksanaan">Pelaksanaan</option>
                                                    <option value="Selesai">Selesai</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Upload Surat Tugas</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="filest">
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/diklat/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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
        $id_kegiatan = $_POST['id_kegiatan'];
        $id_user = $_POST['id_user'];
        $status_diklat = $_POST['status_diklat'];


        if (!empty($_FILES['filest']['name'])) {

            // UPLOAD file PEMOHON
            $filest      = $_FILES['filest']['name'];
            $x_filest    = explode('.', $filest);
            $ext_filest  = end($x_filest);
            $nama_filest = rand(1, 99999) . '.' . $ext_filest;
            $size_filest = $_FILES['filest']['size'];
            $tmp_filest  = $_FILES['filest']['tmp_name'];
            $dir_filest  = '../../file/';
            $allow_ext        = array('pdf');
            $allow_size       = 2048 * 2048 * 3;
            // var_dump($nama_file); die();

            if (in_array($ext_filest, $allow_ext) === true) {
                if ($size_filest <= $allow_size) {
                    move_uploaded_file($tmp_filest, $dir_filest . $nama_filest);
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


        $submit = $koneksi->query("INSERT INTO diklat VALUES (
        NULL,
        '$id_kegiatan',
        '$id_user',
        '$status_diklat',
        '$nama_filest'
        )");
        // var_dump($submit, $koneksi->error);
        // die();
        if ($submit) {
            $_SESSION['pesan'] = "Data Berhasil Ditambahkan";
            echo "<script>window.location.replace('../diklat/');</script>";
        }
    }

    ?>
</body>

</html>