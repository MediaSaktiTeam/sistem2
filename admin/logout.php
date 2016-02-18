<?php
session_start(); // memulai session
session_destroy();
header("location:index.php");
 // mengambalikan ke form_login.php
?>