<?php
	ob_start();
	include "../config/koneksi.php";

	$id_jadwal = $_POST['id_jadwal'];
	$kode_kelas = $_POST['kode_kelas'];
	$kode_pelajaran = $_POST['kode_pelajaran'];
	$nip = $_POST['nip'];
	$tahun_ajaran = $_POST['tahun_ajaran'];
	$jam = $_POST['jam'];
	$hari = $_POST['hari'];

	mysql_query("insert into tbl_jadwal(id_jadwal, kode_kelas, kode_pelajaran, nip, tahun_ajaran, jam, hari) 
	value ('$id_jadwal','$kode_kelas','$kode_pelajaran','$nip','$tahun_ajaran', '$jam', '$hari')") or die(mysql_error());
	echo "
			<script>
				window.alert('Data Berhasil Di Simpan!');
				window.location='jadwal_tampil.php'
			</script>";
?>