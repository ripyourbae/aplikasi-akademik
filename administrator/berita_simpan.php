<?php 
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	ob_start();
	include "../config/koneksi.php";

	$judul = $_POST['judul'];
	$headline = $_POST['headline'];
	$isi_berita = $_POST['isi_berita'];
	$gambar = $_POST['gambar'];

	$dir_gambar = '../foto_berita/';
	$filename = $_FILES['gambar']['name'];
	$uploadfile = $dir_gambar . $filename;

	$move=move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile);
	$query = mysql_query("INSERT INTO tbl_berita 
		(judul,headline, isi_berita, gambar) VALUES 
		('$judul', '$headline', '$isi_berita', '$filename')") or die(mysql_error());
	if($query)
		{
			echo "
				<script>
					window.alert('Data Berhasil Di Simpan!');
					window.location='berita_lihat.php'
				</script>
			";
		}else{
			echo "
				<script>
					window.alert('Data Gagal Di Simpan!');
					window.location='berita_input.php'
				</script>
			";
		}
?>