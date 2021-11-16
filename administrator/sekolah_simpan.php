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
	$cekdata="select nis from tbl_sekolah where nis='".$_POST['nis']."'";
	$ada=mysql_query($cekdata) or die(mysql_error());

	if(mysql_num_rows($ada)>0) {
		echo '<script>
		alert("NOMOR INDUK SEKOLAH SUDAH TERDAFTAR !!!"); window.location="sekolah_input.php"; </script>';
		exit();
	}else{
		$masukin = mysql_query("INSERT INTO tbl_sekolah
			(nama_sekolah, nss, nis, npsn, skpd, alamat, 
			telepon_sekolah, fax, email, profil_sekolah) 
			VALUES 
			('$nama_sekolah', '$nss', '$nis', '$npsn', '$skpd', 
			'$alamat', '$telepon_sekolah', '$fax', '$email', '$profil_sekolah')");
		if($masukin > 0){
			echo "
				<script>
					window.alert('Data Berhasil Di Simpan!');
					window.location='sekolah_lihat.php'
				</script>
			";
		}else{
			echo "
				<script>
					window.alert('Data Berhasil Di Update!');
					window.location='nilai_lihat.php'
				</script>
			";
		}
	}
?>
