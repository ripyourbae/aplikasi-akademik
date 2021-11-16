<?php 
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include "../config/koneksi.php";

	$id_visimisi = $_POST['id_visimisi'];
	$visi = $_POST['visi'];
	$misi1 = $_POST['misi1'];
	$misi2 = $_POST['misi2'];
	$misi3 = $_POST['misi3'];
	$misi4 = $_POST['misi4'];
	$misi5 = $_POST['misi5'];
	$misi6 = $_POST['misi6'];
	$misi7 = $_POST['misi7'];
	$misi8 = $_POST['misi8'];
	$misi9 = $_POST['misi9'];
	$misi10 = $_POST['misi10'];

	$query = mysql_query("UPDATE tbl_visimisi SET id_visimisi='$id_visimisi', visi='$visi', misi1='$misi1', misi2='$misi2', misi3='$misi3', misi4='$misi4', misi5='$misi5', misi6='$misi6', misi7='$misi7', misi8='$misi8', misi9='$misi9', misi10='$misi10' WHERE id_visimisi='$id_visimisi'") or die(mysql_error());
	
	if($query){
		echo "
		<script>
			window.alert('Data Berhasil Di Update!');
			window.location='visimisi_edit.php'
		</script>";
	}else{
		echo "
		<script>
			window.alert('Data Gagal Di Update!');
			window.location='visimisi_edit.php'
		</script>";
	}
?>