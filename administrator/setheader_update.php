<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include "../config/koneksi.php";

	$id_header_print = $_POST['id_header_print'];
	$header_1 = $_POST['header_1'];
	$header_2 = $_POST['header_2'];
	$ttd_kiri = $_POST['ttd_kiri'];
	$ttd_kanan = $_POST['ttd_kanan'];

	
	$qry = mysql_query("UPDATE tbl_header_print SET id_header_print='$id_header_print', 
		header_1='$header_1', header_2='$header_2', ttd_kiri='$ttd_kiri', ttd_kanan='$ttd_kanan'
		WHERE id_header_print='$_POST[id_header_print]'") or die(mysql_error());
	
	if($qry){
		echo "
			<script>
				window.alert('Data Berhasil Di Update!');
				window.location='setheader_edit.php'
			</script>";
	}else{
		echo "
			<script>
				window.alert('Data Gagal Di Update!');
				window.location='setheader_edit.php'
			</script>";
	}
?>