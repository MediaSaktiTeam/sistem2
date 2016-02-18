<?php
include('../librari/inc.koneksi.php');
?>
<?php
$id = $_GET['id'];
$query = mysql_query("select * from tbl_siswa where kode_siswa='$id' ") or die(mysql_error());
$data = mysql_fetch_array($query);
?>
<div class="col-lg-12 col-md-6 ">
<!-- START PANEL -->
<div class="panel panel-transparent">
<div class="panel-body">
<div align="center"><span class="style2"> EDIT DATA SISWA </span></div>
<br />
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="table_isi">
  <tr>
    <td><form method="post" enctype="multipart/form-data" name="upload" id="upload">
      <table width="100%" border="0" cellpadding="2" cellspacing="2" class="upload">
    	<input type="hidden" name="id" value="<?php echo $id; ?>" />
          <tr>
          <td width="17%"><div align="Left"><strong >Nama Siswa</strong></div></td>
          <td width="83%"><input value="<?php echo $data['nm_siswa'];  ?>" name="nm_siswa" type="text" id="nm_siswa" size="40" style="background-color:#CCCCCC"/></td>
        </tr>   

         <tr>
          <td width="17%"><div align="Left"><strong >NIS</strong></div></td>
          <td width="83%"><input value="<?php echo $data['nis'];  ?>" name="nis" type="text" id="nis" size="40" style="background-color:#CCCCCC"/></td>
        </tr>  
        
         <tr>
          <td width="17%"><div align="Left" ><strong >Jenis Kelamin</strong></div></td>
          <td width="83%">
       <select  name="jenkel" id="jenkel" style="background-color:#CCCCCC;">
              <option value="" selected="selected">--PILIH--</option>
              <option value="L" >L</option>
              <option value="P" >P</option>
        </select>
       </td>
        </tr>

         <tr>
          <td width="17%"><div align="Left"><strong >Angkatan</strong></div></td>
          <td width="83%"><input value="<?php echo $data['angkatan'];  ?>" name="angkatan" type="text" id="angkatan" size="40" style="background-color:#CCCCCC"/></td>
        </tr> 

         <tr>
          <td width="17%"><div align="Left"><strong >NIK</strong></div></td>
          <td width="83%"><input value="<?php echo $data['nik'];  ?>" name="nik" type="text" id="nik" size="40" style="background-color:#CCCCCC"/></td>
        </tr> 

         <tr>
          <td width="17%"><div align="Left"><strong >NISN</strong></div></td>
          <td width="83%"><input value="<?php echo $data['nisn'];  ?>" name="nisn" type="text" id="nisn" size="40" style="background-color:#CCCCCC"/></td>
        </tr> 

         <tr>
      <td width="17%"><div align="Left"><strong>Tempat Lahir</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input value="<?php echo $data['tempat_lhr'];  ?>" name="tempat_lhr" type="text" id="tempat_lhr"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

     <tr>
      <td width="17%"><div align="Left"><strong>Tanggal Lahir</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input value="<?php echo $data['tgl_lhr'];  ?>" name="tgl_lhr" type="date" id="tgl_lhr"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

      <tr>
          <td width="17%"><div align="Left"><strong >Umur</strong></div></td>
          <td width="83%"><input value="<?php echo $data['umur'];  ?>" name="umur" type="text" id="umur" size="40" style="background-color:#CCCCCC"/></td>
        </tr> 

        <tr>
          <td width="17%"><div align="Left" ><strong >Agama</strong></div></td>
          <td width="83%">
       <select  name="agama" id="agama" style="background-color:#CCCCCC;">
              <option value="" selected="selected">--PILIH--</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
        </select>
       </td>
        </tr>

         <tr>
      <td width="17%"><div align="Left"><strong>Alamat</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input value="<?php echo $data['alamat'];  ?>" name="alamat" type="text" id="alamat"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

      <tr>
          <td width="17%"><div align="Left" ><strong >Jenis Tinggal</strong></div></td>
          <td width="83%">
       <select name="jenis_tinggal" id="jenis_tinggal" style="background-color:#CCCCCC;">
              <option value="" selected="selected">--PILIH--</option>
              <option value="Bersama Orangtua">Bersama Orangtua</option>
              <option value="Wali">Wali</option>
              <option value="Lainnya">Lainnya</option>
        </select>
       </td>
        </tr>

      <tr>
      <td width="17%"><div align="Left"><strong>Status</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input value="<?php echo $data['status'];  ?>" name="status" type="text" id="status"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

		
      <tr>
      <td width="17%"><div align="Left"><strong>Nama Sekolah</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input value="<?php echo $data['nm_sekolah'];  ?>" name="nm_sekolah" type="text" id="nm_sekolah"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

     <tr>
          <td><div align="Left" class="style1" ><strong>Foto Siswa</strong> </div></td>
          <td><input value="<?php echo $data['gambar'];  ?>" name="gambar" type="file" class="buttonbrows" id="gambar" size="30" style="background-color:#CCCCCC;"/></td>
        </tr>

    <tr>
        <td valign="top">&nbsp;</td>
          <td>
            <input name="tambah" type="submit" class="buttonbrows" id="tambah" value="Tambah" style="font-weight: bold; color:#CCCCCC; border:#E8C48B 1px outset;	background-color:#666666; padding-bottom: 4px; width: 100px; height: 40px;"/>
            <input name="reset" type="reset" class="buttonbrows" id="reset" value="Reset" style="font-weight: bold; color:#CCCCCC; border:#E8C48B 1px outset;	background-color:#666666; padding-bottom: 4px; width: 100px; height: 40px;"/></td>
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
if (isset($_POST['tambah'])) {
	$fileName = $_files['gambar']['name'];
	move_uploaded_file($_files['gambar']['tmp_name'], "img/".$_files['gambar']['name']);
}
 ?>
<?php
if (isset($_POST['tambah'])){

$nm_siswa=$_POST['nm_siswa'];
$nis=$_POST['nis'];
$jenkel=$_POST['jenkel'];
$angkatan=$_POST['angkatan'];
$nik=$_POST['nik'];
$nisn=$_POST['nisn'];
$tempat_lhr=$_POST['tempat_lhr'];
$tgl_lhr=$_POST['tgl_lhr'];
$umur=$_POST['umur'];
$agama=$_POST['agama'];
$alamat=$_POST['alamat'];
$jenis_tinggal=$_POST['jenis_tinggal'];
$status=$_POST['status'];
$nm_sekolah=$_POST['nm_sekolah'];
$fileName = $_FILES['gambar']['name'];
move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$_FILES['gambar']['name']);
/* verivikasi input upload data katalog */
$add=mysql_query("update tbl_siswa set nm_siswa='$nm_siswa', nis='$nis', jenkel='$jenkel', angkatan='$angkatan', nik='$nik', nisn='$nisn', tempat_lhr='$tempat_lhr', tgl_lhr='$tgl_lhr', umur='$umur', agama='$agama', alamat='$alamat', jenis_tinggal='$jenis_tinggal', status='$status', nm_sekolah='$nm_sekolah', gambar='$fileName' where kode_siswa='$id'"); 
move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$_FILES['gambar']['name']);
}  
if ($add) {
  // header('location:kios_home.php?page=produk');
  echo "<meta http-equiv='refresh' content='0; url=?page=siswa'>";

}
?>