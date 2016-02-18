<?php
include('../librari/inc.koneksi.php');

$id = $_GET['id'];

$query = mysql_query("delete from tbl_prakerin where id_prakerin='$id'") or die(mysql_error());

if ($query) {

    header('location:admin.php?page=prakerin');
}
?>