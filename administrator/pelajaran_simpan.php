<?php
	ob_start();
	include "../config/koneksi.php";

	$kode_pelajaran = $_POST['kode_pelajaran'];
	$nama = $_POST['nama_pelajaran'];
	$semester = $_POST['semester'];

	mysql_query("insert into tbl_pelajaran(kode_pelajaran, nama_pelajaran, semester) 
	value ('$kode_pelajaran','$nama','$semester')") or die(mysql_error());
	echo "
			<script>
				window.alert('Data Berhasil Di Simpan!');
				window.location='pelajaran_tampil.php'
			</script>";
?>