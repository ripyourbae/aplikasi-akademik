<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include"../config/koneksi.php";
	$a = mysql_query("DELETE FROM tbl_pelajaran WHERE id_pelajaran='$_GET[id_pelajaran]'");
	if($a){
		echo "
			<script>
				window.alert('Data Berhasil Di Hapus!');
				window.location='pelajaran_hapus.php'
			</script>
		";
		header('location:pelajaran_tampil.php');
	}else{
		echo "
			<script>
				window.alert('Data Gagal Dihapus!');
				window.location='pelajaran_tampil.php'
			</script>
		";
	}
?>