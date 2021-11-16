<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	ob_start();
	include "../config/koneksi.php";

	$nama_admin = $_POST['nama_admin'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$level = $_POST['level'];

	$qry = mysql_query("INSERT INTO user_administrator
		(nama_admin, username, password, level) VALUES 
		('$nama_admin', '$username', '$password', '$level')") or die(mysql_error());

	if($qry){
		echo "
		<script>
			window.alert('Admin Berhasil Di Tambah!');
			window.location='user_lihat.php'
		</script>";
	}else{
		echo "
		<script>
			window.alert('Admin Gagal Di Tambah!');
			window.location='user_lihat.php'
		</script>";
	}
?>


