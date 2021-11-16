<?php
  session_start();
  include"../config/koneksi.php";
  session_destroy();
  echo "<script>window.alert('Sukses Keluar dari system.');
				window.location='../index.php'</script>";
	die();	
?>