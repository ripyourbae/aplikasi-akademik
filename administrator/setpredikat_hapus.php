<?php
	include"../config/koneksi.php";
	$a = mysql_query("DELETE FROM tbl_predikat WHERE id_predikat='$_GET[id_predikat]'");
	if($a){
		header('location:setpredikat_tampil.php');
	}
?>