<aside class="main-sidebar sidebar-dark-green elevation-2">
  <!-- dark-primary  -->
  <!-- Brand Logo -->
  <a href="#" class="brand-link text-center">
    <img src="<?= base_url() ?>/assets/dist/img/kpu_logo.png" style="width: 50px; justify-content: center; margin: auto; " alt="#" class="" style="opacity: .8"><br>
    <span class="brand-text font-weight-light"><b>Komisi Pemilihan Umum <br> HSS</b></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>/assets/dist/img/avatar6.png" class="img-circle elevation-1" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <i>
            <?php
            if ($_SESSION['role'] == "Administrator") {
              echo "Administrator";
            } elseif ($_SESSION['role'] == "PNS") {
              echo $_SESSION['nama_user'];
            }
            ?>
          </i>
        </a>
      </div>
    </div>




    <?php if ($_SESSION['role'] == "Administrator") { ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('admin/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/user') ?>" class="nav-link">
              <i class="fas fa-user nav-icon"></i>
              <p>User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/komisioner') ?>" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>Data Komisioner</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/pns') ?>" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>Nominatif PNS</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/ppnpn') ?>" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>Nominatif PPNPN</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/rekappns') ?>" class="nav-link">
              <i class="fas fa-file-alt nav-icon"></i>
              <p>Rekap Nominatif PNS</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/rekapppnpn') ?>" class="nav-link">
              <i class="fas fa-file-alt nav-icon"></i>
              <p>Rekap Nominatif PPNPN</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/kegiatan') ?>" class="nav-link">
              <i class="fas fa-calendar-check nav-icon"></i>
              <p>Kegiatan</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/diklat') ?>" class="nav-link">
              <i class="fas fa-info nav-icon"></i>
              <p> Diklat </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->



    <?php } elseif ($_SESSION['role'] == "User") { ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('masyarakat/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-edit"></i>
              <p>
                Profil
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('masyarakat/biodata') ?>" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Biodata
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('masyarakat/biodata/ubahpw') ?>" class="nav-link">
                  <i class="nav-icon fas fa-lock"></i>
                  <p>
                    Ganti Password
                  </p>
                </a>
              </li>
            </ul>
          </li>


          <?php
          $data = $koneksi->query("SELECT * FROM masyarakat WHERE id_masyarakat = '$_SESSION[id_masyarakat]'")->fetch_array();
          if ($data['status'] == 'Tidak Aktif' or $data['status'] ==  NULL) {
          } else {
          ?>
            <li class="nav-item">
              <a href="<?= base_url('masyarakat/pendaftaran') ?>" class="nav-link">
                <i class="nav-icon fas fa-address-card"></i>
                <p>
                  Pendaftaran/Pengajuan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('masyarakat/pencarikerja') ?>" class="nav-link">
                <i class="nav-icon fas fa-search"></i>
                <p>
                  Pencari Kerja
                </p>
              </a>
            </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->

    <?php } elseif ($_SESSION['role'] == "PNS") { ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('pns/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?= base_url('pns/biodata') ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Biodata Pegawai
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('pns/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-reply"></i>
              <p>
                Kembali
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    <?php } ?>
  </div>
  <!-- /.sidebar -->
</aside>