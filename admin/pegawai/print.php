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

?>

<script type="text/javascript">
    window.print();
</script>

<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN DATA </title>
</head>

<body>

    <p align="center"><b>
            <img src="<?= base_url('assets/dist/img/kpu_logo.png') ?>" align="left" width="100" height="100">
            <font size="8">KOMISI PEMILIHAN UMUM</font>
            <br>
            <font size="5">KABUPATEN HULU SUNGAI SELATAN
            </font>
            <br>
            <br>
            <hr size="1px" color="black">
        </b></p>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead class="bg-orange">
                        <tr align="center">
                            <th>No</th>
                            <th>Nama </th>
                            <th>Jabatan </th>
                            <th>Alamat </th>
                            <th>Email </th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    $data = $koneksi->query("SELECT * FROM user WHERE jabatan != 'Operator'");
                    while ($row = $data->fetch_array()) {
                    ?>
                        <tbody style="background-color: white">
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td><?= $row['nama_user'] ?></td>
                                <td><?= $row['jabatan'] ?></td>
                                <td><?= $row['alamat'] ?></td>
                                <td><?= $row['email'] ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>

    </div>

    </div>
    <div style="text-align: center; display: inline-block; float: right;">
        <h5>
            Kandangan , <?php echo tgl_indo(date('Y-m-d')); ?><br>
            Ketua KPU
            <br>
            <br>
            <br>
            ...........
        </h5>

    </div>

</body>

</html>

<script>
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
</script>