<?php include "header.php"; ?>
	<?php
		error_reporting(E_ALL^(E_NOTICE | E_WARNING));
		error_reporting(E_ALL^E_DEPRECATED);
		include "../config/koneksi.php";

		echo "
			<div class='alert alert-info'>Semua Data Siswa</div><hr>
				<table>
					<form style='float:right;' target='_BLANK' action='print_siswa.php' method='GET'>
						<select name='a' class='form-control' style='width: 15%;'>
							<option value='0' selected>- Semua Siswa -</option>";
								$kelas = mysql_query("SELECT * FROM tbl_kelas");
								while($a = mysql_fetch_array($kelas)){
									echo "<option value='$a[kode_kelas]'>$a[nama_kelas]</option>";
								}
						  echo "</select><br>
						<input type='submit' style='margin-top:-10px' class='btn btn-success' value='Cetak / Print Laporan'><br><br>
					</form>

				</table>
	          	<table class='table table-bordered table-hover' style='width: 100%;'>
                    <thead>
                        <tr align=center style='background:#e3e3e3; border:1px solid #cecece;'>
							
							<td><b>No</b></td>
							<td><b>NIS</b></td>
							<td><b>Nama</b></td>
							<td><b>Tempat Lahir</b></td>
							<td><b>Tanggal Lahir</b></td>
							<td><b>Jenis Kelamin</b></td>
							<td><b>Agama</b></td>
							<td><b>Kelas</b></td>
						</tr>
					</thead>";
		
		$query=mysql_query ("SELECT * FROM tbl_siswa a JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas ORDER BY a.nipd ASC");
		$no=1;
		while($a = mysql_fetch_array($query)){
			echo "
								<tbody>
									<tr align=center>
										<td>$no</td>
										<td>$a[nipd]</td>
										<td>$a[nama_siswa]</td>
										<td>$a[tempat_lahir]</td>
										<td>$a[tanggal_lahir]</td>
										<td>$a[jenis_kelamin]</td>
										<td>$a[agama]</td>
										<td>$a[nama_kelas]</td>
									</tr>
								</tbody>";

			$no++;
		}
	?>
<?php include "footer.php"; ?>
