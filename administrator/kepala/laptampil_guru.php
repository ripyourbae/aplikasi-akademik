<?php include "header.php"; ?>
<?php 
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include "../../config/koneksi.php";

	echo "
		<div class='alert alert-info'>Halaman Kelola Semua data <b>Guru Sekolah</b></div><hr>
			<table>
				<td><a class='btn btn-success' style='float:left;' target='_BLANK' href='../print_guru.php'><i class='fa fa-print'>&nbsp Cetak / Print Laporan</i></a><br><br></td>

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
					
				</tr>";
		$no++;
	}
	echo "
			</table>
		";
?>
<?php include "footer.php"; ?>