<?php
include('../librari/inc.koneksi.php');

$id = $_GET['id'];

$query = mysql_query("delete from tbl_kelas where kode_kelas='$id'") or die(mysql_error());

if ($query) {

    header('location:admin.php?page=kelas');
}
?>