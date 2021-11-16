<?php
	include"../config/koneksi.php";
	$a = mysql_query("DELETE FROM user_administrator WHERE id_admin='$_GET[id_admin]'");
	if($a){
		header('location:user_lihat.php');
	}
?>