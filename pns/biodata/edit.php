<?php
require '../../config/config.php';
include '../../config/koneksi.php';

include '../../templates/head.php';
include '../../templates/navbar.php';
include '../../templates/sidebar.php';
$data = $koneksi->query("SELECT * FROM nominatif_pegawai WHERE id_user = '$_SESSION[id_user]'")->fetch_array();

?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Formulir Biodata PNS</h1>
                </div>

            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Formulir Biodata PNS</h3>
                        </div>

                        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="saveformulir">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_pegawai" value="<?= $data['nama_pegawai'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tempat lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tempat_lahir" value="<?= $data['tempat_lahir'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nip" value="<?= $data['nip'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pangkat Gol</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pangkat_gol" value="<?= $data['pangkat_gol'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TMT</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="pangkat_tmt" value="<?= $data['pangkat_tmt'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">SK Pangkat *Pdf</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="filepangkat" value="<?= $data['filepangkat'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jabatan Struktural</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="jabatan_struktural" value="<?= $data['jabatan_struktural'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TMT</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="jabatan_tmt" value="<?= $data['jabatan_tmt'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">SK Jabatan *Pdf</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="filejabatan" value="<?= $data['filejabatan'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No. SK Penempatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="no_sk_penempatan" value="<?= $data['no_sk_penempatan'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">SK Penempatan *Pdf</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="filepenempatan" value="<?= $data['filepenempatan'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" data-placeholder="Pilih" name="jk">
                                            <option value="<?= $data['jk'] ?>"><?= $data['jk'] ?></option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" data-placeholder="Pilih" name="agama">
                                            <option value="<?= $data['agama'] ?>"><?= $data['agama'] ?></option>
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
                                            <option value="<?= $data['pendidikan_umum'] ?>"><?= $data['pendidikan_umum'] ?></option>
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
                                        <input type="date" class="form-control" name="pendidikan_tmt" value="<?= $data['pendidikan_tmt'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Ijazah Pendidikan Terakhir *Pdf</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="filependidikan" value="<?= $data['filependidikan'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" name="keterangan"><?= $data['keterangan'] ?></textarea>
                                    </div>
                                </div>


                            </div>

                            <div class="card-footer">
                                <button name="submit" class="btn btn-success"><i class="fa fa-save mr-2"></i>Tambah Informasi</button>
                                <!-- onclick="return saveformulir();" -->
                                <a href="../biodata/" class="btn btn-default"><i class="fa fa-arrow-circle-left mr-2"></i>Batal</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include '../../templates/footer.php';
include '../../templates/script.php';

?>



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
        $filepangkatlama = $row['filepangkat'];
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
                if (file_exists($dir_filepangkat . $filepangkatlama)) {
                    unlink($dir_filepangkat . $filepangkatlama);
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
        $nama_filepangkat = $row['filepangkat'];
        $e .= "Upload Success!";
    }

    if (!empty($_FILES['filejabatan']['name'])) {
        $filejabatanlama = $row['filejabatan'];
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
                if (file_exists($dir_filejabatan . $filejabatanlama)) {
                    unlink($dir_filejabatan . $filejabatanlama);
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
        $nama_filejabatan = $row['filejabatan'];
        $e .= "Upload Success!";
    }
    if (!empty($_FILES['filepenempatan']['name'])) {
        $filepenempatanlama = $row['filepenempatan'];
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
                if (file_exists($dir_filepenempatan . $filepenempatanlama)) {
                    unlink($dir_filepenempatan . $filepenempatanlama);
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
        $nama_filepenempatan = $row['filepenempatan'];
        $e .= "Upload Success!";
    }
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
        keterangan = '$keterangan',
        filepangkat = '$nama_filepangkat',
        filejabatan = '$nama_filejabatan',
        filepenempatan = '$nama_filepenempatan',
        filependidikan = '$nama_filependidikan'
        WHERE 
        id_pegawai = '$data[id_pegawai]'
        ");
        var_dump($submit, $koneksi->error);
        die();

        if ($submit) {
            $_SESSION['pesan'] = "Data Berhasil Diubah";
            echo "<script>window.location.replace('../biodata/');</script>";
        }
    }
}
?>