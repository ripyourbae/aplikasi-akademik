<?php
	ob_start();

	include "../config/koneksi.php";

	$nilai_a = $_POST['nilai_a'];
	$nilai_b = $_POST['nilai_b'];
	$grade = $_POST['grade'];
	$keterangan = $_POST['keterangan'];

	$qry = mysql_query("INSERT INTO tbl_predikat
		(nilai_a, nilai_b, grade, keterangan) VALUES 
		('$nilai_a', '$nilai_b', '$grade', '$keterangan')") or die(mysql_error());

	if($qry){
		echo "
		<script>
			window.alert('Data Berhasil Di Simpan!');
			window.location='setpredikat_tampil.php'
		</script>";
	}else{
		echo "
		<script>
			window.alert('Data Gagal Di Simpan!');
			window.location='setpredikat_tampil.php'
		</script>";
	}
?>