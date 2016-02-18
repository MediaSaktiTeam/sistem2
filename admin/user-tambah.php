<?php
include('../librari/inc.koneksi.php');
?>
              <div class="col-lg-7 col-md-6 ">
                <!-- START PANEL -->
                <div class="panel panel-transparent">
                  <div class="panel-body">
                    <form id="form-personal" method="post" role="form">
                      <input type="hidden" name="id" value="<?php echo $id; ?>" />
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username"  required>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password" required>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama"  required>
                          </div>
                        </div>
                        
                      <div class="clearfix"></div>
                      <br>
                    <button class="btn btn-primary" type="submit" name="submit">Tambah</button>                   
                  </div>
                </div>
                <!-- END PANEL -->
              </div>
<?php
if (isset($_POST['submit'])){
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];

//tambah data di database sesuai user_id
$query = mysql_query("insert into tbl_users(username,password,nama) values('$username', md5('$password'), '$nama')") 
or die(mysql_error());
if ($query) {
    echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
}
}
?>


