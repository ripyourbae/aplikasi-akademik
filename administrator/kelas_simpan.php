<?php
ob_start();
	include "../config/koneksi.php";

	$id_kelas = $_POST['id_kelas'];
	$kode_kelas = $_POST['kode_kelas'];
	$nip = $_POST['nip'];
	$nama_kelas = $_POST['nama_kelas'];
	$jumlah_siswa = $_POST['jumlah_siswa'];

	mysql_query("insert into tbl_kelas(id_kelas, kode_kelas, nip, nama_kelas, jumlah_siswa) 
	value ('$id_kelas','$kode_kelas','$nip','$nama_kelas','$jumlah_siswa')") or die(mysql_error());
	echo "
			<script>
				window.alert('Data Berhasil Di Simpan!');
				window.location='kelas_tampil.php'
			</script>";
?>