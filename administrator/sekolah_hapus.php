<?php
	include"../config/koneksi.php";
	$a = mysql_query("DELETE FROM tbl_sekolah WHERE id_sekolah='$_GET[id_sekolah]'");
	if($a){
		echo "
			<script>
				window.alert('Data Berhasil Di Hapus!');
				window.location='sekolah_lihat.php'
			</script>
		";
		header('location:sekolah_lihat.php');
	}
?>