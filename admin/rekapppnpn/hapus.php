<?php

require '../../config/config.php';
require '../../config/koneksi.php';


$id    = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM rekap_ppnpn WHERE id_rekap_ppnpn = '$id'");

session_start();
if ($hapus) {
   $_SESSION['pesan'] = "Data Berhasil Dihapus";
   echo "<script>window.location.replace('../rekapppnpn/');</script>";
}
