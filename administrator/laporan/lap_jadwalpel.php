<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-Jadwal-Pelajaran.xls");
?>

<h3>Data Jadwal Pelajaran</h3>
		
<table border="1" cellpadding="5" align="center">

	<tr>
		<th>No</td>
		<th>Kode Pelajaran</th>
		<th>Nama Pelajaran</th>
		<th>Nama Kelas</th>
		<th>Nama Guru</th>
		<th>Tahun Ajaran</th>
		<th>Semester</th>
		<th>Hari</th>
		<th>Jam</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "../../config/koneksi.php";
	
	// Buat query untuk menampilkan semua data
	if (isset($_POST[cek])){
	  		$sql = mysql_query("SELECT * FROM tbl_jadwal a 
								JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas 
									JOIN tbl_guru c ON a.nip=c.nip 
										JOIN tbl_pelajaran d ON a.kode_pelajaran=d.kode_pelajaran
											where a.kode_kelas='$_POST[a]' ORDER BY a.id_jadwal ASC");
	  		
		}else{
      		$sql = mysql_query("SELECT * FROM tbl_jadwal a 
								JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas 
									JOIN tbl_guru c ON a.nip=c.nip 
										JOIN tbl_pelajaran d ON a.kode_pelajaran=d.kode_pelajaran
											ORDER BY a.id_jadwal ASC");
      		
		}

		$no = 1;
		while($data = mysql_fetch_array($sql)){

			echo "
				<tr align=center>
					<td>$no</td>
					<td>$data[kode_pelajaran]</td>
					<td>$data[nama_pelajaran]</td>
					<td>$data[nama_kelas]</td>
					<td>$data[nama_guru]</td>
					<td>$data[tahun_ajaran]</td>
					<td>Semester $data[semester]</td>
					<td>$data[hari]</td>
					<td>$data[jam] WIB</td>
				</tr>";
			
		$no++; // Tambah 1 setiap kali looping
	}
	?>
</table>
