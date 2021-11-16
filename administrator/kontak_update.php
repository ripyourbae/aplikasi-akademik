<?php
	include "../config/koneksi.php";

	$id_kontak = $_POST['id_kontak'];
	$alamat = $_POST['alamat'];
	$rt_rw = $_POST['rt_rw'];
	$dusun = $_POST['dusun'];
	$desa = $_POST['desa'];
	$kecamatan = $_POST['kecamatan'];
	$kabupaten = $_POST['kabupaten'];
	$provinsi = $_POST['provinsi'];
	$kode_pos = $_POST['kode_pos'];
	$lintang = $_POST['lintang'];
	$bujur = $_POST['bujur'];
	$telepon = $_POST['telepon'];
	$fax = $_POST['fax'];
	$email = $_POST['email'];

	$query=mysql_query("UPDATE tbl_kontak SET id_kontak='$id_kontak', alamat='$alamat', rt_rw='$rt_rw', 
		dusun='$dusun', desa='$desa', kecamatan='$kecamatan', kabupaten='$kabupaten', provinsi='$provinsi', 
		kode_pos='$kode_pos', lintang='$lintang', bujur='$bujur', telepon='$telepon', 
		fax='$fax', email='$email' WHERE id_kontak='$id_kontak'") or die(mysql_error());
	

	if($query){
		echo "
		<script>
			window.alert('Data Berhasil Di Update!');
			window.location='kontak_edit.php'
		</script>";
	}else{
		echo "
		<script>
			window.alert('Data Gagal Di Update!');
			window.location='kontak_edit.php'
		</script>";
	}
?>