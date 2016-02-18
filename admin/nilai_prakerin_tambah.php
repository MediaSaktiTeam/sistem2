<?php
include('../librari/inc.koneksi.php');
?>
<div class="col-lg-12 col-md-6 ">
<!-- START PANEL -->
<div class="panel panel-transparent">
<div class="panel-body">
<div align="center"><span class="style2"> INPUT NILAI PRAKERIN </span></div>
<br />
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="table_isi">
  <tr>
    <td><form method="post" enctype="multipart/form-data" name="upload" id="upload">
      <table width="100%" border="0" cellpadding="2" cellspacing="2" class="upload">
      <input type="hidden" name="id" value="<?php echo $id; ?>" />
          <tr>
          <td width="17%"><div align="Left"><strong >ID Prakerin</strong></div></td>
          <td width="83%"><input name="id_prakerin" type="text" id="id_prakerin" size="40" style="background-color:#CCCCCC"/></td>
        </tr> 
        <tr>
          <td width="17%"><div align="Left"><strong >Nilai</strong></div></td>
          <td width="83%"><input name="nilai" type="text" id="nilai" size="40" style="background-color:#CCCCCC"/></td>
        </tr> 

         <tr>
          <td width="17%"><div align="Left" ><strong >Keterangan</strong></div></td>
          <td width="83%">
       <select name="keterangan" id="keterangan" style="background-color:#CCCCCC;">
              <option value="" selected="selected">--PILIH--</option>
              <option value="Lulus" >Lulus</option>
              <option value="Tidak Lulus" >Tidak Lulus</option>
        </select>
       </td>
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
$id_prakerin=$_POST['id_prakerin'];
$nilai=$_POST['nilai'];
$keterangan=$_POST['keterangan'];

/* verivikasi input upload data katalog */
$add=mysql_query("INSERT INTO  tbl_nilai_prakerin (id_prakerin, nilai, keterangan) values ('$id_prakerin', $nilai', '$keterangan' )"); 
}  
if ($add) {
  echo "<meta http-equiv='refresh' content='0; url=?page=nilai_prakerin'>";

}
?>