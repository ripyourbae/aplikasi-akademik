<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	ob_start();

	$nama_sekolah = $_POST['nama_sekolah'];
	$nss = $_POST['nss'];
	$nis = $_POST['nis'];
	$npsn = $_POST['npsn'];
	$skpd = $_POST['skpd'];
	$alamat = $_POST['alamat'];
	$telepon_sekolah = $_POST['telepon_sekolah'];
	$fax = $_POST['fax'];
	$email = $_POST['email'];
	$profil_sekolah = $_POST['profil_sekolah'];

	include "../config/koneksi.php";

	$qry = mysql_query("UPDATE tbl_sekolah SET 
		nama_sekolah='$nama_sekolah', nss='$nss', nis='$nis', npsn='$npsn', 
		skpd='$skpd', alamat='$alamat', telepon_sekolah='$telepon_sekolah', 
		fax='$fax', email='$email', profil_sekolah='$profil_sekolah' WHERE 
		id_sekolah='$id_sekolah'") or die(mysql_error());
	if($qry){
		echo "
				<script>
					window.alert('Data Berhasil Di Update!');
					window.location='sekolah_lihat.php'
				</script>
			";
	}else{
		echo "
				<script>
					window.alert('Data Gagal Di Update!');
					window.location='sekolah_lihat.php'
				</script>
			";
	}
?>
