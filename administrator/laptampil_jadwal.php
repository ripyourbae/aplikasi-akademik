<?php include "header.php"; ?>
	<?php 
		error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
		ob_start();
		include "../config/koneksi.php";

		echo "
			<div class='alert alert-info'>Data Jadwal Pelajaran</div><hr>
				<table>
					<form target='_BLANK' style='float:right' action='print_jadwal.php' method='GET'>
							<h5>Jadwal Kelas : </h5> <select name='a' class='form-control' style='width: 15%;'>
												  <option value='0' selected>- Semua Jadwal -<option>";
														$kelas = mysql_query("SELECT * FROM tbl_kelas");
														while ($k = mysql_fetch_array($kelas)){
															echo "<option value='$k[kode_kelas]'>$k[nama_kelas]</option>";
														}
											   echo "</select> <br>
							
							<input style='margin-top:-2px' type='submit' class='btn btn-success' name='cek' value='Cetak / Print Laporan'>

							
						</form>

					<tr>
					
						<a class='btn btn-success' style='float:right;' href='laporan/lap_jadwalpel.php'><i class='fa fa-download'>&nbsp Download Laporan</i></a><br><br>
					</tr>
				</table>
		          	<table class='table table-bordered table-hover' style='width: 100%;'>
	                    <thead>
	                        <tr style='background:#e3e3e3; border:1px solid #cecece;' align=center>
						
								<td><b>No</td>
								<td><b>Kode Pelajaran</td>
								<td><b>Nama Pelajaran</td>
								<td><b>Nama Kelas</td>
								<td><b>Nama Guru</td>
								<td><b>Tahun Ajaran</td>
								<td><b>Semester</td>
								<td><b>Hari</td>
								<td><b>Jam</td>
							</tr>
						</thead>";

		if (isset($_POST[cek])){
	  		$tampil = mysql_query("SELECT * FROM tbl_jadwal a 
								JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas 
									JOIN tbl_guru c ON a.nip=c.nip 
										JOIN tbl_pelajaran d ON a.kode_pelajaran=d.kode_pelajaran
											where a.kode_kelas='$_POST[a]' ORDER BY a.id_jadwal ASC");
		}else{
      		$tampil = mysql_query("SELECT * FROM tbl_jadwal a 
								JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas 
									JOIN tbl_guru c ON a.nip=c.nip 
										JOIN tbl_pelajaran d ON a.kode_pelajaran=d.kode_pelajaran
											ORDER BY a.id_jadwal ASC");
		}
		$no=1;
		while($qry=mysql_fetch_array($tampil)){
			echo "
					<tr align=center>
						<td>$no</td>
						<td>$qry[kode_pelajaran]</td>
						<td>$qry[nama_pelajaran]</td>
						<td>$qry[nama_kelas]</td>
						<td>$qry[nama_guru]</td>
						<td>$qry[tahun_ajaran]</td>
						<td>Semester $qry[semester]</td>
						<td>$qry[hari]</td>
						<td>$qry[jam] WIB</td>
					</tr>";
			$no++;
		}
		echo "
					</table>
			";
	?>
<?php include "footer.php"; ?>