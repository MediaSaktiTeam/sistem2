<?php
include('../librari/inc.koneksi.php');
?>
<?php
$id = $_GET['id'];
$query = mysql_query("select * from tbl_users where id='$id'") or die(mysql_error());
$data = mysql_fetch_array($query);
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
														<input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" required>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="form-group">
														<label>Password</label>
														<input type="text" class="form-control" name="password" value="<?php echo $data['password']; ?>" required>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group ">
														<label>Nama</label>
														<input class="form-control" name="hak_akses" type="text" value="<?php echo $data['nama']; ?>" required>
													</div>
											</div>
											<div class="clearfix"></div>
											<br>
										<button class="btn btn-primary" type="submit" name="submit">Update</button>										
									</div>
								</div>
								<!-- END PANEL -->
							</div>
<?php
//tangkap data dari form
if (isset($_POST['submit'])){
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];

//update data di database sesuai user_id
$query = mysql_query("update tbl_users set username='$username', password=md5('$password'), nama='$nama' where id='$id'") or die(mysql_error());

if ($query) {
   echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
}
}
?>