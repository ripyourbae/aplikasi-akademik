<?php
	error_reporting(E_ALL ^(E_NOTICE | E_WARNING));
	session_start();

	include "../config/koneksi.php";

	if(isset($_POST['log'])) {
		$user = mysql_real_escape_string($_POST['user']);
		$pass = mysql_real_escape_string($_POST['pass']); 
		$pass = md5($pass);
		$sql = mysql_query("SELECT * FROM user_administrator where username='$user' and password='$pass'");
		$data = mysql_fetch_array($sql);
		
		$username = $data['username'];
		$namaadmin = $data['nama_admin'];
		$password = $data['password'];
		$level = $data['level'];

	if ($user==$username && $pass==$password) {
		session_start();
		$_SESSION['namaadmin']=$nama_admin;
		$_SESSION['username']=$username;
		$_SESSION['level']=$level;

		if ($level=='superuser') {
			echo "<script>alert('Sukses Login Sebagai $namaadmin');</script>";
			echo "<meta http-equiv='refresh' content='0; url=index.php?module=homee'>";
		}
		else if ($level=='kepala') {
			echo "<script>alert('Sukses Login Sebagai $namaadmin');</script>";
			echo "<meta http-equiv='refresh' content='0; url=kepala/index.php?module=homee'>";
	
		}
		else {
			echo "<script>alert('Sukses Login Sebagai $namaadmin');</script>";
			echo "<meta http-equiv='refresh' content='0; url=wakil/index.php?module=homee'>";
		}

	} else {
			echo "<meta http-equiv='refresh' content='0; url=login.php'>";
			echo "<script>alert('Username dan password anda salah, Silahkan login kembali !');</script>";
	}
	
	
}

?>


<!-- Header -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Halaman Login Admin</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/plugins/morris.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="../ckeditor/styles.js"></script>

    </head>
    <body style='background:url(images/gray_jean.png);'>
        
<?php
	
	echo "
		<div class='container' style='margin-top:30%;'>
			<div class='row'>
			<div class='login-form'></div>
				<form method=post action=login.php enctype=multipart/form-data role=form>
					<center>
					<table width=40% style='margin-top:-30%; margin-bottom:4px;'>
						<tr>
							<td colspan=3 align=center><img src=../images/logo.png width=200 height=200><br><td>
						</tr>
						<tr>
							<td><br><td>
						</tr>
						<tr>
							<td>
								<div class='alert alert-warning' align=center>
									<strong>PERHATIAN!</strong> Silakan Login Melalui Form Dibawah Ini
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class='form-group input-group'>
									<span class='input-group-addon'><div class='fa fa-user' style='margin-left:5px;'></div></span>
									<input class=form-control placeholder=Username id=user name=user>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class='form-group input-group'>
									<span class='input-group-addon'><div class='fa fa-lock' style=margin-left:7px;></div></span>
									<input type=password class='form-control' placeholder=Password id=pass name=pass>
								</div>
							</td>
						</tr>
						<tr>
							<td align=center>

								<button class='btn btn-primary' type=submit name=log><i class='fa fa-power-off'> Login </i></button>

								<button class='btn btn-danger' type=reset name=reset><i class='fa fa-refresh'> Reset </i></button>
							</td>
						</tr>
					</table>
					</center>
				</form>	
			</div>
		</div>";
?>

