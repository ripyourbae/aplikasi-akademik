<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include"../config/koneksi.php";
	$a = mysql_query("DELETE FROM tbl_alumni WHERE id_alumni='$_GET[id_alumni]'");
	if($a){
		echo "
			<script>
				window.alert('Data Berhasil Di Hapus!');
				window.location='alumni_tampil.php'
			</script>
		";
	}else{
		echo "
			<script>
				window.alert('Data Gagal Dihapus!');
				window.location='alumni_tampil.php'
			</script>
		";
	}
?>