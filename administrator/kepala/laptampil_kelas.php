<?php include "header.php"; ?>
	<?php 
		error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
		ob_start();
		include "../../config/koneksi.php";

		echo "
			<div class='alert alert-info'>Semua Data Kelas</div><hr>
				<table>
					<a class='btn btn-success' style='float:left;' target='_BLANK' href='../print_kelas.php'><i class='fa fa-print'>&nbsp Cetak / Print Laporan</i></a><br><br>
				</table>
		          <table class='table table-bordered table-hover' style='width: 100%;'>
	                    <thead>
	                        <tr style='background:#e3e3e3; border:1px solid #cecece;'>

	                        	<td align=center><b>No</b></td>
								<td align=center><b>Kode Kelas</b></td>
								<td align=center><b>Nama Kelas</b></td>
								<td align=center><b>Wali Kelas</b></td>
								<td align=center><b>Jumlah Siswa</b></td>
								<td align=center><b>Kapasitas</b></td>
							</tr>
						</thead>";

		
		$tampil = mysql_query("SELECT * FROM tbl_kelas a JOIN tbl_guru b ON a.nip=b.nip where b.nip='$_SESSION[id_admin]' ORDER BY a.kode_kelas ASC");
		$tampil = mysql_query("SELECT * FROM tbl_kelas a JOIN tbl_guru b ON a.nip=b.nip ORDER BY a.kode_kelas ASC");
		$no = 1;
    	while($qry=mysql_fetch_array($tampil)){
     		$hitung = mysql_num_rows(mysql_query("SELECT * FROM tbl_siswa where kode_kelas='$qry[kode_kelas]'"));
      		echo "
      			<tr>
					<td align=center>$no</td>
					<td align=center>$qry[kode_kelas]</td>
					<td align=center>$qry[nama_kelas]</td>
					<td align=center>$qry[nama_guru]</td>
					<td align=center>$hitung Orang</td>
					<td align=center>$qry[jumlah_siswa] Orang</td>
				</tr>";
			$no++;
		}
		echo "
				</table>
			";
	?>
<?php include "footer.php"; ?>