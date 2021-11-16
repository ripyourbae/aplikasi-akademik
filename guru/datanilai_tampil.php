<!-- Header -->
<?php
    ob_start();
    session_start();
    error_reporting(0);

    if ($_SESSION[level] == ''){
        echo "<script>window.alert('Maaf, untuk mengakses halaman ini anda harus login.');
                    window.location='../index.php?halamandepan'</script>";
    }
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SMP N 2 Patikraja</title>
    <link href="view/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/css/modern-business.css" rel="stylesheet">
    <link href="view/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body style='background:url(../images/gray_jean.png);'>

    <div style="padding:0% 7% 0 6%;" class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="span12">
                    <div class="span12">
                        <img style="margin-top:-3.5%; margin-bottom:2px; width:100%" src="../images/headersmp.jpg" />
            </div>
        </div>
    </div>

    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>        
            </div>

            <div class="nav-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <?php
                        if ($_SESSION[level]=='guru'){
                        }
                    ?>
                    <li class="nav pull-left"><a href="#"><b> Selamat Datang - </b><b style='color:blue'><?php echo "$_SESSION[namaguru]"; ?> (Guru)</b></a></li>

                    <li>
                        <a href="index.php" class="fa fa-home"><b>&nbsp Beranda</b></a>
                    </li>
                    <li class="active">
                        <a href="datanilai_tampil.php" class="fa fa-file-text"><b>&nbsp Data Nilai</b></a>
                    </li>
                    <li>
                        <a href="laptampil_nilai.php" class="fa fa-users"><b>&nbsp Laporan Nilai Siswa</b></a>
                    </li>
                    <li class="nav pull-right">
                        <a href="logout.php" class="fa fa-power-off"><b>&nbsp Logout</b></a>
                    </li>

                    </div>
                </ul>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Header -->

