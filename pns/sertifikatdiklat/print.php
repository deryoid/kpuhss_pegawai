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
<html>

<head>
    <style type='text/css'>
        body,
        html {
            margin: 0;
            padding: 0;
        }

        body {
            color: black;
            display: table;
            font-family: Georgia, serif;
            font-size: 24px;
            text-align: center;
        }

        .container {
            border: 20px solid tan;
            width: 750px;
            height: 563px;
            display: table-cell;
            vertical-align: middle;
        }

        .logo {
            color: tan;
        }

        .marquee {
            color: tan;
            font-size: 48px;
            margin: 20px;
        }

        .assignment {
            margin: 20px;
        }

        .person {
            border-bottom: 2px solid black;
            font-size: 32px;
            font-style: italic;
            margin: 20px auto;
            width: 400px;
        }

        .reason {
            margin: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <title>Sertifikat Peserta <?= $data['nama_kegiatan'] ?></title>
        </div>

        <div class="marquee">
            Sertifikat Peserta <?= $data['nama_kegiatan'] ?>
        </div>

        <div class="assignment">
            Diberikan Kepada :
        </div>

        <div class="person">
            <?php echo $data['nama_pegawai']; ?><br>
            <i style="font-size: 30px;"><?php echo $data['nip']; ?></i>
        </div>

        <div class="reason" align="justify">
            <p style="font-size: 16px;">Kepada Peserta Kegiatan <?= $data['nama_kegiatan'] ?>, Kami mengucapkan banyak terimakasih kepada peserta yang telah mengikuti kegiatan dari <?= tgl_indo($data['tgl_mulai']) ?> sampai dengan <?= tgl_indo($data['tgl_selesai']) ?>, yang bertujuan untuk <?= $data['deskripsi'] ?> dan berharap ilmu yang didapat akan sangat berguna kedepannya</p>
        </div>
    </div>
</body>

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