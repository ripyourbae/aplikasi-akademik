<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
	$server = "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "db_akademik";
	mysql_connect($server, $user, $pass) or die ("Maaf, Koneksi gagal");
	mysql_select_db($db) or die ("Maaf, database tidak ditemukan");
?>