<!-- Content -->
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
	ob_start();
	session_start();
	error_reporting(0);

	switch($_GET[act]){

	  default:
	    echo "
		    <div style='padding:1% 6% 0 5%;' class='row-fluid'>
	        <div class='col-lg-12 text-center'>
	            <div class='panel panel-default'>
	                <div class='panel-body'>
	                	<div class='alert alert-info' align='left'>Kelola data Nilai Untuk Siswa</div>
	                		<hr>
					          <table class='table table-hover' style='width: 100%; font-size:14px;' align='center'>
					          <tr style='background:#e3e3e3; border:1px solid #cecece; align:center'>
								<td><b>No</td>
								<td><b>Kode Kelas</td>
								<td><b>Nama Kelas</td>
								<td><b>Wali Kelas</td>
								<td><b>Jumlah Siswa</td>
								<td><b>Kapasitas</td>
								<th style='width:240px; text-align:center;'>Action</th>
							</tr>
					</div>
				</div>
			</div>
			</div>";

					    
			
			$tampil = mysql_query("SELECT * FROM tbl_jadwal a JOIN tbl_kelas c ON a.kode_kelas=c.kode_kelas JOIN tbl_guru d ON c.nip=d.nip where a.nip='$_SESSION[id_admin]' ORDER BY a.kode_kelas ASC");
			
			$tampil = mysql_query("SELECT * FROM tbl_kelas a JOIN tbl_guru b ON a.nip=b.nip ORDER BY a.kode_kelas ASC");
			
			$no = $posisi+1;
		    while($r=mysql_fetch_array($tampil)){
			$siswa = mysql_query("SELECT * FROM tbl_siswa where kode_kelas='$r[kode_kelas]'");
			$total = mysql_num_rows($siswa);
			echo "
				<tr bgcolor=$warna>
					<td>$no</td>
					<td>$r[kode_kelas]</td>
	                <td>$r[nama_kelas]</td>
					<td>$r[nama_guru]</td>
					<td>$total Orang Siswa</td>
					<td>$r[jumlah_siswa] Orang Siswa</td>
			        <td><center>
				    <a class='btn btn-success' title='Tampilkan Pelajaran' href=?module=nilai&act=tampiljadwal&id=$r[kode_kelas]><i class='fa fa-search'>&nbsp Tampilkan Pelajaran</i></a>
					</td>
				</tr>";
			  	$no++;
		    }

			break;

			case "tampiljadwal":
				$kelas = mysql_query("SELECT * FROM tbl_kelas where kode_kelas='$_GET[id]'");
				$k = mysql_fetch_array($kelas);
				echo "
					<div style='padding:1% 6% 0 5%;' class='row-fluid'>
				        <div class='col-lg-12 text-center'>
				            <div class='panel panel-default'>
				                <div class='panel-body'>
				                	<div class='alert alert-info' align='left'>Semua data Jadwal Pelajaran Di Kelas $k[nama_kelas]</div><hr>
										<table class='table table-hover' style='width: 100%; font-size:14px;' align='center'>
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
									</div>
								</div>
							</div>
						</div>";
										    
						
					    	$tampil = mysql_query("SELECT * FROM tbl_jadwal a 
					    		JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas 
					    			JOIN tbl_guru c ON a.nip=c.nip 
					    				JOIN tbl_pelajaran d ON a.kode_pelajaran=d.kode_pelajaran
					    					where a.kode_kelas='$_GET[id]' AND a.nip='$_SESSION[id_admin]' ORDER BY a.id_jadwal ASC");
						
						  	$tampil = mysql_query("SELECT * FROM tbl_jadwal a 
								JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas 
									JOIN tbl_guru c ON a.nip=c.nip 
										JOIN tbl_pelajaran d ON a.kode_pelajaran=d.kode_pelajaran
											where a.kode_kelas='$_GET[id]' ORDER BY a.id_jadwal ASC");
						
					    $no = $posisi+1;
						while($r=mysql_fetch_array($tampil)){
						echo "
							<tr bgcolor=$warna>
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
								</td>
							</tr>";
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
									<div style='padding:1% 6% 0 5%;' class='row-fluid'>
										<div class='col-lg-12 text-center'>
											<div class='panel panel-default'>
											    <div class='panel-body'>
											        <div class='alert alert-info' align='left'>Semua Data Nilai Siswa di Kelas $k[nama_kelas] - Tahun $_GET[tahun] - Semester $_GET[semester] - Mata Pelajaran $m[nama_pelajaran]</div><hr>";
															         
													echo "
														<table class='table table-hover' style='width: 100%; font-size:14px;' align='center'>
													        <tr style='background:#e3e3e3; border:1px solid #cecece;'>
																<th>No</th>
																<th>NIPD</th>
																<th>Nama Siswa</th>
																<th>Nilai Harian</th>
																<th>Nilai Tugas</th>
																<th>Nilai UTS</th>
																<th>Nilai UAS</th>
															</tr>";
										    
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
																			
												<a style='float:right; margin-right:10px; margin-top:-30px;' class='btn btn-default' href='nilai_harian.php?id_nilai=$n[id_nilai]' data-id='$n[id_nilai]'><i class='fa fa-plus-circle'></i></a>
											<td>
												<input style='width:78%' type='text' value='$ht2[nilai]' class=form-control disabled>

												<a style='float:right; margin-right:10px; margin-top:-30px;' class='btn btn-default' href='nilai_tugas.php?id_nilai=$n[id_nilai]' data-id='$n[id_nilai]'><i class='fa fa-plus-circle'></i></a>";

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
											    
										$jmldata = mysql_num_rows(mysql_query("SELECT * FROM tbl_siswa"));

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

	                </div>
	            </div>
	        </div>
	    </div>
<br>
<!-- Content -->

<!-- Footer -->
<footer>
	<div style="padding:1% 6% 0 5%;" class="row-fluid">
        <div class="col-lg-12 text-center">
            <div class="panel panel-default">
                <div class="panel-body">
                	<center style="background:#0282af; padding:10px; color:#000; font-size:14px; margin-bottom:3px; border-top:5px solid #cecece">
                    <p><b><i>Copyright &copy; 2017 SMP N 2 Patikraja</i></b></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->