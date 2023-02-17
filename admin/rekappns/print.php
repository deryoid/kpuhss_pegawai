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
    // window.print();
</script>

<script type="text/javascript" src="<?= base_url() ?>/assets/dist/js/chartjs/Chart.js"></script>
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
            <font size="2">REKAP NOMINATIF PNS
            </font>
        </b></p>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead class="bg-red">
                        <tr align="center">
                            <th>No</th>
                            <th>Satuan Kerja</th>
                            <th>Sekretaris</th>
                            <th>Kasubbag</th>
                            <th>Jumlah Staff</th>
                            <th>Jumlah Pegawai</th>
                            <th>Laki - laki</th>
                            <th>Perempuan</th>
                            <th>DPK</th>
                            <th>Organik</th>
                            <th>SD</th>
                            <th>SMP</th>
                            <th>SMA</th>
                            <th>D1</th>
                            <th>D2</th>
                            <th>D3</th>
                            <th>D4</th>
                            <th>S1</th>
                            <th>S2</th>
                            <th>S3</th>
                            <th>Islam</th>
                            <th>Protestan</th>
                            <th>Katolik</th>
                            <th>Hindu</th>
                            <th>Budha</th>
                            <th>Khonghucu</th>
                            <th>Es III</th>
                            <th>Es IV</th>
                            <th>Ket Jabatan Kosong</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: white">
                        <?php
                        $no = 1;
                        $data = $koneksi->query("SELECT * FROM rekap_pns ORDER BY id_rekap_pns ASC");
                        while ($row = $data->fetch_array()) {
                        ?>
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td><?= $row['satker'] ?></td>
                                <td><?= $row['sekretaris'] ?></td>
                                <td><?= $row['kasubbag'] ?></td>
                                <td><?= $row['jumlah_staff'] ?></td>
                                <td><?= $row['jumlah_pegawai'] ?></td>
                                <td><?= $row['jk_lakilaki'] ?></td>
                                <td><?= $row['jk_perempuan'] ?></td>
                                <td><?= $row['jumlah_dpk'] ?></td>
                                <td><?= $row['jumlah_organik'] ?></td>
                                <td><?= $row['sd'] ?></td>
                                <td><?= $row['smp'] ?></td>
                                <td><?= $row['sma'] ?></td>
                                <td><?= $row['d1'] ?></td>
                                <td><?= $row['d2'] ?></td>
                                <td><?= $row['d3'] ?></td>
                                <td><?= $row['d4'] ?></td>
                                <td><?= $row['s1'] ?></td>
                                <td><?= $row['s2'] ?></td>
                                <td><?= $row['s3'] ?></td>
                                <td><?= $row['islam'] ?></td>
                                <td><?= $row['protestan'] ?></td>
                                <td><?= $row['katolik'] ?></td>
                                <td><?= $row['hindu'] ?></td>
                                <td><?= $row['budha'] ?></td>
                                <td><?= $row['khonghucu'] ?></td>
                                <td><?= $row['es3'] ?></td>
                                <td><?= $row['es4'] ?></td>
                                <td><?= $row['ket_jabatan_kosong'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <br>
                <br>
                <table width="100%">
                    <tr>
                        <th>
                            <h6>Jabatan</h6>
                            <div style="width: 500px;margin: 0px auto;">
                                <canvas id="chartJabatan"></canvas>
                            </div>
                        </th>
                        <th>
                            <h6>DPK & Organik</h6>
                            <div style="width: 500px;margin: 0px auto;">
                                <canvas id="chartDO"></canvas>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h6>Pendidikan</h6>
                            <div style="width: 500px;margin: 0px auto;">
                                <canvas id="chartPendidikan"></canvas>
                            </div>
                        </th>
                        <th>
                            <h6>Jenis Kelamin</h6>
                            <div style="width: 500px;margin: 0px auto;">
                                <canvas id="chartJK"></canvas>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h6>Agama</h6>
                            <div style="width: 500px;margin: 0px auto;">
                                <canvas id="chartAgama"></canvas>
                            </div>
                        </th>
                        <th>
                            <h6>Pangkat</h6>
                            <div style="width: 500px;margin: 0px auto;">
                                <canvas id="chartPangkat"></canvas>
                            </div>
                        </th>
                    </tr>
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
    var ctx = document.getElementById("chartJabatan").getContext('2d');
    var chartJabatan = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Sekretaris", "Kasubbag", "Staff", "Pegawai"],
            datasets: [{
                label: '',
                data: [
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['sekretaris'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['kasubbag'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['jumlah_staff'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['jumlah_pegawai'];
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

    var ctx = document.getElementById("chartJK").getContext('2d');
    var chartJK = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Laki-Laki", "Perempuan"],
            datasets: [{
                label: '',
                data: [
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['jk_lakilaki'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['jk_perempuan'];
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

    var ctx = document.getElementById("chartDO").getContext('2d');
    var chartDO = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["DPK", "Organik"],
            datasets: [{
                label: '',
                data: [
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['jumlah_dpk'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['jumlah_organik'];
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

    var ctx = document.getElementById("chartPendidikan").getContext('2d');
    var chartPendidikan = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["SD", "SMP", "SMA", "DI", "DII", "DIII", "DIV", "S1", "S2", "S3"],
            datasets: [{
                label: '',
                data: [
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['sd'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['smp'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['sma'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['d1'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['d2'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['d3'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['d4'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['s1'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['s2'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['s3'];
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

    var ctx = document.getElementById("chartAgama").getContext('2d');
    var chartAgama = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Islam", "Protestan", "Khatolik", "Hindu", "Budha", "Khonghucu"],
            datasets: [{
                label: '',
                data: [
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['islam'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['protestan'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['katolik'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['hindu'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['budha'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['khonghucu'];
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

    var ctx = document.getElementById("chartPangkat").getContext('2d');
    var chartPangkat = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Eselon III", "Eselon IV", "Jabatan Kosong"],
            datasets: [{
                label: '',
                data: [
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['es3'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['es4'];
                    ?>,
                    <?php
                    $data = $koneksi->query("SELECT * FROM rekap_pns")->fetch_array();
                    echo $data['ket_jabatan_kosong'];
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