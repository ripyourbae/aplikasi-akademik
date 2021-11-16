<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	ob_start();
	include "../config/koneksi.php";

	$id_rumus_raport = $_POST['id_rumus_raport'];
	$nilai_harian = $_POST['nilai_harian'];
	$nilai_tugas = $_POST['nilai_tugas'];
	$nilai_uts = $_POST['nilai_uts'];
	$nilai_uas = $_POST['nilai_uas'];
	$kkm = $_POST['kkm'];

	
	$qry = mysql_query("UPDATE tbl_rumus_raport SET id_rumus_raport='$id_rumus_raport', 
		nilai_harian='$nilai_harian', nilai_tugas='$nilai_tugas', nilai_uts='$nilai_uts', nilai_uas='$nilai_uas', kkm='$kkm'
		WHERE id_rumus_raport='$_POST[id_rumus_raport]'") or die(mysql_error());
	
	if($qry){
		echo "
			<script>
				window.alert('Data Berhasil Di Update!');
				window.location='setnilai_edit.php'
			</script>";
	}else{
		echo "
			<script>
				window.alert('Data Gagal Di Update!');
				window.location='setnilai_edit.php'
			</script>";
	}
?>