<?php
include('../librari/inc.koneksi.php');
?>
<div class="col-lg-12 col-md-6 ">
<!-- START PANEL -->
<div class="panel panel-transparent">
<div class="panel-body">
<div align="center"><span class="style2"> INPUT DATA GURU </span></div>
<br />
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="table_isi">
  <tr>
    <td><form method="post" enctype="multipart/form-data" name="upload" id="upload">
      <table width="100%" border="0" cellpadding="2" cellspacing="2" class="upload">
    	<input type="hidden" name="id" value="<?php echo $id; ?>" />
       
          <td width="17%"><div align="Left"><strong >Nama Guru</strong></div></td>
          <td width="83%"><input name="nama_guru" type="text" id="nama_guru" size="40" style="background-color:#CCCCCC"/></td>
        </tr>    
        
         <tr>
          <td width="17%"><div align="Left" ><strong >Jenis Kelamin</strong></div></td>
          <td width="83%">
       <select name="jenis_kelamin" id="jenis_kelamin" style="background-color:#CCCCCC;">
              <option value="" selected="selected">--PILIH--</option>
              <option value="L" >L</option>
              <option value="P" >P</option>
        </select>
       </td>
        </tr>


        <tr>
          <td width="17%"><div align="Left" ><strong >Agama</strong></div></td>
          <td width="83%">
       <select name="agama" id="agama" style="background-color:#CCCCCC;">
              <option value="" selected="selected">--PILIH--</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
        </select>
       </td>
        </tr>

        <tr>
          <td width="17%"><div align="Left" ><strong >Pendidikan Terakhir</strong></div></td>
          <td width="83%">
       <select name="pend_terakhir" id="pend_terakhir" style="background-color:#CCCCCC;">
              <option value="" selected="selected">--PILIH--</option>
              <option value="SMA">SMA</option>
              <option value="D4/S1">D4/S1</option>
              <option value="S2">S2</option>
              <option value="S3">S3</option>
        </select>
       </td>
        </tr>

		 <tr>
      <td width="17%"><div align="Left"><strong>Jurusan</strong></div></td>          
		  <td width="83%" style="color:#FFFFFF"><input name="jurusan" type="text" id="jurusan"  size="10" style="background-color:#CCCCCC"/>
		  </td>
		 </tr>

     <tr>
      <td width="17%"><div align="Left"><strong>Tempat Lahir</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="tempat_lahir" type="text" id="tempat_lahir"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

     <tr>
      <td width="17%"><div align="Left"><strong>Tanggal Lahir</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="tanggal_lahir" type="date" id="tanggal_lahir"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

     <tr>
      <td width="17%"><div align="Left"><strong>Umur</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="umur" type="text" id="umur"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

     <tr>
      <td width="17%"><div align="Left"><strong>NIP</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="nip" type="text" id="nip"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

     <tr>
      <td width="17%"><div align="Left"><strong>NUPTK</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="nuptk" type="text" id="nuptk"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

     <tr>
      <td width="17%"><div align="Left"><strong>Golongan</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="gol" type="text" id="gol"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

     <tr>
      <td width="17%"><div align="Left"><strong>Tugas Mengajar</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="tgs_mengajar" type="text" id="tgs_mengajar"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

     <tr>
      <td width="17%"><div align="Left"><strong>Tugas Tambahan</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="tgs_tambahan" type="text" id="tgs_tambahan"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

      <tr>
      <td width="17%"><div align="Left"><strong>Tahun Sertifikasi</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="thn_sertifikasi" type="text" id="thn_sertifikasi"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

     <tr>
          <td width="17%"><div align="Left" ><strong >Status Kepegawaian</strong></div></td>
          <td width="83%">
       <select name="stat_kepegawaian" id="stat_kepegawaian" style="background-color:#CCCCCC;">
              <option value="" selected="selected">--PILIH--</option>
              <option value="PNS" >PNS</option>
              <option value="CPNS" >CPNS</option>
              <option value="ADM.Honor" >ADM.Honor</option>
        </select>
       </td>
        </tr>

      <tr>
      <td width="17%"><div align="Left"><strong>NO.HP</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="no_hp" type="text" id="no_hp"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

      <tr>
      <td width="17%"><div align="Left"><strong>SK CPNS</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="sk_cpns" type="text" id="sk_cpns"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

      <tr>
      <td width="17%"><div align="Left"><strong>TMT CPNS</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="tmt_cpns" type="date" id="tmt_cpns"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

     <tr>
      <td width="17%"><div align="Left"><strong>SK PNS</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="sk_pns" type="text" id="sk_pns"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

      <tr>
      <td width="17%"><div align="Left"><strong>TMT PNS</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="tmt_pns" type="date" id="tmt_pns"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

     <tr>
      <td width="17%"><div align="Left"><strong>TMT GURU</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="tmt_guru" type="date" id="tmt_guru"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

     <tr>
      <td width="17%"><div align="Left"><strong>TMT DISEKOLAH</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="tmt_disekolah" type="date" id="tmt_disekolah"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

      <tr>
          <td width="17%"><div align="Left" ><strong >Status Perkawinan</strong></div></td>
          <td width="83%">
       <select name="stat_perkawinan" id="stat_perkawinan" style="background-color:#CCCCCC;">
              <option value="" selected="selected">--PILIH--</option>
              <option value="Menikah" >Menikah</option>
              <option value="Belum Menikah" >Belum Menikah</option>
        </select>
       </td>
        </tr>

      <tr>
      <td width="17%"><div align="Left"><strong>Nama Sekolah</strong></div></td>          
      <td width="83%" style="color:#FFFFFF"><input name="nm_sekolah" type="text" id="nm_sekolah"  size="10" style="background-color:#CCCCCC"/>
      </td>
     </tr>

     <tr>
          <td><div align="Left" class="style1" ><strong>Foto Guru</strong> </div></td>
          <td><input name="gambar" type="file" class="buttonbrows" id="gambar" size="30" style="background-color:#CCCCCC;"/></td>
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

