<?php
require '../../config/config.php';
include '../../config/koneksi.php';

include '../../templates/head.php';
include '../../templates/navbar.php';
include '../../templates/sidebar.php';

?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Biodata Masyarakat</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <?php if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') { ?>
            <div class="alert alert-success success-alert" role="alert">
              <i class="fa fa-check"> <?= $_SESSION['pesan']; ?></i>
            </div>
          <?php }
          $_SESSION['pesan'] = ''; ?>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title float-right">
                <a href="edit" class="btn btn-success"><i class="fa fa-edit mr-1"></i>Update Biodata</a>
                <!-- <a href="print?id=<?= $data['id_masyarakat']; ?>" class="btn btn-primary" target="blank"><i class="fa fa-print mr-1"></i>Print Biodata</a> -->
              </h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <!-- ./col -->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="fas fa-user"></i>
                        Biodata PNS
                        <?php
                        $data = $koneksi->query("SELECT * FROM nominatif_pegawai WHERE id_user = '$_SESSION[id_user]'")->fetch_array();

                        ?>
                      </h3>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                      <dl class="row">
                        <dt class="col-sm-4">NIK/NIP </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['nip']; ?></dd>
                        <dt class="col-sm-4">Nama </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['nama_pegawai']; ?></dd>
                        <dt class="col-sm-4">Tempat Lahir </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['tempat_lahir']; ?></dd>
                        <dt class="col-sm-4">Tanggal Lahir </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['tanggal_lahir']; ?></dd>
                        <dt class="col-sm-4">Jenis Kelamin</dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['jk']; ?></dd>
                        <dt class="col-sm-4">Pangkat Golongan </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['pangkat_gol'] . "/ TMT : " . $data['pangkat_tmt']; ?></dd>
                        <dt class="col-sm-4">Jabatan Struktural </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['jabatan_struktural'] . "/ TMT : " . $data['jabatan_tmt']; ?></dd>
                        <dt class="col-sm-4">SK Penempatan </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['no_sk_penempatan']; ?></dd>
                        <dt class="col-sm-4">Agama</dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['agama']; ?></dd>
                        <dt class="col-sm-4">Pendidikan Umum </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['pendidikan_umum'] . "/ TMT : " . $data['pendidikan_tmt'];  ?></dd>

                      </dl>
                    </div>

                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <!-- <div class="col-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-image"></i>
                  Foto
                </h3>
              </div> 

              <div class="card-body">
                
                  <img style="text-align: center;" width="250px" height="300px" src="<?= base_url() ?>/fotomhs/<?= $data['foto'] ?>">
                
              </div> 

            </div>
          </div> -->
                <!-- ./col-->

              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>

</div>

<?php
include '../../templates/footer.php';
include_once '../../templates/script.php';
?>