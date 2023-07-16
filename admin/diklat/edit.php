<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../../templates/head.php';

$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM diklat AS d
LEFT JOIN user AS u ON d.id_user = u.id_user
LEFT JOIN nominatif_pegawai AS np ON u.id_user = np.id_user WHERE id_diklat = '$id'");
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
                            <h1 class="m-0 text-dark">Diklat PNS</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active">Diklat PNS</li>
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
                                        <h3 class="card-title">Diklat PNS</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="<?= $row['nama_pegawai'] ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" data-placeholder="Pilih" name="status_diklat">
                                                    <option value="<?= $row['status_diklat'] ?>"><?= $row['status_diklat'] ?></option>
                                                    <option value="Pelaksanaan">Pelaksanaan</option>
                                                    <option value="Selesai">Selesai</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Upload Surat Tugas</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="filest" value="<?= $row['filest'] ?>">
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


    <?php
    if (isset($_POST['submit'])) {
        $status_diklat = $_POST['status_diklat'];



        if (!empty($_FILES['filest']['name'])) {
            $filestlama = $row['filest'];
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
                    if (file_exists($dir_filest . $filestlama)) {
                        unlink($dir_filest . $filestlama);
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
            $nama_filest = $row['filest'];
            $e .= "Upload Success!";
        }
        if (!empty($e)) {

            $submit = $koneksi->query("UPDATE diklat SET 
        status_diklat = '$status_diklat',
        filest = '$nama_filest'
        WHERE 
        id_diklat = '$id'
        ");


            if ($submit) {
                $_SESSION['pesan'] = "Data Berhasil Diubah";
                echo "<script>window.location.replace('../diklat/');</script>";
            }
        }
    }
    ?>
</body>

</html>