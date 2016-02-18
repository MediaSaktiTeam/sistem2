<?php
include('../librari/inc.koneksi.php');
?>
<?php
$id = $_GET['id'];
$query = mysql_query("select * from tbl_jurusan where kode_jurusan='$id'") or die(mysql_error());
$data = mysql_fetch_array($query);
?>
''
<div class="col-lg-12 col-md-6 ">
<!-- START PANEL -->
<div class="panel panel-transparent">
<div class="panel-body">
<div align="center"><span class="style2"> EDIT JURUSAN </span></div>
<br />
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="table_isi">
  <tr>
    <td><form method="post" enctype="multipart/form-data" name="upload" id="upload">
      <table width="100%" border="0" cellpadding="2" cellspacing="2" class="upload">
      <input type="hidden" name="id" value="<?php echo $id; ?>" />
          <tr>
          <td width="17%"><div align="Left"><strong >Nama Jurusan</strong></div></td>
          <td width="83%"><input value="<?php echo $data['nm_jurusan'];  ?>" name="nm_jurusan" type="text" id="nm_siswa" size="40" style="background-color:#CCCCCC"/></td>
        </tr>   

    <tr>
        <td valign="top">&nbsp;</td>
          <td>
            <input name="tambah" type="submit" class="buttonbrows" id="tambah" value="Tambah" style="font-weight: bold; color:#CCCCCC; border:#E8C48B 1px outset; background-color:#666666; padding-bottom: 4px; width: 100px; height: 40px;"/>
            <input name="reset" type="reset" class="buttonbrows" id="reset" value="Reset" style="font-weight: bold; color:#CCCCCC; border:#E8C48B 1px outset; background-color:#666666; padding-bottom: 4px; width: 100px; height: 40px;"/></td>
        </tr>
        
      </table>
        </form>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</div>
</div>

<?php
if (isset($_POST['tambah'])){

$nm_jurusan=$_POST['nm_jurusan'];

/* verivikasi input upload data katalog */
$add=mysql_query("update tbl_jurusan set nm_jurusan='$nm_jurusan' where kode_jurusan='$id' "); 
}  
if ($add) {
  // header('location:kios_home.php?page=produk');
  echo "<meta http-equiv='refresh' content='0; url=?page=jurusan'>";

}
?>