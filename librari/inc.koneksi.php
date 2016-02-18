<?php
# Konek ke Web Server Lokal
$myHost	= "localhost";
$myUser	= "root";
$myPass	= "";
$myDbs	= "sistem";

# Konek ke Web Server Lokal
$koneksidb	= mysql_connect($myHost, $myUser, $myPass);
if (! $koneksidb) {
  echo "Failed Connection !";
}
date_default_timezone_set("Asia/Ujung_Pandang");
# Memilih database pd MySQL Server
mysql_select_db($myDbs) or die ("Database not Found !");
?>