<?php
	include "../config/koneksi.php";

	$id_nilai = $_POST['id_nilai'];
	$nilai = $_POST['nilai'];
	$keterangan = $_POST['keterangan'];
	$status = $_POST['status'];
	

	$qry = mysql_query("INSERT INTO tbl_nilai_detail (id_nilai, nilai, keterangan, status) VALUES ('$id_nilai', '$nilai', '$keterangan', '$status')") or die(mysql_error());
	if($qry){
		echo "
			<script>
				window.alert('Data Berhasil Di Simpan!');
				window.location='nilai_tugas.php'
			</script>";
	}else{
		echo "
			<script>
				window.alert('Data Gagal Di Simpan!');
				window.location='nilai_tugas.php'
			</script>";
	}
?>