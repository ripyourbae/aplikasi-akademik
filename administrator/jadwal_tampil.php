<?php include "header.php"; ?>
	<?php 
		error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
		ob_start();
		include "../config/koneksi.php";
		include "../config/library.php";

		echo "
			<div class='alert alert-info'>Semua Data Jadwal Pelajaran</div><hr>";
				if (isset($_POST[cek])){	
					echo "
					<form action='' method='POST'>
						<table>
							<tr>
							<label>Lihat Jadwal Kelas</label><select name='a' class='form-control' style='width: 15%; margin:0px float:right; margin-right:20px; margin-top:3px;'>
								<option value='0' selected>- Pilih -<option>";
									$kelas = mysql_query("SELECT * FROM tbl_kelas");
										while ($k = mysql_fetch_array($kelas)){
											if ($_POST[a]== $k[kode_kelas]){
												echo "<option value='$k[kode_kelas]' selected>$k[nama_kelas]</option>";
											}else{
												echo "<option value='$k[kode_kelas]'>$k[nama_kelas]</option>";
											}
										}
					echo "		</select>
							</tr>
							<input type='submit' name='cek' value='Lihat' class='btn btn-primary' style='margin:0px float:right; margin-right:20%; margin-top:3px; margin-bottom:20px;'>

							<input type=button value='Tambah Jadwal' onClick=window.location='jadwal_input.php' class='btn btn-primary' style='float:right;' >
					</form>";
						
				}else{
					echo "
						<form action='' method='POST'>
							<table>
								<tr>
								<label>Lihat Jadwal Kelas</label> <select name='a' class='form-control' style='width: 15%; margin:0px float:right; margin-right:20px; margin-top:3px;'>
									<option value='0' selected>- Pilih -<option>";
										$kelas = mysql_query("SELECT * FROM tbl_kelas");
											while ($k = mysql_fetch_array($kelas)){
												echo "<option value='$k[kode_kelas]'>$k[nama_kelas]</option>";
											}
						echo "		</select>
								</tr>
							<input type='submit' name='cek' value='Lihat' class='btn btn-primary' style='margin:0px float:right; margin-right:20%; margin-top:3px; margin-bottom:20px;'>

							<input type=button value='Tambah Jadwal' onClick=window.location='jadwal_input.php' class='btn btn-primary' style='float:right;' >
						</form>";
					  	
				 }

				echo "
					<div class=table-responsive> 
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
								<td style='width:100px; text-align:center;'><b>Aksi</b></td>
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
						<td>

							<button class='btn btn-danger' type='button' onClick=window.location='jadwal_hapus.php?id_jadwal=$qry[id_jadwal]' title='Hapus Data'><i class='fa fa-trash'></i></button>
						</td>
					</tr>";
			$no++;
		}
		echo "
					</table>";
	?>
<?php include "footer.php"; ?>