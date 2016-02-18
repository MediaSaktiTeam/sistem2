<?php
include('../librari/inc.koneksi.php');

$id = $_GET['id'];

$query = mysql_query("delete from tbl_nilai_prakerin where id_nilai='$id'") or die(mysql_error());

if ($query) {

    header('location:admin.php?page=nilai_prakerin');
}
?>