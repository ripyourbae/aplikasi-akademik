<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include"../config/koneksi.php";
	$a = mysql_query("DELETE FROM tbl_berita WHERE id_berita='$_GET[id_berita]'");
	if($a){
		echo "
			<script>
				window.alert('Data Berhasil Di Hapus!');
				window.location='berita_hapus.php'
			</script>
		";
		header('location:berita_lihat.php');
	}else{
		echo "
			<script>
				window.alert('Data Gagal Dihapus!');
				window.location='berita_lihat.php'
			</script>
		";
	}
?>