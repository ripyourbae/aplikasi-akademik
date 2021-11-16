<?php 
	include "../config/koneksi.php";

	$id_profil = $_POST['id_profil'];
	$npsn = $_POST['npsn'];
	$status = $_POST['status'];
	$bentuk_pendidikan = $_POST['bentuk_pendidikan'];
	$status_kepemilikan = $_POST['status_kepemilikan'];
	$sk_pendirian = $_POST['sk_pendirian'];
	$tanggal_sk = $_POST['tanggal_sk'];
	$sk_operasional = $_POST['sk_operasional'];
	$tanggal_operasional = $_POST['tanggal_operasional'];
	$kebutuhan_khusus = $_POST['kebutuhan_khusus'];
	$nama_bank = $_POST['nama_bank'];
	$cabang = $_POST['cabang'];
	$atas_nama_rek = $_POST['atas_nama_rek'];
	$luas_tanah_milik = $_POST['luas_tanah_milik'];
	$luas_tanah_bukan = $_POST['luas_tanah_bukan'];
	$status_bos = $_POST['status_bos'];
	$waktu_penyelenggaraan = $_POST['waktu_penyelenggaraan'];
	$sertifikasi_iso = $_POST['sertifikasi_iso'];
	$sumber_listrik = $_POST['sumber_listrik'];
	$daya_listrik = $_POST['daya_listrik'];
	$akses_internet = $_POST['akses_internet'];

	$query = mysql_query("UPDATE tbl_profil SET id_profil='$id_profil', npsn='$npsn', status='$status', bentuk_pendidikan='$bentuk_pendidikan', status_kepemilikan='$status_kepemilikan', sk_pendirian='$sk_pendirian', tanggal_sk='$tanggal_sk', sk_operasional='$sk_operasional', tanggal_operasional='$tanggal_operasional', kebutuhan_khusus='$kebutuhan_khusus', nama_bank='$nama_bank', cabang='$cabang', atas_nama_rek='$atas_nama_rek', luas_tanah_milik='$luas_tanah_milik', luas_tanah_bukan='$luas_tanah_bukan', status_bos='$status_bos', waktu_penyelenggaraan='$waktu_penyelenggaraan', sertifikasi_iso='$sertifikasi_iso', sumber_listrik='$sumber_listrik', daya_listrik='$daya_listrik', akses_internet='$akses_internet' WHERE id_profil='$id_profil'") OR die(mysql_error());

	if($query){
		echo "
		<script>
			window.alert('Data Berhasil Di Update!');
			window.location='profil_edit.php'
		</script>";
	}else{
		echo "
		<script>
			window.alert('Data Gagal Di Update!');
			window.location='profil_edit.php'
		</script>";
	}
?>