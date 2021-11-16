<?php include "header.php"; ?>

<script>
	$(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
     $(".modal-body #bookId").val( myBookId );
});
</script>
<script>
function myFunction() {
    alert("Klik Button 'Simpan Semua Nilai' Terlebih Dahulu!");
}
</script>

<?php
	include "../config/koneksi.php";
	$aksi="lapnilai_aksi.php";
	switch($_GET[act]){

	  default:
	    echo "
	    <div class='alert alert-info' align='left'>Kelola data Nilai Untuk Siswa</div>
		    <table class='table table-bordered table-hover' style='width: 100%;'>
	            <thead>
	                <tr style='background:#e3e3e3; border:1px solid #cecece;'>
						<th>No</th>
						<th>Kode Kelas</th>
						<th>Nama Kelas</th>
						<th>Wali Kelas</th>
						<th>Jumlah Siswa</th>
						<th>Kapasitas</th>
						<th style='width:240px; text-align:center;'>Action</th>
					</tr>
				</thead>
		</div>";
	    
		if ($_SESSION[level] == 'admin'){
			$tampil = mysql_query("SELECT * FROM tbl_jadwal a JOIN tbl_kelas c ON a.kode_kelas=c.kode_kelas JOIN tbl_guru d ON c.nip=d.nip where a.nip='$_SESSION[id_admin]' ORDER BY a.kode_kelas ASC");
	    }else{
			$tampil = mysql_query("SELECT * FROM tbl_kelas a JOIN tbl_guru b ON a.nip=b.nip ORDER BY a.kode_kelas ASC");
		}
		$no = $posisi+1;
	    while($r=mysql_fetch_array($tampil)){
			$siswa = mysql_query("SELECT * FROM tbl_siswa where kode_kelas='$r[kode_kelas]'");
			$total = mysql_num_rows($siswa);
	      echo "<tr bgcolor=$warna>
					<td>$no</td>
					<td>$r[kode_kelas]</td>
	                <td>$r[nama_kelas]</td>
					<td>$r[nama_guru]</td>
					<td>$total Orang Siswa</td>
					<td>$r[jumlah_siswa] Orang Siswa</td>
			        <td><center>
						<a class='btn btn-success' title='Tampilkan Pelajaran' href=?module=nilai&act=tampiljadwal&id=$r[kode_kelas]><i class='fa fa-search'>&nbsp Tampilkan Pelajaran</i></a>
					</td></tr>";
	      $no++;
	    }


	    break;

		case "tampiljadwal":
			$kelas = mysql_query("SELECT * FROM tbl_kelas where kode_kelas='$_GET[id]'");
			$k = mysql_fetch_array($kelas);
			echo "
			<div class='alert alert-info' align='left'>Semua data Jadwal Pelajaran Di Kelas $k[nama_kelas]</div><hr>
				<table class='table table-bordered table-hover' style='width: 100%;'>
				    <thead>
				        <tr style='background:#e3e3e3; border:1px solid #cecece;'>
							<th>No</th>
							<th>Kode Pelajaran</th>
							<th>Nama Pelajaran</th>
							<th>Nama Kelas</th>
							<th>Nama Guru</th>
							<th>Tahun Ajaran</th>
							<th style='width:110px;'>Semester</th>
							<th>Hari</th>
							<th>Jam</th>
							<th style='width:220px; text-align:center;'>Action</th>
						</tr>
					</thead>
			</div>";
			    
			    if ($_SESSION[level] == 'admin'){
			      $tampil = mysql_query("SELECT * FROM tbl_jadwal a 
											JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas 
												JOIN tbl_guru c ON a.nip=c.nip 
													JOIN tbl_pelajaran d ON a.kode_pelajaran=d.kode_pelajaran
														where a.kode_kelas='$_GET[id]' AND a.nip='$_SESSION[id_admin]' ORDER BY a.id_jadwal ASC");
			    }else{
				  $tampil = mysql_query("SELECT * FROM tbl_jadwal a 
											JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas 
												JOIN tbl_guru c ON a.nip=c.nip 
													JOIN tbl_pelajaran d ON a.kode_pelajaran=d.kode_pelajaran
														where a.kode_kelas='$_GET[id]' ORDER BY a.id_jadwal ASC");
			    }
			    $no = $posisi+1;
			    while($r=mysql_fetch_array($tampil)){
			      echo "<tr>
							<td>$no</td>
							<td>$r[kode_pelajaran]</td>
			                <td>$r[nama_pelajaran]</td>
							<td>$r[nama_kelas]</td>
							<td>$r[nama_guru]</td>
							<td>$r[tahun_ajaran]</td>
							<td>Semester $r[semester]</td>
							<td>$r[hari]</td>
							<td>$r[jam]</td>
					        <td><center>
								<a class='btn btn-success' title='Tampilkan Siswa' href=?module=nilai&act=tampilsiswa&id=$r[kode_kelas]&tahun=$r[tahun_ajaran]&semester=$r[semester]&pelajaran=$r[kode_pelajaran]><i class='fa fa-search'>&nbsp Tampilkan Siswa</i></a>
							</td></tr>";
			      $no++;
			    }
				
				break;
				
				case "tampilsiswa":

					if (isset($_POST[submitt])){
						if ($_GET[status]=='T'){
							$snilai = 'Tugas';
						}else{
							$snilai = 'Harian';
						}
						mysql_query("INSERT INTO tbl_nilai_detail (id_nilai, nilai, keterangan, status)
								VALUES ('$_POST[id_nilai]','$_POST[nilai]','$_POST[keterangan]','$_POST[status]')");
						echo "<script>window.alert('Sukses Simpan Data Nilai $snilai.');
								window.location='?module=nilai&act=tampilsiswa&id=$_GET[id]&tahun=$_GET[tahun]&semester=$_GET[semester]&pelajaran=$_GET[pelajaran]'</script>";
					}

					$kelas = mysql_query("SELECT * FROM tbl_kelas where kode_kelas='$_GET[id]'");
					$k = mysql_fetch_array($kelas);
					$mapel = mysql_query("SELECT * FROM tbl_pelajaran where kode_pelajaran='$_GET[pelajaran]'");
					$m = mysql_fetch_array($mapel);

					echo "
					<div class='alert alert-info' align='left'>Semua Data Nilai Siswa di Kelas $k[nama_kelas] - Tahun $_GET[tahun] - Semester $_GET[semester] - Mata Pelajaran $m[nama_pelajaran]</div><hr>
						<table class='table table-bordered table-hover' style='width: 100%;' align='center'>
							<tr style='background:#e3e3e3; border:1px solid #cecece;'>
								<th>No</th>
								<th>NIS</th>
								<th>Nama Siswa</th>
								<th>Nilai Harian</th>
								<th>Nilai Tugas</th>
								<th>Nilai UTS</th>
								<th>Nilai UAS</th>
							</tr>
					</div>";
			    
			      	$tampil = mysql_query("SELECT * FROM tbl_siswa where kode_kelas='$_GET[id]' ORDER BY nipd ASC");
				    $no = 1;
					
					echo "<form action='' method='POST'>";
				    
				    while($r=mysql_fetch_array($tampil)){

					$nilai = mysql_query("SELECT * FROM tbl_nilai where nipd='$r[nipd]' AND kode_pelajaran='$_GET[pelajaran]' AND semester='$_GET[semester]' AND tahun_ajaran='$_GET[tahun]' AND kode_kelas='$_GET[id]'");
					
					$n = mysql_fetch_array($nilai);

					$ht1 = mysql_fetch_array(mysql_query("SELECT id_nilai, GROUP_CONCAT(nilai SEPARATOR ',') as nilai, status FROM `tbl_nilai_detail` where id_nilai='$n[id_nilai]' AND status='H' GROUP BY id_nilai, status"));
				    
				    $ht2 = mysql_fetch_array(mysql_query("SELECT id_nilai, GROUP_CONCAT(nilai SEPARATOR ',') as nilai, status FROM `tbl_nilai_detail` where id_nilai='$n[id_nilai]' AND status='T' GROUP BY id_nilai, status"));
				    
				      echo "
				      	<tr bgcolor=$warna>
							<td>$no</td>
							<td>$r[nipd]</td>
							<td>$r[nama_siswa]</td>
							<input type='hidden' value='$r[nipd]' name='nipd[$no]'>
							<td>
								<input style='width:78%' type='text' value='$ht1[nilai]' class=form-control disabled> 
															
								<a style='float:right; margin-right:10px; margin-top:-34px;' class='btn btn-default' href='nilai_harian.php?id_nilai=$n[id_nilai]' data-id='$n[id_nilai]'><i class='fa fa-plus-circle'></i></a>
							<td>
								<input style='width:78%' type='text' value='$ht2[nilai]' class=form-control disabled>

								<a style='float:right; margin-right:10px; margin-top:-34px;' class='btn btn-default' href='nilai_tugas.php?id_nilai=$n[id_nilai]' data-id='$n[id_nilai]'><i class='fa fa-plus-circle'></i></a>";

								$bg = 'white';
								$fnt = 'black';
								$bgs = 'white';
								$fnts = 'black';
								if($n['nilai_uts'] < 75)
								{
									$bg = 'red';
									$fnt = 'white';
								}
								if($n['nilai_uas'] < 75)
								{
									$bgs = 'red';
									$fnts = 'white';
			 					}
								echo "
									<td>
										<input style='width:90px;background-color:$bg;color:$fnt;' type='text' value='$n[nilai_uts]' name='c[$no]' class=form-control></td>
									<td>
										<input style='width:90px;background-color:$bgs;color:$fnts;' type='text' value='$n[nilai_uas]' name='d[$no]' class=form-control></td>
						</tr>";
					$no++;
					}

					echo "
					<tr style='background:#e3e3e3;'>
						<td colspan='7'>
							<button style='float:right; margin-right:20px;' class='btn btn-default' onclick=\"window.history.back();\">Kembali</button> 
							<input class='btn btn-primary' style='float:right; margin-right:10px;' type='submit' value='Simpan Semua Nilai' name='nilai'> 
						</td>
					</tr>";
											    
				    
					$jmldata = mysql_num_rows(mysql_query("SELECT * FROM tb_siswa"));

					echo "<form></table><br/><hr>";
						echo "</li></ul>
							  <div style='float:left; margin-top:-20px;' class='pagination'>
							  <ul>
								$linkHalaman
							</ul>
						</div>";
						
						if (isset($_POST[nilai])){
							$jml_data = count($_POST[nipd]);
							
							$nipd = $_POST[nipd];
							$harian = $_POST[a];
							$tugas  = $_POST[b];
							$uts    = $_POST[c];
							$uas    = $_POST[d];
							
							for ($i=1; $i <= $jml_data; $i++){
								$cek = mysql_query("SELECT * FROM tbl_nilai where nipd='".$nipd[$i]."' AND kode_kelas='$_GET[id]' AND tahun_ajaran='$_GET[tahun]' AND semester='$_GET[semester]' AND kode_pelajaran='$_GET[pelajaran]'");
								$total = mysql_num_rows($cek);
								if ($total >= 1){
									mysql_query("UPDATE tbl_nilai SET nilai_uts    = '".$uts[$i]."',
																	 nilai_uas    = '".$uas[$i]."' where nipd='".$nipd[$i]."'");
								}else{
									mysql_query("INSERT INTO tbl_nilai (nipd,
																	 kode_kelas,
																	 tahun_ajaran,
																	 semester,
																	 kode_pelajaran,
																	 nilai_uts,
																	 nilai_uas) 
															VALUES ('".$nipd[$i]."',
																	'$_GET[id]',
																	'$_GET[tahun]',
																	'$_GET[semester]',
																	'$_GET[pelajaran]',
																	'".$uts[$i]."',
																	'".$uas[$i]."')");
								}
							}
								echo "<script>window.alert('Sukses Simpan Data Nilai Siswa.');
										window.location='?module=nilai&act=tampilsiswa&id=$_GET[id]&tahun=$_GET[tahun]&semester=$_GET[semester]&pelajaran=$_GET[pelajaran]'</script>";
										
						}
					break;
				}
				echo "
	    	</table>";
?>
<br>
<?php include "footer.php"; ?>