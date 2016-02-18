<?php
ob_start();
session_start();
if(isset($_SESSION['username']))
{
  header("location:admin.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../assets/bootstrap/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/bootstrap/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan Masuk</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                               <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Masuk</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../assets/bootstrap/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../assets/bootstrap/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../assets/bootstrap/dist/js/sb-admin-2.js"></script>

</body>

</html>


<?php
include ("../librari/inc.koneksi.php");
include ("../librari/cek_sesi.php");
$user = $_POST['username'];
$pass = $_POST['password'];
$pass_md5 = md5($pass);
$login = $_POST['login'];

$cari = mysql_query("select * from tbl_users where username='$user' and password='$pass_md5'");
$periksa = mysql_num_rows($cari);
$r=mysql_fetch_array($cari);
if(isset($login))
{   
  if($periksa == 1)
    {

  $_SESSION['username'] = $r['username'];
  $_SESSION['hak_akses'] = $r['hak_akses'];
  $_SESSION['password'] = $r['password'];
  $_SESSION['aktif'] = true;
    
     echo "<script> 
             alert('Anda Berhasil Login... $user !'); 
             document.location = 'admin.php';  
           </script>";
      }
    else
      {
       echo "<script> 
             alert('Username atau Password anda salah $user ...!'); 
             document.location = 'index.php';  
           </script>";
    }
}
ob_end_flush();
?>