<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	ob_start();
	include "../config/koneksi.php";

	$id_alumni = $_POST['id_alumni'];
	$nama_alumni = $_POST['nama_alumni'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	$kelas = $_POST['kelas'];
	$tahun_lulusan = $_POST['tahun_lulusan'];
	$foto = $_POST['foto'];

	$dir_foto = '../foto_berita/foto_alumni/';
	$filename = $_FILES['foto']['name'];
	$uploadfile = $dir_foto . $filename;

	if ($filename != ''){
		if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile))
		{
			mysql_query("UPDATE tbl_alumni SET id_alumni='$id_alumni', nama_alumni='$nama_alumni', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', kelas='$kelas', tahun_lulusan='$tahun_lulusan', foto='$filename' WHERE id_alumni='$_POST[id_alumni]'") or die(mysql_error());

			echo "
					<script>
						window.alert('Data Berhasil Diperbaharui');
						window.location='alumni_tampil.php'
					</script>
				";

		} else{
				echo "
					<script>
						window.alert('Data Gagal Diperbaharui');
						window.location='alumni_edit.php'
					</script>
				";
		}
	}else {
		mysql_query("UPDATE tbl_alumni SET id_alumni='$id_alumni', nama_alumni='$nama_alumni', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', kelas='$kelas', tahun_lulusan='$tahun_lulusan' WHERE id_alumni='$_POST[id_alumni]'") or die(mysql_error());

		echo "
				<script>
					window.alert('Data Berhasil Diperbaharui');
					window.location='alumni_tampil.php'
				</script>
			";
	}
?>