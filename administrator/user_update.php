<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include "../config/koneksi.php";

	$id_admin = $_POST['id_admin'];
	$nama_admin = $_POST['nama_admin'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	

	$query = mysql_query("UPDATE user_administrator SET id_admin='$id_admin', 
		nama_admin='$nama_admin', username='$username', password='$password'
		WHERE id_admin='$_POST[id_admin]'") or die(mysql_error());

	if($query){
		echo "
		<script>
			window.alert('Data Admin Berhasil Di Update!');
			window.location='user_lihat.php'
		</script>";
	}else{
		echo "
		<script>
			window.alert('Data Admin Gagal Di Update!');
			window.location='user_lihat.php'
		</script>";
	}
?>