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
            <font size="2">DATA KEGIATAN
            </font>
        </b></p>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead class="bg-red">
                        <tr align="center">
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Tahun</th>
                            <th>Tanggal</th>
                            <th>Lokasi</th>
                            <th>Tujuan</th>
                            <th>Akomodasi</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: white">
                        <?php
                        $no = 1;
                        $data = $koneksi->query("SELECT * FROM kegiatan ORDER BY id_kegiatan DESC
                                                ");
                        while ($row = $data->fetch_array()) {
                        ?>
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td><?= $row['nama_kegiatan'] ?></td>
                                <td><?= $row['tahun'] ?></td>
                                <td><?= $row['tgl_mulai'] . " S/d " . $row['tgl_selesai'] ?></td>
                                <td><?= $row['luar_dalam'] . "di :" . $row['lokasi'] ?></td>
                                <td align="center"><b><?= $row['deskripsi'] ?></b></td>
                                <td><?= $row['akomodasi'] ?></td>
                            </tr>
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

<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Laki-Laki", "Perempuan"],
            datasets: [{
                label: '',
                data: [
                    <?php
                    $jumlahlaki = $koneksi->query("SELECT * FROM nominatif_pegawai WHERE jk = 'Laki-laki'");
                    echo mysqli_num_rows($jumlahlaki);
                    ?>,
                    <?php
                    $jumlahpr = $koneksi->query("SELECT * FROM nominatif_pegawai WHERE jk = 'Perempuan'");
                    echo mysqli_num_rows($jumlahpr);
                    ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    var ctx = document.getElementById("myCharts").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["SD", "SMP", "SMA", "DIII", "DIV", "S1", "S2", "S3"],
            datasets: [{
                label: '',
                data: [
                    <?php
                    $jumlahsd = $koneksi->query("SELECT * FROM nominatif_pegawai WHERE pendidikan_umum = 'SD'");
                    echo mysqli_num_rows($jumlahsd);
                    ?>,
                    <?php
                    $jumlahsmp = $koneksi->query("SELECT * FROM nominatif_pegawai WHERE pendidikan_umum = 'SMP'");
                    echo mysqli_num_rows($jumlahsmp);
                    ?>,
                    <?php
                    $jumlahsma = $koneksi->query("SELECT * FROM nominatif_pegawai WHERE pendidikan_umum = 'SMA'");
                    echo mysqli_num_rows($jumlahsma);
                    ?>,
                    <?php
                    $jumlahdiii = $koneksi->query("SELECT * FROM nominatif_pegawai WHERE pendidikan_umum = 'DIII'");
                    echo mysqli_num_rows($jumlahdiii);
                    ?>,
                    <?php
                    $jumlahdiv = $koneksi->query("SELECT * FROM nominatif_pegawai WHERE pendidikan_umum = 'DIV'");
                    echo mysqli_num_rows($jumlahdiv);
                    ?>,
                    <?php
                    $jumlahs1 = $koneksi->query("SELECT * FROM nominatif_pegawai WHERE pendidikan_umum = 'S1'");
                    echo mysqli_num_rows($jumlahs1);
                    ?>,
                    <?php
                    $jumlahs2 = $koneksi->query("SELECT * FROM nominatif_pegawai WHERE pendidikan_umum = 'S2'");
                    echo mysqli_num_rows($jumlahs2);
                    ?>,
                    <?php
                    $jumlahs3 = $koneksi->query("SELECT * FROM nominatif_pegawai WHERE pendidikan_umum = 'S3'");
                    echo mysqli_num_rows($jumlahs3);
                    ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>