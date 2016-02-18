<?php
include('../librari/inc.koneksi.php');
?>
<!-- <div class="col-md-6"> -->
						<!-- START PANEL -->
<a href="?page=siswa-tambah"><button class="btn btn-primary pull-right" type="submit">Tambah</button></a><br><br>
<div class="panel panel-default">
<div class="panel-body">
<table class="table table-hover demo-table-dynamic custom" id="tableWithDynamicRows">
<thead>
<tr>
<th>No</th>
<th>Nama Siswa</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$tampil=("select * from tbl_siswa ORDER BY kode_siswa ");
$cari_query=mysql_query($tampil);
$jmldata=mysql_num_rows($cari_query);
$no = 1;
while($data=mysql_fetch_row($cari_query)) 
{


	echo 

	"
	<tr>
	<td>$no</td>
	<td><a href=\"admin.php?page=siswa-detail.html&amp;sesi_get=$sesi_get&amp;idsiswa=",$data[0],"\">$data[1]</td>
	<td width='5px'><a href='admin.php?page=siswa-edit&amp;id=$data[0]'><button class='btn btn-default btn-xs btn-edit' ><i class='fa fa-pencil'></i></button></a></td>
	<td><a href='admin.php?page=siswa-hapus&amp;id=$data[0] 'target='_self' alt='Delete Data' onclick='return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')'><button class='btn btn-check'><i class='glyphicon glyphicon-remove small'></i></button></a></td>
	</tr>
	";
?>

<?php
$no++;
}
?>
</tbody>
</table>
</div>
</div>
						