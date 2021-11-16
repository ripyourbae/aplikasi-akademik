<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	ob_start();
	include "../config/koneksi.php";

	$id_berita = $_POST['id_berita'];
	$judul = $_POST['judul'];
	$isi_berita = $_POST['isi_berita'];
	$gambar = $_POST['gambar'];

	$dir_gambar = '../foto_berita/';
	$filename = $_FILES['gambar']['name'];
	$uploadfile = $dir_gambar . $filename;

	if ($filename != ''){
		if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile))
		{
			mysql_query("UPDATE tbl_berita set id_berita='$id_berita', judul='$judul', isi_berita='$isi_berita', gambar='$filename' WHERE id_berita='$_POST[id_berita]'") or die(mysql_error());

			echo "
					<script>
						window.alert('Data Berhasil Diperbaharui');
						window.location='berita_lihat.php'
					</script>
				";

		} else{
				echo "
					<script>
						window.alert('Data Gagal Diperbaharui');
						window.location='berita_lihat.php'
					</script>
				";
		}
	}else {
		mysql_query("UPDATE tbl_berita set id_berita='$id_berita', judul='$judul', isi_berita='$isi_berita' WHERE id_berita='$_POST[id_berita]'") or die(mysql_error());

		echo "
				<script>
					window.alert('Data Berhasil Diperbaharui');
					window.location='berita_lihat.php'
				</script>
			";
	}
?>