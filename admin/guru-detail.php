<?
include"../librari/inc.koneksi.php";
$idguru= $_GET['idguru'];
$show_query=mysql_query("select * from tbl_guru where kode_guru='$idguru'");
$show_detail=mysql_fetch_array($show_query);
$idguru="$show_detail[kode_guru]";
$nama="$show_detail[nama_guru]";
$jenis="$show_detail[jenis_kelamin]";
$agama="$show_detail[agama]";
$pend_terakhir="$show_detail[pend_terakhir]";
$jurusan="$show_detail[jurusan]";
$tempat_lahir="$show_detail[tempat_lahir]";
$tanggal_lahir="$show_detail[tanggal_lahir]";
$umur="$show_detail[umur]";
$nip="$show_detail[nip]";
$nuptk="$show_detail[nuptk]";
$gol="$show_detail[gol]";
$tgs_mengajar="$show_detail[tgs_mengajar]";
$tgs_tambahan="$show_detail[tgs_tambahan]";
$thn_sertifikasi="$show_detail[thn_sertifikasi]";
$stat_kepegawaian="$show_detail[stat_kepegawaian]";
$no_hp="$show_detail[no_hp]";
$sk_cpns="$show_detail[sk_cpns]";
$tmt_cpns="$show_detail[tmt_cpns]";
$sk_pns="$show_detail[sk_pns]";
$tmt_pns="$show_detail[tmt_pns]";
$tmt_guru="$show_detail[tmt_guru]";
$tmt_disekolah="$show_detail[tmt_disekolah]";
$stat_perkawinan="$show_detail[stat_perkawinan]";
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
			
              Nama User : <strong><?echo"$nama";?></strong><br />
              Jenis Kelamin : <strong><?echo"$jenis";?></strong><br />
              Agama : <strong><?echo"$agama";?></strong><br />
              Pendidikan Terakhir: <strong><?echo"$pend_terakhir";?></strong><br />
              Jurusan: <strong><?echo"$jurusan";?></strong><br />
              Tempat Lahir: <strong><?echo"$tempat_lahir";?></strong><br />
              Tanggal Lahir: <strong><?echo"$tanggal_lahir";?></strong><br />
              Umur: <strong><?echo"$umur";?></strong><br />
              NIP: <strong><?echo"$nip";?></strong><br />
              NUPTK: <strong><?echo"$nuptk";?></strong><br />
              Golongan: <strong><?echo"$gol";?></strong><br />
              Tugas Mengajar: <strong><?echo"$tgs_mengajar";?></strong><br />
              Tugas Tambahan: <strong><?echo"$tgs_tambahan";?></strong><br />
              Tahun Sertifikasi: <strong><?echo"$thn_sertifikasi";?></strong><br />
              Status Kepegawaoam: <strong><?echo"$stat_kepegawaian";?></strong><br />
              No.HP: <strong><?echo"$no_hp";?></strong><br />
              SK CPNS: <strong><?echo"$sk_cpns";?></strong><br />
              TMT CPNS: <strong><?echo"$tmt_cpns";?></strong><br />
              SK PNS: <strong><?echo"$sk_pns";?></strong><br />
              TMT PNS: <strong><?echo"$tmt_pns";?></strong><br />
              TMT GURU: <strong><?echo"$tmt_guru";?></strong><br />
              TMT di Sekolah: <strong><?echo"$tmt_disekolah";?></strong><br />
              Status Perkawinan: <strong><?echo"$stat_perkawinan";?></strong><br />
              Nama Sekolah: <strong><?echo"$nm_sekolah";?></strong><br />
       
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