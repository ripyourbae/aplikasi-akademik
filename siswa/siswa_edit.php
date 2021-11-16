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
        <div class="row-fluid">
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
                        if ($_SESSION[level]=='siswa'){
                        }
                    ?>
                    <li class="nav pull-left"><a href="#"><b> Selamat Datang - </b><b style='color:blue'><?php echo "$_SESSION[namasiswa]"; ?> (Siswa)</b></a></li>

                    <li>
                        <a href="index.php" class="fa fa-home"><b>&nbsp Beranda</b></a>
                    </li>
                    <li class="active">
                        <a href="siswa_edit.php" class="fa fa-users"><b>&nbsp Data Siswa</b></a>
                    </li>
                    <li>
                        <a href="cetakjadwal_tampil.php" class="fa fa-print"><b>&nbsp Cetak Jadwal Pelajaran</b></a>
                    </li>
                    <li>
                        <a target='BLANK' href="print_transkrip.php" class="fa fa-print"><b>&nbsp Cetak Transkrip</b></a>
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
	<?php
		include "../config/koneksi.php";
		$query = mysql_query("SELECT * FROM tbl_siswa where nipd='$_SESSION[nipd]'");
		$qry = mysql_fetch_array($query);
		echo "
			<div style='padding:1% 6% 0 5%;' class='row-fluid'>
	        <div class='col-lg-12 text-left'>
	            <div class='panel panel-default'>
	                <div class='panel-body'>
						<div class='alert alert-info'>Edit Data Siswa</div><hr><br>
						<form method=post action=siswa_update.php enctype=multipart/form-data>
							<input type='hidden' name='id_siswa' id='id_siswa' value='$qry[id_siswa]'>
							
			              		<table class='table table-hover table-striped' align=center style='width:80%;'>
					         		<tr>
				                        <td height=42 colspan=3 class='alert alert-warning' align=center><h3><b>Data Siswa ($qry[nama_siswa])</b></h></td>
				                    </tr>
				                    <tr>
				                    	<td><br><br></td>
				                    </tr>
					         		<tr>
						         		<td>Nama Siswa</td>
						         		<td>:</td>
						         		<td><input type=text name=nama_siswa id=nama_siswa class=form-control value='$qry[nama_siswa]' disabled></td>
					         		</tr>
					         		<tr>
						         		<td>NIPD</td>
						         		<td>:</td>
						         		<td><input type=number name=nipd id=nipd class=form-control value='$qry[nipd]' style=background:#ffc0c0 disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Password</td>
					         			<td>:</td>
					         			<td><input type=password name=password id=password class=form-control value='$qry[password]' style=background:#ffc0c0></td>
					         		</tr>
					         		<tr>
						         		<td>Jenis Kelamin</td>
						         		<td>:</td>
						         		<td>";
				                            if ($qry[jenis_kelamin]=='Laki-laki'){
				                                echo "<input type='radio' name='jenis_kelamin' class='required' value='Laki-laki' checked disabled> Laki-laki  
				                                      <input type='radio' name='jenis_kelamin' class='required' value='Perempuan' disabled> Perempuan ";
				                            }else{
				                                echo "<input type='radio' name='jenis_kelamin' class='required' value='Laki-laki' disabled> Laki-laki  
				                                      <input type='radio' name='jenis_kelamin' class='required' value='Perempuan' checked disabled> Perempuan ";
				                            }
				                echo "  </td>
					         		</tr>
					         		<tr>
					         			<td>NISN</td>
					         			<td>:</td>
					         			<td><input type=number name=nisn id=nisn class=form-control value='$qry[nisn]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Tempat, Tanggal Lahir</td>
					         			<td>:</td>
					         			<td>
					         				<input type=text name=tempat_lahir id=tempat_lahir class=form-control value='$qry[tempat_lahir]'>
					         				<input type=date name=tanggal_lahir id=tanggal_lahir class=form-control value='$qry[tanggal_lahir]'>
					         			</td>
					         		</tr>
					         		<tr>
					         			<td>NIK</td>
					         			<td>:</td>
					         			<td><input type=number name=nik id=nik class=form-control value='$qry[nik]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Agama</td>
					         			<td>:</td>
					         			<td><input type=text name=agama id=agama class=form-control value='$qry[agama]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Alamat Lengkap</td>
					         			<td>:</td>
					         			<td><input type=text name=alamat_lengkap id=alamat_lengkap class=form-control value='$qry[alamat_lengkap]'></td>
					         		</tr>
					         		<tr>
					         			<td>Kecamatan</td>
					         			<td>:</td>
					         			<td><input type=text name=kecamatan id=kecamatan class=form-control value='$qry[kecamatan]'></td>
					         		</tr>
					         		<tr>
					         			<td>Kabupaten</td>
					         			<td>:</td>
					         			<td><input type=text name=kabupaten id=kabupaten class=form-control value='$qry[kabupaten]'></td>
					         		</tr>
					         		<tr>
					         			<td>Provinsi</td>
					         			<td>:</td>
					         			<td><input type=text name=provinsi id=provinsi class=form-control value='$qry[provinsi]'></td>
					         		</tr>
					         		<tr>
					         			<td>Kode Pos</td>
					         			<td>:</td>
					         			<td><input type=number name=kode_pos id=kode_pos class=form-control value='$qry[kode_pos]'></td>
					         		</tr>
					         		<tr>
					         			<td>Jenis Tinggal</td>
					         			<td>:</td>
					         			<td><input type=text name=jenis_tinggal id=jenis_tinggal class=form-control value='$qry[jenis_tinggal]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Alat Transportasi</td>
					         			<td>:</td>
					         			<td><input type=text name=alat_transportasi id=alat_transportasi class=form-control value='$qry[alat_transportasi]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Nomor Telepon</td>
					         			<td>:</td>
					         			<td><input type=number name=telepon id=telepon class=form-control value='$qry[telepon]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Nomor HP</td>
					         			<td>:</td>
					         			<td><input type=number name=hp id=hp class=form-control value='$qry[hp]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Email</td>
					         			<td>:</td>
					         			<td><input type=text name=email id=email class=form-control value='$qry[email]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Kode Kelas</td>
					         			<td>:</td>
					         			<td>
					         				<select name='kode_kelas' class=form-control disabled> 
												<option value='0' selected>- Pilih Kelas -</option>"; 
													$kelas = mysql_query("SELECT * FROM tbl_kelas");
													while($a = mysql_fetch_array($kelas)){
														if ($a[kode_kelas] == $qry[kode_kelas]){
															echo "<option value='$a[kode_kelas]' selected>$a[kode_kelas] - $a[nama_kelas]</option>";
														}else{
															echo "<option value='$a[kode_kelas]'>$a[kode_kelas] - $a[nama_kelas]</option>";
														}
													}
											 echo "</select>
					         			</td>
					         		</tr>
					         		<tr>
					         			<td>Rombel Saat Ini</td>
					         			<td>:</td>
					         			<td>
					         				<select name='nama_kelas' class=form-control disabled> 
												<option value='0' selected>- Pilih Kelas -</option>"; 
													$kelas = mysql_query("SELECT * FROM tbl_kelas");
													while($z = mysql_fetch_array($kelas)){
														if ($z[kode_kelas] == $qry[kode_kelas]){
															echo "<option value='$z[kode_kelas]' selected>$z[nama_kelas]</option>";
														}else{
															echo "<option value='$z[kode_kelas]'>$z[nama_kelas]</option>";
														}
													}
											 echo "</select>
					         			</td>
					         		</tr>
					         		<tr>
					         			<td>SKHUN</td>
					         			<td>:</td>
					         			<td><input type=text name=skhun id=skhun class=form-control value='$qry[skhun]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Penerima KPS</td>
					         			<td>:</td>
					         			<td><input type=text name=penerima_kps id=penerima_kps class=form-control value='$qry[penerima_kps]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Nomor KPS</td>
					         			<td>:</td>
					         			<td><input type=number name=no_kps id=no_kps class=form-control value='$qry[no_kps]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td></td>
					         		</tr>";
			?>
					         		<tr>
					         			<td colspan=3 class="alert alert-info" align="left">Data Ayah</td>
					         		</tr>
			<?php
									echo"
					         		<tr>
					         			<td>Nama Ayah</td>
					         			<td>:</td>
					         			<td><input type=text name=nama_ayah id=nama_ayah class=form-control value='$qry[nama_ayah]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Tahun Lahir Ayah</td>
					         			<td>:</td>
					         			<td>
					         				<input type=text name=tahun_lahir_ayah id=tahun_lahir_ayah class=form-control value='$qry[tahun_lahir_ayah]' disabled>
					         			</td>
					         		</tr>
					         		<tr>
					         			<td>Pendidikan Ayah</td>
					         			<td>:</td>
					         			<td><input type=text name=pendidikan_ayah id=pendidikan_ayah class=form-control value='$qry[pendidikan_ayah]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Pekerjaan Ayah</td>
					         			<td>:</td>
					         			<td><input type=text name=pekerjaan_ayah id=pekerjaan_ayah class=form-control value='$qry[pekerjaan_ayah]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Penghasilan Ayah</td>
					         			<td>:</td>
					         			<td><input type=text name=penghasilan_ayah id=penghasilan_ayah class=form-control value='$qry[penghasilan_ayah]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>NIK Ayah</td>
					         			<td>:</td>
					         			<td><input type=number name=nik_ayah id=nik_ayah class=form-control value='$qry[nik_ayah]' disabled></td>
					         		</tr>";
			?>
					         		<tr>
					         			<td  colspan="3" class="alert alert-info" align="left">Data Ibu</td>
					         		</tr>
			<?php
									echo"
					         		<tr>
					         			<td>Nama Ibu</td>
					         			<td>:</td>
					         			<td><input type=text name=nama_ibu id=nama_ibu class=form-control value='$qry[nama_ibu]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Tahun Lahir Ibu</td>
					         			<td>:</td>
					         			<td>
					         				<input type=text name=tahun_lahir_ibu id=tahun_lahir_ibu class=form-control value='$qry[tahun_lahir_ibu]' disabled>
					         			</td>
					         		</tr>
					         		<tr>
					         			<td>Pendidikan Ibu</td>
					         			<td>:</td>
					         			<td><input type=text name=pendidikan_ibu id=pendidikan_ibu class=form-control value='$qry[pendidikan_ibu]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Pekerjaan Ibu</td>
					         			<td>:</td>
					         			<td><input type=text name=pekerjaan_ibu id=pekerjaan_ibu class=form-control value='$qry[pekerjaan_ibu]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Penghasilan Ibu</td>
					         			<td>:</td>
					         			<td><input type=text name=penghasilan_ibu id=penghasilan_ibu class=form-control value='$qry[penghasilan_ibu]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>NIK Ibu</td>
					         			<td>:</td>
					         			<td><input type=number name=nik_ibu id=nik_ibu class=form-control value='$qry[nik_ibu]' disabled></td>
					         		</tr>";
			?>
					         		<tr>
					         			<td align=left colspan=3 class="alert alert-info">Data Wali</td>
					         		</tr>
			<?php
									echo"
					         		<tr>
					         			<td>Nama Wali</td>
					         			<td>:</td>
					         			<td><input type=text name=nama_wali id=nama_wali class=form-control value='$qry[nama_wali]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Tahun Lahir Wali</td>
					         			<td>:</td>
					         			<td>
					         				<input type=text name=tahun_lahir_wali id=tahun_lahir_wali class=form-control value='$qry[tahun_lahir_wali]' disabled>
					         			</td>
					         		</tr>
					         		<tr>
					         			<td>Pendidikan Wali</td>
					         			<td>:</td>
					         			<td><input type=text name=pendidikan_wali id=pendidikan_wali class=form-control value='$qry[pendidikan_wali]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Pekerjaan Wali</td>
					         			<td>:</td>
					         			<td><input type=text name=pekerjaan_wali id=pekerjaan_wali class=form-control value='$qry[pekerjaan_wali]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Penghasilan Wali</td>
					         			<td>:</td>
					         			<td><input type=text name=penghasilan_wali id=penghasilan_wali class=form-control value='$qry[penghasilan_wali]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>NIK Wali</td>
					         			<td>:</td>
					         			<td><input type=number name=nik_wali id=nik_wali class=form-control value='$qry[nik_wali]' disabled></td>
					         		</tr>";
			?>
					         		<tr>
					         			<td colspan=3 class="alert alert-info" align=left>Data Pelengkap</td>
					         		</tr>
			<?php
								echo"
					         		<tr>
					         			<td>No. Peserta UN</td>
					         			<td>:</td>
					         			<td><input type=number name=no_peserta_un id=no_peserta_un class=form-control value='$qry[no_peserta_un]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>No. Ijazah</td>
					         			<td>:</td>
					         			<td><input type=text name=no_ijazah id=no_ijazah class=form-control value='$qry[no_ijazah]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Penerima KIP</td>
					         			<td>:</td>
					         			<td>
					         				<input type=text name=penerima_kip id=penerima_kip class=form-control value='$qry[penerima_kip]' disabled>
					         			</td>
					         		</tr>
					         		<tr>
					         			<td>Nama di KIP</td>
					         			<td>:</td>
					         			<td><input type=text name=nama_di_kip id=nama_di_kip class=form-control value='$qry[nama_di_kip]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Nomor KKS</td>
					         			<td>:</td>
					         			<td><input type=number name=nomor_kks id=nomor_kks class=form-control value='$qry[nomor_kks]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>No. Registrasi Akta Lahir</td>
					         			<td>:</td>
					         			<td><input type=text name=no_reg_akta_lahir id=no_reg_akta_lahir class=form-control value='$qry[no_reg_akta_lahir]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Bank</td>
					         			<td>:</td>
					         			<td><input type=text name=bank id=bank class=form-control value='$qry[bank]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>No. Rekening</td>
					         			<td>:</td>
					         			<td><input type=number name=nomor_rekening id=nomor_rekening class=form-control value='$qry[nomor_rekening]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Rekening Atas Nama</td>
					         			<td>:</td>
					         			<td><input type=text name=rekening_atas_nama id=rekening_atas_nama class=form-control value='$qry[rekening_atas_nama]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Layak PIP(Usulan Dari Sekolah)</td>
					         			<td>:</td>
					         			<td><input type=text name=layak_pip id=layak_pip class=form-control value='$qry[layak_pip]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Alasan Layak PIP</td>
					         			<td>:</td>
					         			<td><input type=text name=alasan_layak_pip id=alasan_layak_pip class=form-control value='$qry[alasan_layak_pip]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Kebutuhan Khusus</td>
					         			<td>:</td>
					         			<td>
					         				<input type=text name=kebutuhan_khusus id=kebutuhan_khusus class=form-control value='$qry[kebutuhan_khusus]' disabled>
					         			</td>
					         		</tr>
					         		<tr>
					         			<td>Sekolah Asal</td>
					         			<td>:</td>
					         			<td><input type=text name=sekolah_asal id=sekolah_asal class=form-control value='$qry[sekolah_asal]' disabled></td>
					         		</tr>
					         		<tr>
					         			<td>Foto</td>
					         			<td>:</td>
					         			<td>
					         				<img src='../siswa/foto_siswa/$qry[foto]' height=150><br><br>
					         				<input type=file name=foto id=foto class='form-control' disabled>
					         			</td>
					         		</tr>
									<tr>
										<td colspan=3 align=center>
										<br>
											<input type=submit class='btn btn-primary' value=Update>
											<input type=button value=Kembali onclick=self.history.back() class='btn btn-primary'>
										</td>
									</tr>
								</table>
							</div>
						</form>";
	?>
					</div>
				</div>
			</div>
			</div>
<!-- Content -->

<!-- Footer -->
<footer>
	<div style="padding:1% 6% 0 5%;" class="row-fluid">
        <div class="col-lg-12 text-center">
            <div class="panel panel-default">
                <div class="panel-body">
                	<center style="background:#0282af; padding:10px; color:#000; font-size:14px; margin-bottom:3px; border-top:5px solid #cecece">
                    <p><b>Copyright &copy; 2017 SMP N 2 Patikraja</b></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->
