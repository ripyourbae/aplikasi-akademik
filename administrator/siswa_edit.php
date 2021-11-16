<?php include "header.php"; ?>
	<?php
		include "../config/koneksi.php";
		$query = mysql_query("SELECT * FROM tbl_siswa where id_siswa='$_GET[id_siswa]'");
		$qry = mysql_fetch_array($query);
		echo "
			<div class='alert alert-info'>Edit Data Siswa</div><hr><br>
			<form method=post action=siswa_update.php enctype=multipart/form-data>
				<input type='hidden' name='id_siswa' id='id_siswa' value='$qry[id_siswa]'>
				<div class=table-responsive>
              		<table class='table table-hover table-striped' align=center>
		         		<tr>
	                        <td height=42 colspan=3 class='alert alert-warning' align=center><h3><b>Data Siswa ($qry[nama_siswa])</b></h></td>
	                    </tr>
	                    <tr>
	                    	<td><br><br></td>
	                    </tr>
		         		<tr>
			         		<td>Nama Siswa</td>
			         		<td>:</td>
			         		<td><input type=text name=nama_siswa id=nama_siswa class=form-control value='$qry[nama_siswa]'></td>
		         		</tr>
		         		<tr>
			         		<td>NIPD</td>
			         		<td>:</td>
			         		<td><input type=number name=nipd id=nipd class=form-control value='$qry[nipd]' style=background:#ffc0c0></td>
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
	                                echo "<input type='radio' name='jenis_kelamin' class='required' value='Laki-laki' checked> Laki-laki  
	                                      <input type='radio' name='jenis_kelamin' class='required' value='Perempuan'> Perempuan ";
	                            }else{
	                                echo "<input type='radio' name='jenis_kelamin' class='required' value='Laki-laki'> Laki-laki  
	                                      <input type='radio' name='jenis_kelamin' class='required' value='Perempuan' checked> Perempuan ";
	                            }
	                echo "  </td>
		         		</tr>
		         		<tr>
		         			<td>NISN</td>
		         			<td>:</td>
		         			<td><input type=number name=nisn id=nisn class=form-control value='$qry[nisn]'></td>
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
		         			<td><input type=number name=nik id=nik class=form-control value='$qry[nik]'></td>
		         		</tr>
		         		<tr>
		         			<td>Agama</td>
		         			<td>:</td>
		         			<td><input type=text name=agama id=agama class=form-control value='$qry[agama]'></td>
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
		         			<td><input type=text name=jenis_tinggal id=jenis_tinggal class=form-control value='$qry[jenis_tinggal]'></td>
		         		</tr>
		         		<tr>
		         			<td>Alat Transportasi</td>
		         			<td>:</td>
		         			<td><input type=text name=alat_transportasi id=alat_transportasi class=form-control value='$qry[alat_transportasi]'></td>
		         		</tr>
		         		<tr>
		         			<td>Nomor Telepon</td>
		         			<td>:</td>
		         			<td><input type=number name=telepon id=telepon class=form-control value='$qry[telepon]'></td>
		         		</tr>
		         		<tr>
		         			<td>Nomor HP</td>
		         			<td>:</td>
		         			<td><input type=number name=hp id=hp class=form-control value='$qry[hp]'></td>
		         		</tr>
		         		<tr>
		         			<td>Email</td>
		         			<td>:</td>
		         			<td><input type=text name=email id=email class=form-control value='$qry[email]'></td>
		         		</tr>
		         		<tr>
		         			<td>Kode Kelas</td>
		         			<td>:</td>
		         			<td>
		         				<select name='kode_kelas' class=form-control> 
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
		         				<select name='nama_kelas' class=form-control> 
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
		         			<td><input type=text name=skhun id=skhun class=form-control value='$qry[skhun]'></td>
		         		</tr>
		         		<tr>
		         			<td>Penerima KPS</td>
		         			<td>:</td>
		         			<td><input type=text name=penerima_kps id=penerima_kps class=form-control value='$qry[penerima_kps]'></td>
		         		</tr>
		         		<tr>
		         			<td>Nomor KPS</td>
		         			<td>:</td>
		         			<td><input type=number name=no_kps id=no_kps class=form-control value='$qry[no_kps]'></td>
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
		         			<td><input type=text name=nama_ayah id=nama_ayah class=form-control value='$qry[nama_ayah]'></td>
		         		</tr>
		         		<tr>
		         			<td>Tahun Lahir Ayah</td>
		         			<td>:</td>
		         			<td>
		         				<input type=text name=tahun_lahir_ayah id=tahun_lahir_ayah class=form-control value='$qry[tahun_lahir_ayah]'>
		         			</td>
		         		</tr>
		         		<tr>
		         			<td>Pendidikan Ayah</td>
		         			<td>:</td>
		         			<td><input type=text name=pendidikan_ayah id=pendidikan_ayah class=form-control value='$qry[pendidikan_ayah]'></td>
		         		</tr>
		         		<tr>
		         			<td>Pekerjaan Ayah</td>
		         			<td>:</td>
		         			<td><input type=text name=pekerjaan_ayah id=pekerjaan_ayah class=form-control value='$qry[pekerjaan_ayah]'></td>
		         		</tr>
		         		<tr>
		         			<td>Penghasilan Ayah</td>
		         			<td>:</td>
		         			<td><input type=text name=penghasilan_ayah id=penghasilan_ayah class=form-control value='$qry[penghasilan_ayah]'></td>
		         		</tr>
		         		<tr>
		         			<td>NIK Ayah</td>
		         			<td>:</td>
		         			<td><input type=number name=nik_ayah id=nik_ayah class=form-control value='$qry[nik_ayah]'></td>
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
		         			<td><input type=text name=nama_ibu id=nama_ibu class=form-control value='$qry[nama_ibu]'></td>
		         		</tr>
		         		<tr>
		         			<td>Tahun Lahir Ibu</td>
		         			<td>:</td>
		         			<td>
		         				<input type=text name=tahun_lahir_ibu id=tahun_lahir_ibu class=form-control value='$qry[tahun_lahir_ibu]'>
		         			</td>
		         		</tr>
		         		<tr>
		         			<td>Pendidikan Ibu</td>
		         			<td>:</td>
		         			<td><input type=text name=pendidikan_ibu id=pendidikan_ibu class=form-control value='$qry[pendidikan_ibu]'></td>
		         		</tr>
		         		<tr>
		         			<td>Pekerjaan Ibu</td>
		         			<td>:</td>
		         			<td><input type=text name=pekerjaan_ibu id=pekerjaan_ibu class=form-control value='$qry[pekerjaan_ibu]'></td>
		         		</tr>
		         		<tr>
		         			<td>Penghasilan Ibu</td>
		         			<td>:</td>
		         			<td><input type=text name=penghasilan_ibu id=penghasilan_ibu class=form-control value='$qry[penghasilan_ibu]'></td>
		         		</tr>
		         		<tr>
		         			<td>NIK Ibu</td>
		         			<td>:</td>
		         			<td><input type=number name=nik_ibu id=nik_ibu class=form-control value='$qry[nik_ibu]'></td>
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
		         			<td><input type=text name=nama_wali id=nama_wali class=form-control value='$qry[nama_wali]'></td>
		         		</tr>
		         		<tr>
		         			<td>Tahun Lahir Wali</td>
		         			<td>:</td>
		         			<td>
		         				<input type=text name=tahun_lahir_wali id=tahun_lahir_wali class=form-control value='$qry[tahun_lahir_wali]'>
		         			</td>
		         		</tr>
		         		<tr>
		         			<td>Pendidikan Wali</td>
		         			<td>:</td>
		         			<td><input type=text name=pendidikan_wali id=pendidikan_wali class=form-control value='$qry[pendidikan_wali]'></td>
		         		</tr>
		         		<tr>
		         			<td>Pekerjaan Wali</td>
		         			<td>:</td>
		         			<td><input type=text name=pekerjaan_wali id=pekerjaan_wali class=form-control value='$qry[pekerjaan_wali]'></td>
		         		</tr>
		         		<tr>
		         			<td>Penghasilan Wali</td>
		         			<td>:</td>
		         			<td><input type=text name=penghasilan_wali id=penghasilan_wali class=form-control value='$qry[penghasilan_wali]'></td>
		         		</tr>
		         		<tr>
		         			<td>NIK Wali</td>
		         			<td>:</td>
		         			<td><input type=number name=nik_wali id=nik_wali class=form-control value='$qry[nik_wali]'></td>
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
		         			<td><input type=number name=no_peserta_un id=no_peserta_un class=form-control value='$qry[no_peserta_un]'></td>
		         		</tr>
		         		<tr>
		         			<td>No. Ijazah</td>
		         			<td>:</td>
		         			<td><input type=text name=no_ijazah id=no_ijazah class=form-control value='$qry[no_ijazah]'></td>
		         		</tr>
		         		<tr>
		         			<td>Penerima KIP</td>
		         			<td>:</td>
		         			<td>
		         				<input type=text name=penerima_kip id=penerima_kip class=form-control value='$qry[penerima_kip]'>
		         			</td>
		         		</tr>
		         		<tr>
		         			<td>Nama di KIP</td>
		         			<td>:</td>
		         			<td><input type=text name=nama_di_kip id=nama_di_kip class=form-control value='$qry[nama_di_kip]'></td>
		         		</tr>
		         		<tr>
		         			<td>Nomor KKS</td>
		         			<td>:</td>
		         			<td><input type=number name=nomor_kks id=nomor_kks class=form-control value='$qry[nomor_kks]'></td>
		         		</tr>
		         		<tr>
		         			<td>No. Registrasi Akta Lahir</td>
		         			<td>:</td>
		         			<td><input type=text name=no_reg_akta_lahir id=no_reg_akta_lahir class=form-control value='$qry[no_reg_akta_lahir]'></td>
		         		</tr>
		         		<tr>
		         			<td>Bank</td>
		         			<td>:</td>
		         			<td><input type=text name=bank id=bank class=form-control value='$qry[bank]'></td>
		         		</tr>
		         		<tr>
		         			<td>No. Rekening</td>
		         			<td>:</td>
		         			<td><input type=number name=nomor_rekening id=nomor_rekening class=form-control value='$qry[nomor_rekening]'></td>
		         		</tr>
		         		<tr>
		         			<td>Rekening Atas Nama</td>
		         			<td>:</td>
		         			<td><input type=text name=rekening_atas_nama id=rekening_atas_nama class=form-control value='$qry[rekening_atas_nama]'></td>
		         		</tr>
		         		<tr>
		         			<td>Layak PIP(Usulan Dari Sekolah)</td>
		         			<td>:</td>
		         			<td><input type=text name=layak_pip id=layak_pip class=form-control value='$qry[layak_pip]'></td>
		         		</tr>
		         		<tr>
		         			<td>Alasan Layak PIP</td>
		         			<td>:</td>
		         			<td><input type=text name=alasan_layak_pip id=alasan_layak_pip class=form-control value='$qry[alasan_layak_pip]'></td>
		         		</tr>
		         		<tr>
		         			<td>Kebutuhan Khusus</td>
		         			<td>:</td>
		         			<td>
		         				<input type=text name=kebutuhan_khusus id=kebutuhan_khusus class=form-control value='$qry[kebutuhan_khusus]'>
		         			</td>
		         		</tr>
		         		<tr>
		         			<td>Sekolah Asal</td>
		         			<td>:</td>
		         			<td><input type=text name=sekolah_asal id=sekolah_asal class=form-control value='$qry[sekolah_asal]'></td>
		         		</tr>
		         		<tr>
		         			<td>Foto</td>
		         			<td>:</td>
		         			<td>
		         				<img src='../siswa/foto_siswa/$qry[foto]' height=150><br><br>
		         				<input type=file name=foto id=foto class='form-control'>
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
<?php include "footer.php"; ?>
