<?php include "header.php"; ?>
	<?php 
		include "../config/koneksi.php";
		$qry = mysql_query("SELECT * FROM tbl_siswa where id_siswa='$_GET[id_siswa]'");
		$a = mysql_fetch_array($qry);

		echo "
			<div class=table-responsive>
				<h4 class='alert alert-warning'>Data Siswa <u>$a[nama_siswa]</u></h4><hr><br>
				<center>
					<img src='../siswa/foto_siswa/$a[foto]' height=150><br><br>
				</center>
              	<table class='table table-hover table-striped' align=center>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td>$a[nama_siswa]</td>
					</tr>
					<tr>
						<td>NIPD</td>
						<td>:</td>
						<td>$a[nipd]</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>$a[jenis_kelamin]</td>
					</tr>
					<tr>
						<td>NISN</td>
						<td>:</td>
						<td>$a[nisn]</td>
					</tr>
					<tr>
						<td>Tempat, Tanggal Lahir</td>
						<td>:</td>
						<td>$a[tempat_lahir], $a[tanggal_lahir]</td>
					</tr>
					<tr>
						<td>NIK</td>
						<td>:</td>
						<td>$a[nik]</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td>$a[agama]</td>
					</tr>
					<tr>
						<td>Alamat Lengkap</td>
						<td>:</td>
						<td>$a[alamat_lengkap]</td>
					</tr>
					<tr>
						<td>Kecamatan</td>
						<td>:</td>
						<td>$a[kecamatan]</td>
					</tr>
					<tr>
						<td>Kabupaten</td>
						<td>:</td>
						<td>$a[kabupaten]</td>
					</tr>
					<tr>
						<td>Provinsi</td>
						<td>:</td>
						<td>$a[provinsi]</td>
					</tr>
					<tr>
						<td>Kode Pos</td>
						<td>:</td>
						<td>$a[kode_pos]</td>
					</tr>
					<tr>
						<td>Jenis Tinggal</td>
						<td>:</td>
						<td>$a[jenis_tinggal]</td>
					</tr>
					<tr>
						<td>Alat Transportasi</td>
						<td>:</td>
						<td>$a[alat_transportasi]</td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td>:</td>
						<td>$a[telepon]</td>
					</tr>
					<tr>
						<td>HP</td>
						<td>:</td>
						<td>$a[hp]</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td>$a[email]</td>
					</tr>
					<tr>
						<td>SKHUN</td>
						<td>:</td>
						<td>$a[skhun]</td>
					</tr>
					<tr>
						<td>Penerima KPS</td>
						<td>:</td>
						<td>$a[penerima_kps]</td>
					</tr>
					<tr>
						<td>No. KPS</td>
						<td>:</td>
						<td>$a[no_kps]</td>
					</tr>
					<tr>
						<td>Nama Ayah</td>
						<td>:</td>
						<td>$a[nama_ayah]</td>
					</tr>
					<tr>
						<td>Tahun Lahir Ayah</td>
						<td>:</td>
						<td>$a[tahun_lahir_ayah]</td>
					</tr>
					<tr>
						<td>Pendidikan Ayah</td>
						<td>:</td>
						<td>$a[pendidikan_ayah]</td>
					</tr>
					<tr>
						<td>Pekerjaan Ayah</td>
						<td>:</td>
						<td>$a[pekerjaan_ayah]</td>
					</tr>
					<tr>
						<td>Penghasilan Ayah</td>
						<td>:</td>
						<td>$a[penghasilan_ayah]</td>
					</tr>
					<tr>
						<td>NIK Ayah</td>
						<td>:</td>
						<td>$a[nik_ayah]</td>
					</tr>
					<tr>
						<td>Nama Ibu</td>
						<td>:</td>
						<td>$a[nama_ibu]</td>
					</tr>
					<tr>
						<td>Tahun Lahir Ibu</td>
						<td>:</td>
						<td>$a[tahun_lahir_ibu]</td>
					</tr>
					<tr>
						<td>Pendidikan Ibu</td>
						<td>:</td>
						<td>$a[pendidikan_ibu]</td>
					</tr>
					<tr>
						<td>Pekerjaan Ibu</td>
						<td>:</td>
						<td>$a[pekerjaan_ibu]</td>
					</tr>
					<tr>
						<td>NIK Ibu</td>
						<td>:</td>
						<td>$a[nik_ibu]</td>
					</tr>
					<tr>
						<td>Nama Wali</td>
						<td>:</td>
						<td>$a[nama_wali]</td>
					</tr>
					<tr>
						<td>Tahun Lahir Wali</td>
						<td>:</td>
						<td>$a[tahun_lahir_wali]</td>
					</tr>
					<tr>
						<td>Pendidikan Wali</td>
						<td>:</td>
						<td>$a[pendidikan_wali]</td>
					</tr>
					<tr>
						<td>Pekerjaan Wali</td>
						<td>:</td>
						<td>$a[pekerjaan_wali]</td>
					</tr>
					<tr>
						<td>Penghasilan Wali</td>
						<td>:</td>
						<td>$a[penghasilan_wali]</td>
					</tr>
					<tr>
						<td>NIK Wali</td>
						<td>:</td>
						<td>$a[nik_wali]</td>
					</tr>
					<tr>
						<td>Rombel Saat Ini</td>
						<td>:</td>
						<td>$a[rombel_saat_ini]</td>
					</tr>
					<tr>
						<td>Nomor Peserta UN</td>
						<td>:</td>
						<td>$a[no_peserta_un]</td>
					</tr>
					<tr>
						<td>Nomor Ijazah</td>
						<td>:</td>
						<td>$a[no_ijazah]</td>
					</tr>
					<tr>
						<td>Penerima KIP</td>
						<td>:</td>
						<td>$a[penerima_kip]</td>
					</tr>
					<tr>
						<td>Nomor KIP</td>
						<td>:</td>
						<td>$a[nomor_kip]</td>
					</tr>
					<tr>
						<td>Nama Di KIP</td>
						<td>:</td>
						<td>$a[nama_di_kip]</td>
					</tr>
					<tr>
						<td>Nomor KKS</td>
						<td>:</td>
						<td>$a[nomor_kks]</td>
					</tr>
					<tr>
						<td>No. Registrasi Akta Lahir</td>
						<td>:</td>
						<td>$a[no_reg_akta_lahir]</td>
					</tr>
					<tr>
						<td>BANK</td>
						<td>:</td>
						<td>$a[bank]</td>
					</tr>
					<tr>
						<td>Nomor Rekening</td>
						<td>:</td>
						<td>$a[nomor_rekening]</td>
					</tr>
					<tr>
						<td>Rekening Atas Nama</td>
						<td>:</td>
						<td>$a[rekening_atas_nama]</td>
					</tr>
					<tr>
						<td>Layak PIP(Usul dari sekolah)</td>
						<td>:</td>
						<td>$a[layak_pip]</td>
					</tr>
					<tr>
						<td>Alasan Layak PIP</td>
						<td>:</td>
						<td>$a[alasan_layak_pip]</td>
					</tr>
					<tr>
						<td>Kebutuhan Khusus</td>
						<td>:</td>
						<td>$a[kebutuhan_khusus]</td>
					</tr>
					<tr>
						<td>Sekolah Asal</td>
						<td>:</td>
						<td>$a[sekolah_asal]</td>
					</tr>
					<tr>
						<td colspan=3 align=center>
						<br>
							<input type=button value=Kembali class='btn btn-primary' onclick=window.location='siswa_lihat.php'>
						</td>
					</tr>
				</table>
			</div>";
	?>
<?php include "footer.php"; ?>