<?php
include('../librari/inc.koneksi.php');

$id = $_GET['id'];

$query = mysql_query("delete from tbl_siswa where kode_siswa='$id'") or die(mysql_error());

if ($query) {

    header('location:admin.php?page=siswa');
}
?>