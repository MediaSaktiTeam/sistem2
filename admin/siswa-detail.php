<?
include"../librari/inc.koneksi.php";
$idsiswa= $_GET['idsiswa'];
$show_query=mysql_query("select * from tbl_siswa where kode_siswa='$idsiswa'");
$show_detail=mysql_fetch_array($show_query);
$idsiswa="$show_detail[kode_guru]";
$nm_siswa="$show_detail[nm_siswa]";
$nis="$show_detail[nm_siswa]";
$jenkel="$show_detail[jenkel]";
$angkatan="$show_detail[angkatan]";
$nik="$show_detail[nik]";
$nisn="$show_detail[nisn]";
$tempat_lhr="$show_detail[tempat_lhr]";
$tgl_lhr="$show_detail[tgl_lhr]";
$umur="$show_detail[umur]";
$agama="$show_detail[agama]";
$alamat="$show_detail[alamat]";
$jenis_tinggal="$show_detail[jenis_tinggal]";
$status="$show_detail[status]";
$nm_sekolah="$show_detail[nm_sekolah]";
$gambar="$show_detail[gambar]";
?>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-size: 12px;
}
-->
</style>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
     
      <tr>
        <td class="buku"><table width="100%" border="0" cellpadding="3" cellspacing="2">
          
          <tr>
            <td height="30" colspan="3"><div align="center" class="judul" style="font-size:18px"><strong><?echo"$nama";?></strong></div><br /></td>
          </tr>
          <tr>
            
            <td width="82%" valign="top"><div align="justify" style="padding-right:15px; border-bottom:#999999 1px solid;">
			
              Nama User : <strong><?echo"$nm_siswa";?></strong><br />
              NIS : <strong><?echo"$nis";?></strong><br />
              Jenis Kelamin : <strong><?echo"$jenkel";?></strong><br />
              Angkatan : <strong><?echo"$angkatan";?></strong><br />
              NIK : <strong><?echo"$nik";?></strong><br />
              NISN : <strong><?echo"$nisn";?></strong><br />
              Tempat Lahir : <strong><?echo"$tempat_lhr";?></strong><br />
              Tanggal Lahir : <strong><?echo"$tgl_lhr";?></strong><br />
              Umur : <strong><?echo"$umur";?></strong><br />
              Agama : <strong><?echo"$agama";?></strong><br />
              Alamat : <strong><?echo"$alamat";?></strong><br />
              Jenis Tinggal : <strong><?echo"$jenis_tinggal";?></strong><br />
              Status : <strong><?echo"$status";?></strong><br />
              Nama Sekolah : <strong><?echo"$nm_sekolah";?></strong><br />
       
                <br />
            </div>       
            </td>
          </tr>
		  <tr><td align="center"><a href="javascript:history.back();">B A C K</a>	</td></tr>
		  

        </table></td>
     
      </tr>
    </table></td>
  </tr>
</table>