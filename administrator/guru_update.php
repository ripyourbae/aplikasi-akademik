<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	
	include "../config/koneksi.php";

	$id_guru = $_POST['id_guru'];
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

	if ($filename != ''){
		if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile))
		{
			mysql_query("UPDATE tbl_guru SET id_guru='$id_guru', nama_guru='$nama_guru', nuptk='$nuptk', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', nip='$nip', password='$password', status_pegawai='$status_pegawai', jenis_ptk='$jenis_ptk', agama='$agama', alamat_lengkap='$alamat_lengkap', kecamatan='$kecamatan', kode_pos='$kode_pos', telepon='$telepon', email='$email', tugas_tambahan='$tugas_tambahan', sk_cpns='$sk_cpns', tanggal_cpns='$tanggal_cpns', sk_pengangkatan='$sk_pengangkatan', tmt_pengangkatan='$tmt_pengangkatan', lembaga_pengangkat='$lembaga_pengangkat', pangkat_golongan='$pangkat_golongan', sumber_gaji='$sumber_gaji', nama_ibu_kandung='$nama_ibu_kandung', status_perkawinan='$status_perkawinan', nama_pasangan='$nama_pasangan', nip_pasangan='$nip_pasangan', pekerjaan_pasangan='$pekerjaan_pasangan', tmt_pns='$tmt_pns', lisensi_kepsek='$lisensi_kepsek', diklat_kepengawasan='$diklat_kepengawasan', keahlian_braille='$keahlian_braille', keahlian_isyarat='$keahlian_isyarat', npwp='$npwp', nama_wajib_pajak='$nama_wajib_pajak', kewarganegaraan='$kewarganegaraan', bank='$bank', nomor_rekening='$nomor_rekening', rekening_atas_nama='$rekening_atas_nama', nik='$nik', foto='$filename' WHERE id_guru='$_POST[id_guru]'") or die(mysql_error());

			echo "
				<script>
					window.alert('Data Berhasil Diperbaharui');
					window.location='guru_tampil.php'
				</script>
			";

		} else{
			echo "
				<script>
					window.alert('Data Gagal Diperbaharui');
					window.location='guru_tampil.php'
				</script>
			";
		}
	}else {
		mysql_query("UPDATE tbl_guru SET id_guru='$id_guru', nama_guru='$nama_guru', nuptk='$nuptk', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', nip='$nip', password='$password', status_pegawai='$status_pegawai', jenis_ptk='$jenis_ptk', agama='$agama', alamat_lengkap='$alamat_lengkap', kecamatan='$kecamatan', kode_pos='$kode_pos', telepon='$telepon', email='$email', tugas_tambahan='$tugas_tambahan', sk_cpns='$sk_cpns', tanggal_cpns='$tanggal_cpns', sk_pengangkatan='$sk_pengangkatan', tmt_pengangkatan='$tmt_pengangkatan', lembaga_pengangkat='$lembaga_pengangkat', pangkat_golongan='$pangkat_golongan', sumber_gaji='$sumber_gaji', nama_ibu_kandung='$nama_ibu_kandung', status_perkawinan='$status_perkawinan', nama_pasangan='$nama_pasangan', nip_pasangan='$nip_pasangan', pekerjaan_pasangan='$pekerjaan_pasangan', tmt_pns='$tmt_pns', lisensi_kepsek='$lisensi_kepsek', diklat_kepengawasan='$diklat_kepengawasan', keahlian_braille='$keahlian_braille', keahlian_isyarat='$keahlian_isyarat', npwp='$npwp', nama_wajib_pajak='$nama_wajib_pajak', kewarganegaraan='$kewarganegaraan', bank='$bank', nomor_rekening='$nomor_rekening', rekening_atas_nama='$rekening_atas_nama', nik='$nik' WHERE id_guru='$_POST[id_guru]'") or die(mysql_error());

		echo "
				<script>
					window.alert('Data Berhasil Diperbaharui');
					window.location='guru_tampil.php'
				</script>
			";
	}
?>