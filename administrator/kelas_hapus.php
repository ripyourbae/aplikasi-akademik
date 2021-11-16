<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include"../config/koneksi.php";
	$a = mysql_query("DELETE FROM tbl_kelas WHERE id_kelas='$_GET[id_kelas]'");
	if($a){
		echo "
			<script>
				window.alert('Data Berhasil Di Hapus!');
				window.location='kelas_hapus.php'
			</script>
		";
		header('location:kelas_tampil.php');
	}else{
		echo "
			<script>
				window.alert('Data Gagal Dihapus!');
				window.location='kelas_tampil.php'
			</script>
		";
	}
?>