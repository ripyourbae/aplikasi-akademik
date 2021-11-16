<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include"../config/koneksi.php";
	$a = mysql_query("DELETE FROM tbl_guru WHERE nip='$_GET[nip]'");
	if($a){
		echo "
			<script>
				window.alert('Data Berhasil Di Hapus!');
				window.location='guru_hapus.php'
			</script>
		";
		header('location:guru_tampil.php');
	}else{
		echo "
			<script>
				window.alert('Data Gagal Dihapus!');
				window.location='guru_tampil.php'
			</script>
		";
	}
?>