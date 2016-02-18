<?php
include('../librari/inc.koneksi.php');
?>
<div class="col-lg-12 col-md-6 ">
<!-- START PANEL -->
<div class="panel panel-transparent">
<div class="panel-body">
<div align="center"><span class="style2"> INPUT DATA PRAKERIN </span></div>
<br />
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="table_isi">
  <tr>
    <td><form method="post" enctype="multipart/form-data" name="upload" id="upload">
      <table width="100%" border="0" cellpadding="2" cellspacing="2" class="upload">
      <input type="hidden" name="id" value="<?php echo $id; ?>" />
          <tr>
          <td width="17%"><div align="Left"><strong >Nama Kode Siswa</strong></div></td>
          <td width="83%"><input name="kode_siswa" type="text" id="kode_siswa" size="40" style="background-color:#CCCCCC"/></td>
        </tr>

         <tr>
          <td width="17%"><div align="Left"><strong >Kode Jurusan</strong></div></td>
          <td width="83%"><input name="kode_jurusan" type="text" id="kode_jurusan" size="40" style="background-color:#CCCCCC"/></td>
        </tr>

         <tr>
          <td width="17%"><div align="Left"><strong >Kode Kelas</strong></div></td>
          <td width="83%"><input name="kode_kelas" type="text" id="kode_kelas" size="40" style="background-color:#CCCCCC"/></td>
        </tr>   

         <tr>
          <td width="17%"><div align="Left"><strong >Lokasi Prakerin</strong></div></td>
          <td width="83%"><input name="lokasi_prakerin" type="text" id="lokasi_prakerin" size="40" style="background-color:#CCCCCC"/></td>
        </tr>

         <tr>
          <td width="17%"><div align="Left"><strong >Alamat Lokasi</strong></div></td>
          <td width="83%"><input name="alamat_lokasi" type="text" id="alamat_lokasi" size="40" style="background-color:#CCCCCC"/></td>
        </tr>

        <tr>
          <td width="17%"><div align="Left"><strong >No.Telp</strong></div></td>
          <td width="83%"><input name="notelp" type="text" id="notelp" size="40" style="background-color:#CCCCCC"/></td>
        </tr>
        
         <tr>
          <td width="17%"><div align="Left"><strong >Kode Guru</strong></div></td>
          <td width="83%"><input name="kode_guru" type="text" id="kode_guru" size="40" style="background-color:#CCCCCC"/></td>
        </tr>

         <tr>
          <td width="17%"><div align="Left"><strong >Periode</strong></div></td>
          <td width="83%"><input name="periode" type="text" id="periode" size="40" style="background-color:#CCCCCC"/></td>
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
$kode_siswa=$_POST['kode_siswa'];
$kode_jurusan=$_POST['kode_jurusan'];
$kode_kelas=$_POST['kode_kelas'];
$lokasi_prakerin=$_POST['lokasi_prakerin'];
$alamat_lokasi=$_POST['alamat_lokasi'];
$notelp=$_POST['notelp'];
$kode_guru=$_POST['kode_guru'];
$periode=$_POST['periode'];



/* verivikasi input upload data katalog */
$add=mysql_query("INSERT INTO  tbl_prakerin(kode_siswa, kode_jurusan, kode_kelas, lokasi_prakerin, alamat_lokasi, notelp, kode_guru, periode) values ('$kode_siswa', '$kode_jurusan', '$kode_kelas', '$lokasi_prakerin', '$alamat_lokasi', '$notelp', '$kode_guru', '$periode' )"); 
}  
if ($add) {
  echo "<meta http-equiv='refresh' content='0; url=?page=prakerin'>";

}
?>