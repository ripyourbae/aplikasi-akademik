<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include "../config/koneksi.php";

	$idjadwal = $_POST['id_jadwal'];
	$idkelas = $_POST['id_kelas'];
	$idpelajaran = $_POST['id_pelajaran'];
	$nip = $_POST['nip'];
	$tahunajaran = $_POST['tahun_ajaran'];
	$jam = $_POST['jam'];
	$hari = $_POST['hari'];

	
	$qry = mysql_query("UPDATE tbl_jadwal SET id_jadwal='$idjadwal', id_kelas='$idkelas',
		id_pelajaran='$idpelajaran', nip='$nip', tahun_ajaran='$tahunajaran', jam='$jam', hari='$hari'
		WHERE id_jadwal='$_POST[id_jadwal]'") or die(mysql_error());
	if($qry){
		echo "
		<script>
			window.alert('Data Berhasil Di Update!');
			window.location='jadwal_tampil.php'
		</script>";
	}else{
		echo "
		<script>
			window.alert('Data Gagal Di Update!');
			window.location='jadwal_tampil.php'
		</script>";
	}
?>