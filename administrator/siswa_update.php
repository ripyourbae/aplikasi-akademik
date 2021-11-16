<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	ob_start();

	include "../config/koneksi.php";
	
	$id_siswa = $_POST['id_siswa'];
	$nama_siswa = $_POST['nama_siswa'];
	$nipd = $_POST['nipd'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$nisn = $_POST['nisn'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$nik = $_POST['nik'];
	$agama = $_POST['agama'];
	$alamat_lengkap = $_POST['alamat_lengkap'];
	$kecamatan = $_POST['kecamatan'];
	$kabupaten = $_POST['kabupaten'];
	$provinsi = $_POST['provinsi'];
	$kode_pos = $_POST['kode_pos'];
	$jenis_tinggal = $_POST['jenis_tinggal'];
	$alat_transportasi = $_POST['alat_transportasi'];
	$telepon = $_POST['telepon'];
	$hp = $_POST['hp'];
	$email = $_POST['email'];
	$kode_kelas = $_POST['kode_kelas'];
	$nama_kelas = $_POST['nama_kelas'];
	$skhun = $_POST['skhun'];
	$penerima_kps = $_POST['penerima_kps'];
	$no_kps = $_POST['no_kps'];
	$nama_ayah = $_POST['nama_ayah'];
	$tahun_lahir_ayah = $_POST['tahun_lahir_ayah'];
	$pendidikan_ayah = $_POST['pendidikan_ayah'];
	$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
	$penghasilan_ayah = $_POST['penghasilan_ayah'];
	$nik_ayah = $_POST['nik_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$tahun_lahir_ibu = $_POST['tahun_lahir_ibu'];
	$pendidikan_ibu = $_POST['pendidikan_ibu'];
	$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
	$penghasilan_ibu = $_POST['penghasilan_ibu'];
	$nik_ibu = $_POST['nik_ibu'];
	$nama_wali = $_POST['nama_wali'];
	$tahun_lahir_wali = $_POST['tahun_lahir_wali'];
	$pendidikan_wali = $_POST['pendidikan_wali'];
	$pekerjaan_wali = $_POST['pekerjaan_wali'];
	$penghasilan_wali = $_POST['penghasilan_wali'];
	$nik_wali = $_POST['nik_wali'];
	$no_peserta_un = $_POST['no_peserta_un'];
	$no_ijazah = $_POST['no_ijazah'];
	$penerima_kip = $_POST['penerima_kip'];
	$nomor_kip = $_POST['nomor_kip'];
	$nama_di_kip = $_POST['nama_di_kip'];
	$nomor_kks = $_POST['nomor_kks'];
	$no_reg_akta_lahir = $_POST['no_reg_akta_lahir'];
	$bank = $_POST['bank'];
	$nomor_rekening = $_POST['nomor_rekening'];
	$rekening_atas_nama = $_POST['rekening_atas_nama'];
	$layak_pip = $_POST['layak_pip'];
	$alasan_layak_pip = $_POST['alasan_layak_pip'];
	$kebutuhan_khusus = $_POST['kebutuhan_khusus'];
	$sekolah_asal = $_POST['sekolah_asal'];
	$foto = $_POST['foto'];
	$password = $_POST['password'];

	$dir_gambar = '../siswa/foto_siswa/';
	$filename = $_FILES['foto']['name'];
	$uploadfile = $dir_gambar . $filename;

	if ($filename != ''){
		if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile))
		{
			mysql_query("UPDATE tbl_siswa SET id_siswa='$id_siswa', nama_siswa='$nama_siswa', nipd='$nipd', jenis_kelamin='$jenis_kelamin', nisn='$nisn', tempat_lahir='$tempat_lahir', 
				tanggal_lahir='$tanggal_lahir', nik='$nik', agama='$agama', alamat_lengkap='$alamat_lengkap', kecamatan='$kecamatan', 
				kabupaten='$kabupaten', provinsi='$provinsi', kode_pos='$kode_pos', jenis_tinggal='$jenis_tinggal', 
				alat_transportasi='$alat_transportasi', telepon='$telepon', hp='$hp', email='$email', kode_kelas='$kode_kelas', nama_kelas='$nama_kelas', skhun='$skhun', penerima_kps='$penerima_kps', 
				no_kps='$no_kps', nama_ayah='$nama_ayah', tahun_lahir_ayah='$tahun_lahir_ayah', pendidikan_ayah='$pendidikan_ayah', 
				pekerjaan_ayah='$pekerjaan_ayah', penghasilan_ayah='$penghasilan_ayah', nik_ayah='$nik_ayah', nama_ibu='$nama_ibu', 
				tahun_lahir_ibu='$tahun_lahir_ibu', pendidikan_ibu='$pendidikan_ibu', pekerjaan_ibu='$pekerjaan_ibu', 
				penghasilan_ibu='$penghasilan_ibu', nik_ibu='$nik_ibu', nama_wali='$nama_wali', tahun_lahir_wali='$tahun_lahir_wali', 
				pendidikan_wali='$pendidikan_wali', pekerjaan_wali='$pekerjaan_wali', penghasilan_wali='$penghasilan_wali', nik_wali='$nik_wali', no_peserta_un='$no_peserta_un', no_ijazah='$no_ijazah', penerima_kip='penerima_kip', 
				nomor_kip='$nomor_kip', nama_di_kip='$nama_di_kip', nomor_kks='$nomor_kks', no_reg_akta_lahir='$no_reg_akta_lahir', 
				bank='$bank', nomor_rekening='$nomor_rekening', rekening_atas_nama='$rekening_atas_nama', layak_pip='$layak_pip', 
				alasan_layak_pip='$alasan_layak_pip', kebutuhan_khusus='$kebutuhan_khusus', sekolah_asal='$sekolah_asal', foto='$filename', 
				password='$password' WHERE id_siswa='$_POST[id_siswa]'") or die(mysql_error());

			echo "
					<script>
						window.alert('Data Berhasil Diperbaharui');
						window.location='siswa_lihat.php'
					</script>
				";

		} else{
				echo "
					<script>
						window.alert('Data Gagal Diperbaharui');
						window.location='siswa_lihat.php'
					</script>
				";
		}
	}else {
		mysql_query("UPDATE tbl_siswa SET id_siswa='$id_siswa', nama_siswa='$nama_siswa', nipd='$nipd', jenis_kelamin='$jenis_kelamin', nisn='$nisn', tempat_lahir='$tempat_lahir', 
				tanggal_lahir='$tanggal_lahir', nik='$nik', agama='$agama', alamat_lengkap='$alamat_lengkap', kecamatan='$kecamatan', 
				kabupaten='$kabupaten', provinsi='$provinsi', kode_pos='$kode_pos', jenis_tinggal='$jenis_tinggal', 
				alat_transportasi='$alat_transportasi', telepon='$telepon', hp='$hp', email='$email', kode_kelas='$kode_kelas', nama_kelas='$nama_kelas', skhun='$skhun', penerima_kps='$penerima_kps', 
				no_kps='$no_kps', nama_ayah='$nama_ayah', tahun_lahir_ayah='$tahun_lahir_ayah', pendidikan_ayah='$pendidikan_ayah', 
				pekerjaan_ayah='$pekerjaan_ayah', penghasilan_ayah='$penghasilan_ayah', nik_ayah='$nik_ayah', nama_ibu='$nama_ibu', 
				tahun_lahir_ibu='$tahun_lahir_ibu', pendidikan_ibu='$pendidikan_ibu', pekerjaan_ibu='$pekerjaan_ibu', 
				penghasilan_ibu='$penghasilan_ibu', nik_ibu='$nik_ibu', nama_wali='$nama_wali', tahun_lahir_wali='$tahun_lahir_wali', 
				pendidikan_wali='$pendidikan_wali', pekerjaan_wali='$pekerjaan_wali', penghasilan_wali='$penghasilan_wali', nik_wali='$nik_wali', no_peserta_un='$no_peserta_un', no_ijazah='$no_ijazah', penerima_kip='penerima_kip', 
				nomor_kip='$nomor_kip', nama_di_kip='$nama_di_kip', nomor_kks='$nomor_kks', no_reg_akta_lahir='$no_reg_akta_lahir', 
				bank='$bank', nomor_rekening='$nomor_rekening', rekening_atas_nama='$rekening_atas_nama', layak_pip='$layak_pip', 
				alasan_layak_pip='$alasan_layak_pip', kebutuhan_khusus='$kebutuhan_khusus', sekolah_asal='$sekolah_asal', password='$password' WHERE id_siswa='$_POST[id_siswa]'") or die(mysql_error());

		echo "
				<script>
					window.alert('Data Berhasil Diperbaharui');
					window.location='siswa_lihat.php'
				</script>
			";
	}
?>