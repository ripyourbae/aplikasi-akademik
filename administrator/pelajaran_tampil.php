<?php include "header.php"; ?>
	<?php 
		error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
		ob_start();
		include "../config/koneksi.php";

		echo "
			<div class='alert alert-info'>Data Mata Pelajaran</div><hr>
				<table>
					<tr>
						<td>
							<input type=button value='Tambah Mata Pelajaran' onClick=window.location='pelajaran_input.php' class='btn btn-primary' style='float:right; margin-right:10px; margin-top:3px; margin-bottom:10px;'>
						</td>
				   	</tr>
				</table>
		         	
		         	<table class='table table-bordered table-hover' style='width: 100%;'>
	                	<thead>
	                        <tr style='background:#e3e3e3; text-align:center; border:1px solid #cecece;'>

	                        	<td style='width:40px;'><b>No</b></td>
								<td style='width:200px;'><b>Kode Mata Pelajaran</b></td>
								<td><b>Nama Pelajaran</b></td>
								<td><b>Semester</b></td>
								<td style='width:240px; text-align:center;'><b>Aksi</b></td>
							</tr>
						</thead>";

		$query=mysql_query ("SELECT * FROM tbl_pelajaran ORDER BY id_pelajaran");
		$no=1;
		while($qry=mysql_fetch_array($query)){
			echo "
					<tr style='text-align:center;'>
						<td>$no</td>
						<td>$qry[kode_pelajaran]</td>
						<td>$qry[nama_pelajaran]</td>
						<td>Semester $qry[semester]</td>
						<td colspan=2 align=center>

							<button class='btn btn-danger' type='button' onClick=window.location=pelajaran_hapus.php?id_pelajaran=$qry[id_pelajaran]' title='Hapus Data'><i class='fa fa-trash'></i></button>
						</td>
					</tr>";
			$no++;
		}
		echo "
				</table>";
	?>
<?php include "footer.php"; ?>