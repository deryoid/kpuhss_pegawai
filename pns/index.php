<?php
require '../config/config.php';
require '../config/koneksi.php';
?>
<!DOCTYPE html>
<html>

<?php
include '../templates/head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php
    include '../templates/navbar.php';
    ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php
    include '../templates/sidebar.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div>

            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard </li>
              </ol>
            </div>

          </div>
        </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->


          <div class="info-box bg-red">
            <div class="info-box-content">
              <h3><span class="info-box-text text-center">KPU Hulu Sungai Selatan</span></h3>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h5 align="center">Jadwal Diklat</h5>
                </div>
                <a href="<?= base_url('pns/diklat') ?>" class="small-box-footer">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h5 align="center">Diklat Luar Kota</h5>
                </div>
                <a href="<?= base_url('pns/diklatluarkota') ?>" class="small-box-footer">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h5 align="center">Diklat Dalam Kota</h5>
                </div>
                <a href="<?= base_url('pns/diklatdalamkota') ?>" class="small-box-footer">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h5 align="center">Surat Tugas/Diklat yang diikuti</h5>
                </div>
                <a href="<?= base_url('pns/diklatdiikuti') ?>" class="small-box-footer">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>

          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h5 align="center">Diklat Selesai Diikuti</h5>
                </div>
                <a href="<?= base_url('pns/diklatselesai') ?>" class="small-box-footer">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h5 align="center">Sertifikat Diklat</h5>
                </div>
                <a href="<?= base_url('pns/sertifikatdiklat') ?>" class="small-box-footer">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>

          <!-- /.row -->

        </div><!-- /.container-fluid -->
        <hr>
        <div class="container-fluid">
          <h5 align="center">Kalender Jadwal Kegiatan</h5>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <div id="calendar"></div>
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
    <?php
    include '../templates/footer.php';
    ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- Script -->
  <?php
  include '../templates/script.php';
  ?>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: [
          <?php

          $data = mysqli_query($koneksi, "SELECT * FROM diklat AS d
                                  LEFT JOIN user AS u ON d.id_user = u.id_user
                                  LEFT JOIN nominatif_pegawai AS np ON u.id_user = np.id_user
                                  LEFT JOIN kegiatan AS k ON d.id_kegiatan = k.id_kegiatan
                                  WHERE d.id_user = '$_SESSION[id_user]' AND k.tahun = '2023'");
          //melakukan looping
          while ($d = mysqli_fetch_array($data)) {
          ?> {
              title: '<?php echo $d['nama_kegiatan']; ?>',
              start: '<?php echo $d['tgl_mulai']; ?>',
              end: '<?php echo $d['tgl_selesai']; ?>'
            },
          <?php } ?>
        ],
        selectOverlap: function(event) {
          return event.rendering === 'background';
        }
      });

      calendar.render();
    });
  </script>
</body>

</html>