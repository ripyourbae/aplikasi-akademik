<?php include "header.php"; ?>
	<?php 
		error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
		ob_start();
		include "../config/koneksi.php";

		echo "
			<div class='alert alert-info'>Semua Data Kelas</div><hr>
				<table>
					<tr>
						<td>
							<input type=button value='Tambah Kelas Baru' onClick=window.location='kelas_input.php' class='btn btn-primary' style='float:right; margin-right:10px; margin-top:3px; margin-bottom:10px;'>
						</td>
				   	</tr>
				</table>
		          	<table class='table table-bordered table-hover' style='width: 100%;'>
	                    <thead>
	                        <tr style='background:#e3e3e3; border:1px solid #cecece;'>

	                        	<td align=center><b>No</td></td>
								<td align=center><b>Kode Kelas</td></td>
								<td align=center><b>Nama Kelas</td></td>
								<td align=center><b>Wali Kelas</td></td>
								<td align=center><b>Jumlah Siswa</td></td>
								<td align=center><b>Kapasitas</td></td>
								<td style='width:240px; text-align:center;'><b>Aksi</b></td>
							</tr>
						</thead>";

		
		$tampil = mysql_query("SELECT * FROM tbl_kelas a JOIN tbl_guru b ON a.nip=b.nip where b.nip='$_SESSION[id_admin]' ORDER BY a.id_kelas ASC");
		$tampil = mysql_query("SELECT * FROM tbl_kelas a JOIN tbl_guru b ON a.nip=b.nip ORDER BY a.id_kelas ASC");
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
					<td colspan=2 align=center>

						<button class='btn btn-danger' type='button' onClick=window.location='kelas_hapus.php?id_kelas=$qry[id_kelas]' title='Hapus Data'><i class='fa fa-trash'></i></button>
					</td>
				</tr>";
			$no++;
		}
		echo "
				</table>";
	?>
<?php include "footer.php"; ?>