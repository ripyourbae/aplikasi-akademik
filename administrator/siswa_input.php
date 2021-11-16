<?php include "header.php"; ?>

	<script type="text/javascript">
        
        function cek_data() {
            if (siswa_input.nipd.value=="") {
                alert("NIPD tidak boleh kosong");
                siswa_input.nipd.focus()
                return false
            }
        return true
        }
    </script>

	<form method="post" action="siswa_simpan.php" name="siswa_input" onSubmit="return cek_data()" enctype="multipart/form-data">
		<h3 class="alert alert-warning" align="center">Input Data Siswa</h3><br>
		<div class=table-responsive>
			<div class="form-group">
				<table class="table table-hover table-striped" align="center">
	         		<div class="alert alert-info">
		         		Data Diri
		         	</div>
	         		<tr>
		         		<td>Nama Siswa</td>
		         		<td>:</td>
		         		<td><input type="text" name="nama_siswa" id="nama_siswa" class="form-control"></td>
	         		</tr>
	         		<tr>
		         		<td>NIPD</td>
		         		<td>:</td>
		         		<td><input type="number" name="nipd" id="nipd" class="form-control" style="background:#ffc0c0"></td>
	         		</tr>
	         		<tr>
	         			<td>Password</td>
	         			<td>:</td>
	         			<td><input type="password" name="password" id="password" class="form-control" style="background:#ffc0c0"></td>
	         		</tr>
	         		<tr>
		         		<td>Jenis Kelamin</td>
		         		<td>:</td>
		         		<td>
		         			<input type='radio' name='jenis_kelamin' value='Laki-laki' checked> Laki-laki  
                            <input type='radio' name='jenis_kelamin' value='Perempuan'> Perempuan
		         		</td>
	         		</tr>
	         		<tr>
	         			<td>NISN</td>
	         			<td>:</td>
	         			<td><input type="number" name="nisn" id="nisn" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Tempat, Tanggal Lahir</td>
	         			<td>:</td>
	         			<td>
	         				<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
	         				<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>NIK</td>
	         			<td>:</td>
	         			<td><input type="number" name="nik" id="nik" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Agama</td>
	         			<td>:</td>
	         			<td>
	         				<select name="agama" id="agama" class="form-control">
	         					<option value="Islam">Islam</option>
	         					<option value="Kristen">Kristen</option>
	         					<option value="Katholik">Katholik</option>
	         					<option value="Hindu">Hindu</option>
	         					<option value="Budha">Budha</option>
	         					<option value="Konghuchu">Konghuchu</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Alamat Lengkap</td>
	         			<td>:</td>
	         			<td><input type="textarea" name="alamat_lengkap" id="alamat_lengkap" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Kecamatan</td>
	         			<td>:</td>
	         			<td><input type="text" name="kecamatan" id="kecamatan" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Kabupaten</td>
	         			<td>:</td>
	         			<td><input type="text" name="kabupaten" id="kabupaten" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Provinsi</td>
	         			<td>:</td>
	         			<td>
	         				<select name="provinsi" id="provinsi" class="form-control">
	         					<option value="Aceh">Aceh</option>
	         					<option value="Sumut">Sumatra Utara</option>
	         					<option value="Sumbar">Sumatra Barat</option>
	         					<option value="Riau">Riau</option>
	         					<option value="Kep_riau">Kepulauan Riau</option>
	         					<option value="Jambi">Jambi</option>
	         					<option value="Bengkulu">Bengkulu</option>
	         					<option value="Lampung">Lampung</option>
	         					<option value="DKI">DKI Jakarta</option>
	         					<option value="Jabar">Jawa Barat</option>
	         					<option value="Jateng">Jawa Tengah</option>
	         					<option value="Banten">Banten</option>
	         					<option value="Diy">Daerah Istimewa Yogyakarta</option>
	         					<option value="Jatim">Jawa Timur</option>
	         					<option value="Bali">Bali</option>
	         					<option value="NTB">Nusa tenggara Barat</option>
	         					<option value="NTT">Nusa Tenggara Timur</option>
	         					<option value="Kalbar">Kalimantan Barat</option>
	         					<option value="Kalteng">Kalimantan Tengah</option>
	         					<option value="Kalsel">Kalimantan Selatan</option>
	         					<option value="Kaltim">Kalimantan Timur</option>
	         					<option value="Kalut">Kalimantan Utara</option>
	         					<option value="Sulut">Sulawesi Utara</option>
	         					<option value="Sulbar">Sulawesi Barat</option>
	         					<option value="Sulteng">Sulawesi Tengah</option>
	         					<option value="Sultengr">Sulawesi Tenggara</option>
	         					<option value="Gorontalo">Gorontalo</option>
	         					<option value="Maluku">Ambon</option>
	         					<option value="Malut">Maluku Utara</option>
	         					<option value="Pabar">Papua Barat</option>
	         					<option value="Papua">Papua</option>
	         					<option value="Telcen">Teluk Cendrawasih</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Kode Pos</td>
	         			<td>:</td>
	         			<td><input type="number" name="kode_pos" id="kode_pos" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Jenis Tinggal</td>
	         			<td>:</td>
	         			<td><input type="text" name="jenis_tinggal" id="jenis_tinggal" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Alat Transportasi</td>
	         			<td>:</td>
	         			<td>
	         				<select name="alat_transportasi" id="alat_transportasi" class="form-control">
	         					<option value="Jalan Kaki">Jalan Kaki</option>
	         					<option value="Sepeda">Sepeda</option>
	         					<option value="Pribadi">Kendaraan Pribadi</option>
	         					<option value="Angkudes">Angkutan Umum/Desa</option>
	         					<option value="Antar Jemput">Kendaraan Antar Jemput</option>
	         					<option value="Lainnya">lainnyaa</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Nomor Telepon</td>
	         			<td>:</td>
	         			<td><input type="number" name="telepon" id="telepon" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Nomor HP</td>
	         			<td>:</td>
	         			<td><input type="number" name="hp" id="hp" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Email</td>
	         			<td>:</td>
	         			<td><input type="text" name="email" id="email" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Kode Kelas</td>
	         			<td>:</td>
	         			<td>
	         				<select name="kode_kelas" id="kode_kelas" class="form-control">
	         					<option value="KL01">KL01 - VII A</option>
	         					<option value="KL02">KL02 - VII B</option>
	         					<option value="KL03">KL03 - VII C</option>
	         					<option value="KL04">KL04 - VII D</option>
	         					<option value="KL05">KL05 - VII E</option>
	         					<option value="KL06">KL06 - VII F</option>
	         					<option value="KL07">KL07 - VIII A</option>
	         					<option value="KL08">KL08 - VIII B</option>
	         					<option value="KL09">KL09 - VIII C</option>
	         					<option value="KL10">KL10 - VIII D</option>
	         					<option value="KL11">KL11 - VIII E</option>
	         					<option value="KL12">KL12 - VIII F</option>
	         					<option value="KL13">KL13 - IX A</option>
	         					<option value="KL14">KL14 - IX B</option>
	         					<option value="KL15">KL15 - IX C</option>
	         					<option value="KL16">KL16 - IX D</option>
	         					<option value="KL17">KL17 - IX E</option>
	         					<option value="KL18">KL18 - IX F</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Rombel Saat Ini</td>
	         			<td>:</td>
	         			<td>
	         				<select name="nama_kelas" id="nama_kelas" class="form-control">
	         					<option value="VII A">VII A</option>
	         					<option value="VII B">VII B</option>
	         					<option value="VII C">VII C</option>
	         					<option value="VII D">VII D</option>
	         					<option value="VII E">VII E</option>
	         					<option value="VII F">VII F</option>
	         					<option value="VIII A">VIII A</option>
	         					<option value="VIII B">VIII B</option>
	         					<option value="VIII C">VIII C</option>
	         					<option value="VIII D">VIII D</option>
	         					<option value="VIII E">VIII E</option>
	         					<option value="VIII F">VIII F</option>
	         					<option value="IX A">IX A</option>
	         					<option value="IX B">IX B</option>
	         					<option value="IX C">IX C</option>
	         					<option value="IX D">IX D</option>
	         					<option value="IX E">IX E</option>
	         					<option value="IX F">IX F</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>SKHUN</td>
	         			<td>:</td>
	         			<td><input type="text" name="skhun" id="skhun" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Penerima KPS</td>
	         			<td>:</td>
	         			<td>
	         				<select name="penerima_kps" id="penerima_kps" class="form-control">
	         					<option value="Ya">Ya</option>
	         					<option value="Tidak">Tidak</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Nomor KPS</td>
	         			<td>:</td>
	         			<td><input type="number" name="no_kps" id="no_kps" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td></td>
	         		</tr>
	         		<tr>
	         			<td colspan="3" class="alert alert-info" align="left">Data Ayah</td>
	         		</tr>
	         		<tr>
	         			<td>Nama Ayah</td>
	         			<td>:</td>
	         			<td><input type="text" name="nama_ayah" id="nama_ayah" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Tahun Lahir Ayah</td>
	         			<td>:</td>
	         			<td>
	         				<select name="tahun_lahir_ayah" id="tahun_lahir_ayah" class="form-control">
								<?php
									$a=Date("Y");
									$b=$a-0;
									$c=$a-75;
									for ($x=$c;$x<=$b;$x++) {
										echo("<option value=$x>$x</option>");
									}		
								?>
							</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Pendidikan Ayah</td>
	         			<td>:</td>
	         			<td>
	         				<select name="pendidikan_ayah" id="pendidikan_ayah" class="form-control">
	         					<option value="SD">SD/Sederajat</option>
	         					<option value="SMP">SMP/Sederajat</option>
	         					<option value="SMA">SMA/Sederajat</option>
	         					<option value="Putus Sekolah">Putus Sekolah</option>
	         					<option value="D1">Diploma 1</option>
	         					<option value="D2">Diploma 2</option>
	         					<option value="D3">Diploma 3</option>
	         					<option value="S1">S1 Sarjana</option>
	         					<option value="S2">S2 Magister</option>
	         					<option value="S3">S3 Doctor</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Pekerjaan Ayah</td>
	         			<td>:</td>
	         			<td>
	         				<select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control">
	         					<option value="Tidak Bekerja">Belum/Tidak Bekerja</option>
	         					<option value="RT">Mengurus Rumah Tangga</option>
	         					<option value="Pensiunan">Pensiunan</option>
	         					<option value="Pensiunan PNS">Pensiunan PNS</option>
	         					<option value="PNS">Pegawai Negeri Sipil</option>
	         					<option value="Berdagang">Berdagang</option>
	         					<option value="Buruh">Buruh</option>
	         					<option value="Wiraswasta">Wirausaha</option>
	         					<option value="Pegawai Swasta">Pegawai Swasta</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Penghasilan Ayah</td>
	         			<td>:</td>
	         			<td>
	         				<select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control">
	         					<option value="Kecil">Rp 0,- sampai Rp 500.000,-</option>
	         					<option value="Menengah">Rp 500.000,- sampai Rp 1.000.000,-</option>
	         					<option value="Tinggi">Rp 1.000.000,- sampai Rp 2.000.000,- </option>
	         					<option value="Naik">Rp 2.000.000 keatas</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>NIK Ayah</td>
	         			<td>:</td>
	         			<td><input type="number" name="nik_ayah" id="nik_ayah" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td></td>
	         		</tr>
	         		<tr>
	         			<td  colspan="3" class="alert alert-info" align="left">Data Ibu</td>
	         		</tr>
	         		<tr>
	         			<td>Nama Ibu</td>
	         			<td>:</td>
	         			<td><input type="text" name="nama_ibu" id="nama_ibu" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Tahun Lahir Ibu</td>
	         			<td>:</td>
	         			<td>
	         				<select name="tahun_lahir_ibu" id="tahun_lahir_ibu" class="form-control">
								<?php
									$a=Date("Y");
									$b=$a-0;
									$c=$a-75;
									for ($x=$c;$x<=$b;$x++) {
										echo("<option value=$x>$x</option>");
									}		
								?>
							</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Pendidikan Ibu</td>
	         			<td>:</td>
	         			<td>
	         				<select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control">
	         					<option value="SD">SD/Sederajat</option>
	         					<option value="SMP">SMP/Sederajat</option>
	         					<option value="SMA">SMA/Sederajat</option>
	         					<option value="Putus Sekolah">Putus Sekolah</option>
	         					<option value="D1">Diploma 1</option>
	         					<option value="D2">Diploma 2</option>
	         					<option value="D3">Diploma 3</option>
	         					<option value="S1">S1 Sarjana</option>
	         					<option value="S2">S2 Magister</option>
	         					<option value="S3">S3 Doctor</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Pekerjaan Ibu</td>
	         			<td>:</td>
	         			<td>
	         				<select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control">
	         					<option value="Tidak Bekerja">Belum/Tidak Bekerja</option>
	         					<option value="RT">Mengurus Rumah Tangga</option>
	         					<option value="Pensiunan">Pensiunan</option>
	         					<option value="Pensiunan Pns">Pensiunan PNS</option>
	         					<option value="PNS">Pegawai Negeri Sipil</option>
	         					<option value="Berdagang">Berdagang</option>
	         					<option value="Buruh">Buruh</option>
	         					<option value="Wiraswasta">Wirausaha</option>
	         					<option value="Pegawai Swasta">Pegawai Swasta</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Penghasilan Ibu</td>
	         			<td>:</td>
	         			<td>
	         				<select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control">
	         					<option value="Kecil">Rp 0,- sampai Rp 500.000,-</option>
	         					<option value="Menengah">Rp 500.000,- sampai Rp 1.000.000,-</option>
	         					<option value="Tinggi">Rp 1.000.000,- sampai Rp 2.000.000,- </option>
	         					<option value="Naik">Rp 2.000.000 keatas</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>NIK Ibu</td>
	         			<td>:</td>
	         			<td><input type="number" name="nik_ibu" id="nik_ibu" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td></td>
	         		</tr>
	         		<tr>
	         			<td align="left" colspan="3" class="alert alert-info">Data Wali</td>
	         		</tr>
	         		<tr>
	         			<td>Nama Wali</td>
	         			<td>:</td>
	         			<td><input type="text" name="nama_wali" id="nama_wali" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Tahun Lahir Wali</td>
	         			<td>:</td>
	         			<td>
	         				<select name="tahun_lahir_wali" id="tahun_lahir_wali" class="form-control">
								<?php
									$a=Date("Y");
									$b=$a-0;
									$c=$a-75;
									for ($x=$c;$x<=$b;$x++) {
										echo("<option value=$x>$x</option>");
									}		
								?>
							</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Pendidikan Wali</td>
	         			<td>:</td>
	         			<td>
	         				<select name="pendidikan_wali" id="pendidikan_wali" class="form-control">
	         					<option value="SD">SD/Sederajat</option>
	         					<option value="SMP">SMP/Sederajat</option>
	         					<option value="SMA">SMA/Sederajat</option>
	         					<option value="Putus Sekolah">Putus Sekolah</option>
	         					<option value="D1">Diploma 1</option>
	         					<option value="D2">Diploma 2</option>
	         					<option value="D3">Diploma 3</option>
	         					<option value="S1">S1 Sarjana</option>
	         					<option value="S2">S2 Magister</option>
	         					<option value="S3">S3 Doctor</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Pekerjaan Wali</td>
	         			<td>:</td>
	         			<td>
	         				<select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control">
	         					<option value="Tidak Bekerja">Belum/Tidak Bekerja</option>
	         					<option value="RT">Mengurus Rumah Tangga</option>
	         					<option value="Pensiunan">Pensiunan</option>
	         					<option value="Pensiunan PNS">Pensiunan PNS</option>
	         					<option value="PNS">Pegawai Negeri Sipil</option>
	         					<option value="Berdagang">Berdagang</option>
	         					<option value="Buruh">Buruh</option>
	         					<option value="Wiraswasta">Wirausaha</option>
	         					<option value="Pegawai Swasta">Pegawai Swasta</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Penghasilan Wali</td>
	         			<td>:</td>
	         			<td>
	         				<select name="penghasilan_wali" id="penghasilan_wali" class="form-control">
	         					<option value="Kecil">Rp 0,- sampai Rp 500.000,-</option>
	         					<option value="Menengah">Rp 500.000,- sampai Rp 1.000.000,-</option>
	         					<option value="Tinggi">Rp 1.000.000,- sampai Rp 2.000.000,- </option>
	         					<option value="Naik">Rp 2.000.000 keatas</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>NIK Wali</td>
	         			<td>:</td>
	         			<td><input type="number" name="nik_wali" id="nik_wali" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td></td>
	         		</tr>
	         		<tr>
	         			<td colspan="3" class="alert alert-info" align="left">Data Pelengkap</td>
	         		</tr>
	         		<tr>
	         			<td>No. Peserta UN</td>
	         			<td>:</td>
	         			<td><input type="number" name="no_pesertas_un" id="no_pesertas_un" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>No. Ijazah</td>
	         			<td>:</td>
	         			<td><input type="text" name="no_ijazah" id="no_ijazah" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Penerima KIP</td>
	         			<td>:</td>
	         			<td>
	         				<select name="penerima_kip" id="penerima_kip" class="form-control">
	         					<option value="Ya">Ya</option>
	         					<option value="Tidak">Tidak</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Nomor KIP</td>
	         			<td>:</td>
	         			<td><input type="number" name="nomor_kip" id="nomor_kip" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Nama di KIP</td>
	         			<td>:</td>
	         			<td><input type="text" name="nama_di_kip" id="nama_di_kip" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Nomor KKS</td>
	         			<td>:</td>
	         			<td><input type="number" name="nomor_kks" id="nomor_kks" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>No. Registrasi Akta Lahir</td>
	         			<td>:</td>
	         			<td><input type="text" name="no_reg_akta_lahir" id="no_reg_akta_lahir" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Bank</td>
	         			<td>:</td>
	         			<td>
	         				<select name="bank" id="bank" class="form-control">
	         					<option value=""></option>
	         					<option value="BRI">Bank BRI</option>
	         					<option value="BNI">Bank BNI</option>
	         					<option value="BCA">Bank BCA</option>
	         					<option value="Muamalat">Bank Muamalat</option>
	         					<option value="Jateng">Bank Jawa Tengah</option>
	         					<option value="BI">Bank Indonesia</option>
	         					<option value="Mandiri">Bank Mandiri</option>
	         					<option value="Danamon">Bank Danamon</option>
	         					<option value="Mega">Bank Mega</option>
	         					<option value="Lainnya">Lainnya..</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>No. Rekening</td>
	         			<td>:</td>
	         			<td><input type="number" name="nomor_rekening" id="nomor_rekening" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Rekening Atas Nama</td>
	         			<td>:</td>
	         			<td><input type="text" name="rekening_atas_nama" id="rekening_atas_nama" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Layak PIP(Usulan Dari Sekolah)</td>
	         			<td>:</td>
	         			<td>
	  						<select name="layak_pip" id="layak_pip" class="form-control">
	  							<option value="Ya">Ya</option>
	  							<option value="Tidak">Tidak</option>
	  						</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Alasan Layak PIP</td>
	         			<td>:</td>
	         			<td>
	         				<select name="alasan_layak_pip" id="alasan_layak_pip" class="form-control">
	         					<option value=""></option>
	         					<option value="Miskin">Siswa Miskin/Rentan Miskin</option>
	         					<option value="Panti">Yatim Piatu/Panti Asuhan/Panti Sosial</option>
	         					<option value="Penerima BSM">Penerima BSM</option>
	         					<option value="PKH">Pemegang PKH/KKS/KPS</option>
	         					<option value="Lainnya">Lainnya...</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Kebutuhan Khusus</td>
	         			<td>:</td>
	         			<td>
	         				<select name="kebutuhan_khusus" id="kebutuhan_khusus" class="form-control">
	         					<option value="Ya">Ya</option>
	         					<option value="Tidak">Tidak</option>
	         				</select>
	         			</td>
	         		</tr>
	         		<tr>
	         			<td>Sekolah Asal</td>
	         			<td>:</td>
	         			<td><input type="text" name="sekolah_asal" id="sekolah_asal" class="form-control"></td>
	         		</tr>
	         		<tr>
	         			<td>Foto</td>
	         			<td>:</td>
	         			<td><input type="file" name="foto" id="foto" class="form-control"></td>
	         		</tr>
					<tr>
						<td colspan=3 align="center">
						<br>
							<input type="submit" class="btn btn-primary" value="Simpan">
							<input type="reset" class="btn btn-primary" value="Reset">
							<input type="button" value="Kembali" onclick="self.history.back()" class="btn btn-primary">
						</td>
					</tr>
				</table>
			</div>
		</div>
	</form>
<?php include "footer.php"; ?>