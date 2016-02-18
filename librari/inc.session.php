<?php
session_start();
if(! (($_SESSION['user_get']) && ($_SESSION['pass_get']))) 
{
	include "index.php?warn=try";
	exit;
}
?>