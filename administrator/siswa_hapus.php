<?php
	include"../config/koneksi.php";
	$a = mysql_query("DELETE FROM tbl_siswa WHERE id_siswa='$_GET[id_siswa]'");
	if($a){
		header('location:siswa_lihat.php');
	}
?>