$nama_guru=$_POST['nama_guru'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$pend_terakhir=$_POST['pend_terakhir'];
$jurusan=$_POST['jurusan'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$umur=$_POST['umur'];
$nip=$_POST['nip'];
$nuptk=$_POST['nuptk'];
$gol=$_POST['gol'];
$tgs_mengajar=$_POST['tgs_mengajar'];
$tgs_tambahan=$_POST['tgs_tambahan'];
$thn_sertifikasi=$_POST['thn_sertifikasi'];
$stat_kepegawaian=$_POST['stat_kepegawaian'];
$no_hp=$_POST['no_hp'];
$sk_cpns=$_POST['sk_cpns'];
$tmt_cpns=$_POST['tmt_cpns'];
$sk_pns=$_POST['sk_pns'];
$tmt_pns=$_POST['tmt_pns'];
$tmt_guru=$_POST['tmt_guru'];
$tmt_disekolah=$_POST['tmt_disekolah'];
$stat_perkawinan=$_POST['stat_perkawinan'];
$nm_sekolah=$_POST['nm_sekolah'];
$fileName = $_FILES['gambar']['name'];
move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$_FILES['gambar']['name']);
/* verivikasi input upload data katalog */
$add=mysql_query("insert into tbl_guru(nama_guru, jenis_kelamin, agama, pend_terakhir, jurusan, tempat_lahir, tanggal_lahir, umur, nip, nuptk, gol, tgs_mengajar, tgs_tambahan, thn_sertifikasi, stat_kepegawaian, no_hp, sk_cpns, tmt_cpns, sk_pns, tmt_pns, tmt_guru, tmt_disekolah, stat_perkawinan, nm_sekolah, gambar) values('$nama_guru', '$jenis_kelamin', '$agama', '$pend_terakhir', '$jurusan', '$tempat_lahir', '$tanggal_lahir', '$umur', '$nip', '$nuptk', '$gol', '$tgs_mengajar', '$tgs_tambahan', '$thn_sertifikasi', '$stat_kepegawaian', '$no_hp', '$sk_cpns', '$tmt_cpns', '$sk_pns', '$tmt_pns', '$tmt_guru', '$tmt_disekolah', '$stat_perkawinan', '$nm_sekolah', '$fileName')"); 
move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$_FILES['gambar']['name']);
}  
if ($add) {
  // header('location:kios_home.php?page=produk');
  echo "<meta http-equiv='refresh' content='0; url=?page=guru'>";

}
?>