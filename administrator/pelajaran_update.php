<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include "../config/koneksi.php";

	$id_pelajaran = $_POST['id_pelajaran'];
	$nama = $_POST['nama_pelajaran'];
	$semester = $_POST['semester'];

	
	$qry = mysql_query("UPDATE tbl_pelajaran SET id_pelajaran='$id_pelajaran', 
		nama_pelajaran='$nama', semester='$semester'
		WHERE id_pelajaran='$_POST[id_pelajaran]'") or die(mysql_error());
	if($qry){
		echo "
		<script>
			window.alert('Data Berhasil Di Update!');
			window.location='pelajaran_tampil.php'
		</script>";
	}else{
		echo "
		<script>
			window.alert('Data Gagal Di Update!');
			window.location='pelajaran_tampil.php'
		</script>";
	}
?>