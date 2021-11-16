<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include "../config/koneksi.php";

	$id_kelas = $_POST['id_kelas'];
	$nama = $_POST['nama_kelas'];

	
	$qry = mysql_query("UPDATE tbl_kelas SET id_kelas='$id_kelas', 
		nama_kelas='$nama'
		WHERE id_kelas='$_POST[id_kelas]'") or die(mysql_error());
	if($qry){
		echo "
		<script>
			window.alert('Data Berhasil Di Update!');
			window.location='kelas_tampil.php'
		</script>";
	}else{
		echo "
		<script>
			window.alert('Data Gagal Di Update!');
			window.location='kelas_tampil.php'
		</script>";
	}
?>