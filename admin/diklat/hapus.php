<?php

require '../../config/config.php';
require '../../config/koneksi.php';


$id    = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM diklat WHERE id_diklat = '$id'");

session_start();
if ($hapus) {
   $_SESSION['pesan'] = "Data Berhasil Dihapus";
   echo "<script>window.location.replace('../diklat/');</script>";
}
