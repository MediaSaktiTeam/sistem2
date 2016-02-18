<?php
ob_start();
// cek session user
include ("inc.koneksi.php");
session_start();
$_SESSION ["user_aktif"] = $user_aktif;
if (!$_SESSION['aktif']) {
$info_login = "User: <strong>Guest</strong> | Anda Belum Login";
$link_login = "?page=periksa.html";
} else {
$info_login = "&raquo; User: <strong>$user_aktif</strong> | <a href=\"?page=profil_mem.html\">&raquo; Profil Anda</a>";
$link_login = "";
}
if ($memuser=="logout") {
unset ($_SESSION["aktif"]);
$info_login = "<strong>Anda telah logout.</strong>";
$link_login = "?page=login.html";
}
ob_end_flush();
?> 