<?php 
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	ob_start();
	include "../config/koneksi.php";

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

	$move=move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
	$query = mysql_query("INSERT INTO tbl_alumni 
		(nama_alumni, tempat_lahir, tanggal_lahir,alamat, kelas, tahun_lulusan, foto) VALUES 
		('$nama_alumni', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$kelas', '$tahun_lulusan', '$filename')") or die(mysql_error());
	if($query)
		{
			echo "
				<script>
					window.alert('Data Berhasil Di Simpan!');
					window.location='alumni_tampil.php'
				</script>
			";
		}else{
			echo "
				<script>
					window.alert('Data Gagal Di Simpan!');
					window.location='alumni_input.php'
				</script>
			";
		}
?>