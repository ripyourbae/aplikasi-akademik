<?php include "header.php"; ?>
	<?php 
		error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
		ob_start();
		include "../config/koneksi.php";

		echo "
			<div class='alert alert-info'>Semua data Predikat Nilai</div><hr>
		         <table class='table table-bordered table-hover' style='width: 100%;'>
	                	<thead>
	                        <tr style='background:#e3e3e3; text-align:center; border:1px solid #cecece;'>

	                        	<td><b>No</b></td>
								<td><b>Nilai A</b></td>
								<td><b>Nilai B</b></td>
								<td><b>Grade Nilai</b></td>
								<td><b>Keterangan</b></td>
								<td style='width:240px; text-align:center;'><b>Aksi</b></td>
							</tr>
						</thead>";

		$query=mysql_query ("SELECT * FROM tbl_predikat ORDER BY id_predikat");
		$no=1;
		while($qry=mysql_fetch_array($query)){
			echo "
					<tr style='text-align:center;'>
						<td>$qry[id_predikat]</td>
						<td>$qry[nilai_a]</td>
						<td>$qry[nilai_b]</td>
						<td>$qry[grade]</td>
						<td>$qry[keterangan]</td>
						<td colspan=2 align=center>

							<button class='btn btn-danger' type='button' onClick=window.location='setpredikat_hapus.php?id_predikat=$qry[id_predikat]' title='Hapus Data'><i class='fa fa-trash'></i></button>
						</td>
					</tr>";
			$no++;
		}
		echo "
				</table>
					<td>
						<input type=button value='Tambah Data Predikat' onClick=window.location='setpredikat_input.php' class='btn btn-primary'>
					</td>
			<center>";
	?>
<?php include "footer.php"; ?>