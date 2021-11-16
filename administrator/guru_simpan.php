<?php
	ob_start();
	include "../config/koneksi.php";

	
	$nama_guru = $_POST['nama_guru'];
	$nuptk = $_POST['nuptk'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$nip = $_POST['nip'];
	$password = $_POST['password'];
	$status_pegawai = $_POST['status_pegawai'];
	$jenis_ptk = $_POST['jenis_ptk'];
	$agama = $_POST['agama'];
	$alamat_lengkap = $_POST['alamat_lengkap'];
	$kecamatan = $_POST['kecamatan'];
	$kode_pos = $_POST['kode_pos'];
	$telepon = $_POST['telepon'];
	$email = $_POST['email'];
	$tugas_tambahan = $_POST['tugas_tambahan'];
	$sk_cpns = $_POST['sk_cpns'];
	$tanggal_cpns = $_POST['tanggal_cpns'];
	$sk_pengangkatan = $_POST['sk_pengangkatan'];
	$tmt_pengangkatan = $_POST['tmt_pengangkatan'];
	$lembaga_pengangkat = $_POST['lembaga_pengangkat'];
	$pangkat_golongan = $_POST['pangkat_golongan'];
	$sumber_gaji = $_POST['sumber_gaji'];
	$nama_ibu_kandung = $_POST['nama_ibu_kandung'];
	$status_perkawinan = $_POST['status_perkawinan'];
	$nama_pasangan = $_POST['nama_pasangan'];
	$nip_pasangan = $_POST['nip_pasangan'];
	$pekerjaan_pasangan = $_POST['pekerjaan_pasangan'];
	$tmt_pns = $_POST['tmt_pns'];
	$lisensi_kepsek = $_POST['lisensi_kepsek'];
	$diklat_kepengawasan = $_POST['diklat_kepengawasan'];
	$keahlian_braille = $_POST['keahlian_braille'];
	$keahlian_isyarat = $_POST['keahlian_isyarat'];
	$npwp = $_POST['npwp'];
	$nama_wajib_pajak = $_POST['nama_wajib_pajak'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$bank = $_POST['bank'];
	$nomor_rekening = $_POST['nomor_rekening'];
	$rekening_atas_nama = $_POST['rekening_atas_nama'];
	$nik = $_POST['nik'];
	$foto = $_POST['foto'];

	$dir_gambar = '../guru/foto_guru/';
	$filename = $_FILES['foto']['name'];
	$uploadfile = $dir_gambar . $filename;

	$cekdata="SELECT nip FROM tbl_guru WHERE nip='$nip'";
	$ada=mysql_query($cekdata) or die(mysql_error());

	if(mysql_num_rows($ada)>0) {
		echo "<script>
					window.alert('nip YANG ANDA MASUKKAN SUDAH TERDAFTAR!');
					window.location='guru_input.php'
			</script>";
		exit();
	}else{
		$move=move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
		$tambah = mysql_query("INSERT INTO tbl_guru
			(nama_guru, nuptk, jenis_kelamin, tempat_lahir, tanggal_lahir, nip, password, status_pegawai, jenis_ptk, agama, alamat_lengkap, kecamatan, kode_pos, telepon, email, tugas_tambahan, sk_cpns, tanggal_cpns, sk_pengangkatan, tmt_pengangkatan, lembaga_pengangkat, pangkat_golongan, sumber_gaji, nama_ibu_kandung, status_perkawinan, nama_pasangan, nip_pasangan, pekerjaan_pasangan, tmt_pns, lisensi_kepsek, diklat_kepengawasan, keahlian_braille, keahlian_isyarat, npwp, nama_wajib_pajak, kewarganegaraan, bank, nomor_rekening, rekening_atas_nama, nik, foto)
			VALUES 
			('$nama_guru','$nuptk','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$nip','$password','$status_pegawai',
				'$jenis_ptk','$agama','$alamat_lengkap','$kecamatan','$kode_pos','$telepon','$email','$tugas_tambahan','$sk_cpns','$tanggal_cpns','$sk_pengangkatan','$tmt_pengangkatan','$lembaga_pengangkat','$pangkat_golongan',
				'$sumber_gaji','$nama_ibu_kandung','$status_perkawinan','$nama_pasangan','$nip_pasangan','$pekerjaan_pasangan','$tmt_pns','$lisensi_kepsek','$diklat_kepengawasan','$keahlian_braille','$keahlian_isyarat','$npwp','$nama_wajib_pajak','$kewarganegaraan','$bank','$nomor_rekening','$rekening_atas_nama','$nik','$filename')") or die(mysql_error());
		if($tambah)
		{
			echo "
				<script>
					window.alert('Data Berhasil Di Simpan!');
					window.location='guru_tampil.php'
				</script>
			";
		}else{
			echo "
				<script>
					window.alert('Data Gagal Di Simpan!');
					window.location='guru_input.php'
				</script>
			";
		}
	}
?>