<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include"../config/koneksi.php";
	$a = mysql_query("DELETE FROM tbl_jadwal WHERE id_jadwal='$_GET[id_jadwal]'");
	if($a){
		echo "
			<script>
				window.alert('Data Berhasil Di Hapus!');
				window.location='jadwal_hapus.php'
			</script>
		";
		header('location:jadwal_tampil.php');
	}else{
		echo "
			<script>
				window.alert('Data Gagal Dihapus!');
				window.location='jadwal_tampil.php'
			</script>
		";
	}
?>