<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include "../config/koneksi.php";

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

	$cek_data_nipd = "SELECT nipd FROM tbl_siswa WHERE nipd='$nipd'";
	$ada_nipd = mysql_query($cek_data_nipd) or die(mysql_error());
	$cek_data_nisn = "SELECT nisn FROM tbl_siswa WHERE nisn='$nisn'";
	$ada_nisn = mysql_query($cek_data_nisn) or die(mysql_error());

	if(mysql_num_rows($ada_nipd)>0) {
		echo "<script>
					window.alert('NIPD YANG ANDA MASUKKAN SUDAH TERDAFTAR!');
					window.location='siswa_input.php' 
			</script>";
		exit();
	}else if(mysql_num_rows($ada_nisn)>0) {
		echo "<script>
					window.alert('NISN YANG ANDA MASUKKAN SUDAH TERDAFTAR!');
					window.location='siswa_input.php'
			</script>";
		exit();
	}else{
		$move=move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
		$query = mysql_query("INSERT INTO tbl_siswa
			(nama_siswa, nipd, jenis_kelamin, nisn, tempat_lahir, tanggal_lahir, nik, agama, 
			alamat_lengkap, kecamatan, kabupaten, provinsi, kode_pos, jenis_tinggal, alat_transportasi, 
			telepon, hp, email, kode_kelas, nama_kelas, skhun, penerima_kps, no_kps, nama_ayah, tahun_lahir_ayah, 
			pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, nik_ayah, nama_ibu, tahun_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, 
			penghasilan_ibu, nik_ibu, nama_wali, tahun_lahir_wali, pendidikan_wali, pekerjaan_wali, 
			penghasilan_wali, nik_wali, no_peserta_un, no_ijazah, penerima_kip, nomor_kip, 
			nama_di_kip, nomor_kks, no_reg_akta_lahir, bank, nomor_rekening, rekening_atas_nama, 
			layak_pip, alasan_layak_pip, kebutuhan_khusus, sekolah_asal, foto, password)
			VALUES 
			('$nama_siswa', '$nipd', '$jenis_kelamin', '$nisn', '$tempat_lahir', '$tanggal_lahir', '$nik', '$agama', 
			'$alamat_lengkap', '$kecamatan', '$kabupaten', '$provinsi', '$kode_pos', '$jenis_tinggal', '$alat_transportasi', 
			'$telepon', '$hp', '$email', '$kode_kelas', '$nama_kelas', '$skhun', '$penerima_kps', '$no_kps', '$nama_ayah', '$tahun_lahir_ayah', 
			'$pendidikan_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$nik_ayah', 
			'$nama_ibu', '$tahun_lahir_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$nik_ibu', 
			'$nama_wali', '$tahun_lahir_wali', '$pendidikan_wali', '$pekerjaan_wali', '$penghasilan_wali', '$nik_wali', 
			'$no_peserta_un', '$no_ijazah', '$penerima_kip', '$nomor_kip', 
			'$nama_di_kip', '$nomor_kks', '$no_reg_akta_lahir', '$bank', '$nomor_rekening', '$rekening_atas_nama', 
			'$layak_pip', '$alasan_layak_pip', '$kebutuhan_khusus', '$sekolah_asal', '$filename', '$password')") or die(mysql_error());
		if($query){
			echo "
				<script>
					window.alert('Data Berhasil Di Simpan!');
					window.location='siswa_lihat.php'
				</script>
			";
		}else{
			echo "
				<script>
					window.alert('Data Gagal Di Simpan!');
					window.location='siswa_input.php'
				</script>
			";
		}
	}
?>