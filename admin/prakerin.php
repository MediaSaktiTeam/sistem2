<?php
include('../librari/inc.koneksi.php');
?>
<!-- <div class="col-md-6"> -->
						<!-- START PANEL -->
<a href="?page=prakerin-tambah"><button class="btn btn-primary pull-right" type="submit">Tambah</button></a><br><br>
<div class="panel panel-default">
<div class="panel-body">
<table class="table table-hover demo-table-dynamic custom" id="tableWithDynamicRows">
<thead>
<tr>
<th>No</th>
<th>Nama Siswa</th>
<th>Nama Jurusan</th>
<th>Nama Kelas</th>
<th>Lokasi Prakerin</th>
<th>Alamat Lokasi</th>
<th>No.Telp</th>
<th>Nama Guru</th>
<th>Periode</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$tampil=("select *, tbl_siswa.nm_siswa, tbl_jurusan.nm_jurusan, tbl_kelas.nm_kelas, tbl_guru.nama_guru
	from tbl_prakerin
	JOIN tbl_siswa ON tbl_prakerin.kode_siswa = tbl_siswa.kode_siswa 
	JOIN tbl_jurusan ON tbl_prakerin.kode_jurusan = tbl_jurusan.kode_jurusan
	JOIN tbl_kelas ON tbl_prakerin.kode_kelas = tbl_kelas.kode_kelas
	JOIN tbl_guru ON tbl_prakerin.kode_guru = tbl_guru.kode_guru
	ORDER BY id_prakerin ");
$cari_query=mysql_query($tampil);
$jmldata=mysql_num_rows($cari_query);
$no = 1;
while($data=mysql_fetch_array($cari_query)) 
{
?>
	<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $data['nm_siswa']; ?></td>
	<td><?php echo $data['nm_jurusan']; ?></td>
	<td><?php echo $data['nm_kelas']; ?></td>
	<td><?php echo $data['lokasi_prakerin']; ?></td>
	<td><?php echo $data['alamat_lokasi']; ?></td>
	<td><?php echo $data['notelp']; ?></td>
	<td><?php echo $data['nama_guru']; ?></td>
	<td><?php echo $data['periode']; ?></td>
	<td width='5px'><a href="admin.php?page=prakerin-edit&amp;id=<?php echo $data['id_prakerin'] ?>"><button class="btn btn-default btn-xs btn-edit" ><i class="fa fa-pencil"></i></button></a></td>
	<td><a href='admin.php?page=prakerin_hapus&amp;id=$data[0] 'target='_self' alt='Delete Data' onclick='return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')'><button class='btn btn-check'><i class='glyphicon glyphicon-remove small'></i></button></a></td>
	</tr>

<?php
$no++;
}
?>
</tbody>
</table>
</div>
</div>
						