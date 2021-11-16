<?php include "header.php"; ?>
<?php 
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include "../config/koneksi.php";

	echo "
		<div class='alert alert-info'>Data Guru</div><hr>
			<div class=table-responsive> 
			<table>
				<tr>
					<td>
						<input type=button value='Tambah Data Guru' onClick=window.location='guru_input.php' class='btn btn-primary' style='float:right; margin-right:10px; margin-top:3px; margin-bottom:10px;'>
					</td>
			   	</tr>
			</table>
	          	
	          	<table class='table table-bordered table-hover' style='width: 100%;'>
                    <thead>
                        <tr style='background:#e3e3e3; border:1px solid #cecece;' align=center>
							
							<td><b>No</td>
							<td><b>NIP</td>
							<td><b>Nama Guru</td>
							<td><b>Jenis Kelamin</td>
							<td><b>Telepon</td>
							<td><b>Agama</td>
							<td><b>Jenis PTK (Jabatan)</td>
							<td><b>Sumber Gaji</td>
							
							<td style='width:240px; text-align:center;'><b>Aksi</b></td>
						</tr>
					</thead>";
	$query=mysql_query ("SELECT * FROM tbl_guru ORDER BY id_guru");
	$no=1;
	while($qry=mysql_fetch_array($query)){
		echo "
				<tr align=center>
					<td>$no</td>
					<td>$qry[nip]</td>
					<td>$qry[nama_guru]</td>
					<td>$qry[jenis_kelamin]</td>
					<td>$qry[telepon]</td>
					<td>$qry[agama]</td>
					<td>$qry[jenis_ptk]</td>
					<td>$qry[sumber_gaji]</td>
					<td colspan=2 align=center>

						<button class='btn btn-primary' type='button' onClick=window.location='guru_edit.php?id_guru=$qry[id_guru]' title='Edit Data'><i class='fa fa-edit'></i></button>

						<button class='btn btn-success' type='button' onClick=window.location='guru_detail.php?id_guru=$qry[id_guru]' title='Lihat Detail'><i class='fa fa-search'></i></button>

						<button class='btn btn-danger' type='button' onClick=window.location='guru_hapus.php?id_guru=$qry[id_guru]' title='Hapus Data'><i class='fa fa-trash'></i></button>
					</td>
				</tr>";
		$no++;
	}
	echo "
			</table>
		</div>";
?>
<?php include "footer.php"; ?>