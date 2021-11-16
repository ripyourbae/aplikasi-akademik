<?php 
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include "../config/koneksi.php";

	$id_halaman = $_POST['id_halaman'];
	$judul = $_POST['judul'];
	$judul_seo = $_POST['judul_seo'];
	$detail = $_POST['detail'];
	
	$query = mysql_query("UPDATE tbl_halaman SET id_halaman='$id_halaman', judul='$judul', judul_seo='$judul_seo', detail='$detail' WHERE id_halaman='$id_halaman'") or die(mysql_error());
	
	if($query){
		echo "
		<script>
			window.alert('Data Berhasil Di Update!');
			window.location='halaman_edit.php'
		</script>";
	}else{
		echo "
		<script>
			window.alert('Data Gagal Di Update!');
			window.location='halaman_edit.php'
		</script>";
	}
?>