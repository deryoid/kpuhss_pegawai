<?php
include '../../config/config.php';
include '../../config/koneksi.php';

$no = 1;

$bln = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
);
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM diklat AS d
LEFT JOIN user AS u ON d.id_user = u.id_user
LEFT JOIN nominatif_pegawai AS np ON u.id_user = np.id_user
LEFT JOIN kegiatan AS k ON d.id_kegiatan = k.id_kegiatan
WHERE d.id_user = '$_SESSION[id_user]' AND d.status_diklat = 'Selesai' AND d.id_diklat = '$id'
")->fetch_array();
?>

<script type="text/javascript">
    window.print();
</script>

<!DOCTYPE html>
<html>

<head>
    <title>Sertifikat Peserta <?= $data['nama_kegiatan'] ?></title>

</head>

<body><br><br><br><br>
    <fieldset>
        <hr size="2px" color="black">
        <hr size="2px" color="black">
        <h1>
            <center>
                Sertifikat Peserta <?= $data['nama_kegiatan'] ?>
            </center>
        </h1>
        <hr size="2px" color="black">
        <hr size="2px" color="black">
        <br>

        <br>
        <div class="card-body" align="center">
            <h2>
                <dl class="row">

                    <u>
                        <dt class="col-sm-4">NAMA <?php echo ": " . $data['nama_pegawai']; ?></dt>
                        <dt class="col-sm-4">NIP<?php echo ": " . $data['nip']; ?></dt>
                    </u>

                </dl>
            </h2>
        </div>
        <div class="card-body" align="justify">
            <h3>
                <p>Kepada Peserta Kegiatan <?= $data['nama_kegiatan'] ?>, Kami mengucapkan banyak terimakasih kepada peserta yang telah mengikuti kegiatan dari <?= tgl_indo($data['tgl_mulai']) ?> sampai dengan <?= tgl_indo($data['tgl_selesai']) ?>, yang bertujuan untuk <?= $data['deskripsi'] ?> dan berharap ilmu yang didapat akan sangat berguna kedepannya</p>
            </h3>
        </div>



        <br>
        <div style="text-align: center; display: inline-block; float: right;">
            <h5>
                KAndangan, <?php echo tgl_indo(date('Y-m-d')); ?><br>
                <br><br><br><br>
                <u>Ketua Pelaksana<br>
            </h5>
        </div>


</body>
</fieldset>

</html>

<?php
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}

?>