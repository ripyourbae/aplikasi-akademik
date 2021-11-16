<?php 
	error_reporting(E_ALL ^(E_NOTICE | E_WARNING));
 	session_start();

	include "config/koneksi.php";

	$username=$_POST['username'];
	$nip=$_POST['nip'];
	$passw=md5($_POST['password']);
	$pass=($_POST['password']);
	$level=$_POST['level'];
	
	if($level=='guru'){
		$query=mysql_query("select * from tbl_guru where nip='$username' and password='$pass'");
		$cek=mysql_num_rows($query);
		$row=mysql_fetch_array($query);
		$nip=$row['nip'];
		
		if($cek > 0){
			session_start();
			$_SESSION[username]=$nip;
			$_SESSION[namauser]=$row[nip];
			$_SESSION[nip]=$nip;
			$_SESSION[namaguru]=$row[nama_guru];
			$_SESSION['waktu']=date("Y-m-d H:i:s");
			$_SESSION[level]='guru';
			
			?><script language="javascript">window.alert("Sukses Login Sebagai Guru."); document.location.href="guru/index.php?module=halamanguru";</script><?php
			
		}else{
			?><script language="javascript">window.alert("Username atau Password anda salah."); document.location.href="login.php?status=Username dan Password yang anda masukan salah !!!";</script><?php
		}
	}
	
	elseif($level=='siswa'){
		$query=mysql_query("select * from tbl_siswa where nipd='$username' and password='$pass'");
		$cek=mysql_num_rows($query);
		$row=mysql_fetch_array($query);
		$nipd=$row['nipd'];
		
		if($cek > 0){
			session_start();
			$_SESSION[username]=$nipd;
			$_SESSION[nipd]=$nipd;
			$_SESSION[kodekelas]=$row[kode_kelas];
			$_SESSION[id_siswa]=$id_siswa;
			$_SESSION[namasiswa]=$row[nama_siswa];
			$_SESSION['waktu']=date("Y-m-d H:i:s");
			$_SESSION[level]='siswa';
			
			?><script language="javascript">window.alert("Sukses Login Sebagai Siswa."); document.location.href="siswa/index.php?module=halamansiswa";</script><?php
			
		}else{
			?><script language="javascript">window.alert("Username atau Password anda salah."); document.location.href="login.php?status=Username dan Password yang anda masukan salah !!!";</script><?php
		}
	}
?>

<!-- Header -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SMP N 2 Patikraja</title>
    <link href="view/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/css/modern-business.css" rel="stylesheet">
    <link href="view/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body style='background:url(images/gray_jean.png);'>

    <div style="padding:0% 7% 0 6%;" class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="span12">
                    <div class="span12">
                        <img style="margin-top:-3.5%; margin-bottom:2px; width:100%" src="images/headersmp.jpg" />
            </div>
        </div>
    </div>

    <div class="navbar navbar-default" >
        <div class="row-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>        
            </div>

            <div class="nav-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php" class="fa fa-home" ><b>&nbsp Beranda</b></a>
                    </li>
                    <li>
                        <a href="profil.php" class="fa fa-comment" ><b>&nbsp Profil</b></a>
                    </li>
                    <li>
                        <a href="visimisi.php" class="fa fa-th-large" ><b>&nbsp Visi-Misi</b></a>
                    </li>
                    <li>
                        <a href="kontak.php" class="fa fa-info" ><b>&nbsp Kontak</b></a>
                    </li>
                    <li class="active">
                        <a href="login.php" class="fa fa-user" ><b>&nbsp Login User</b></a>
                    </li>

                    </div>
                </ul>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Header -->


<!-- Content -->
	<body>
		<div style="padding:1% 0% 0 5%;" class="row-fluid">
			<div class="col-lg-8 text-left">
                <div class="panel panel-default">
                    <div class="panel-body">
	                    <?php
	                    	echo "
								<div class='container' style='margin-left:20%;'>
									<div class='row'>
									<div class='login-form'></div>
										<form method=post action=login.php enctype=multipart/form-data role=form>
											<table width=40% style='margin-top:6px; margin-bottom:26%;'>
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
															<span class='input-group-addon'><div class='fa fa-th-large' style='margin-left:3px;'></div></span>
													             <select class='form-control' name=level>
													                <option value=guru> Guru </option>
													                <option value=siswa> Siswa </option>
													            </select>
													    </div>
										            </td>
												</tr>
												<tr>
													<td>
														<div class='form-group input-group'>
															<span class='input-group-addon'><div class='fa fa-user' style='margin-left:5px;'></div></span>
															<input class=form-control placeholder=Username id=username name=username>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class='form-group input-group'>
															<span class='input-group-addon'><div class='fa fa-lock' style=margin-left:7px;></div></span>
															<input type=password class='form-control' placeholder=Password id=password name=password>
														</div>
													</td>
												</tr>
												<tr>
													<td align=center>

														<button class='btn btn-primary' type=submit name=login><i class='fa fa-power-off'> Login </i></button>

														<button class='btn btn-danger' type=reset name=reset><i class='fa fa-refresh'> Reset </i></button>
													</td>
												</tr>
											</table>
									    </form>	
									</div>
								</div>";
						?>
					</div>
				</div>
            </div>
	        <div style="padding:0% 7.5% 0 1%;" class="col-lg-4 text-left">
                <div class="panel panel-default">
                    <div class="panel-body">
	                    <?php include "sidebar-kanan.php"; ?>
	                </div>
	            </div>
	        </div>
	    </div>
<!-- Content -->


<!-- Footer -->
<footer>
	<div style="padding:1% 6% 0 5%;" class="row-fluid">
        <div class="col-lg-12 text-center">
            <div class="panel panel-default">
                <div class="panel-body">
                	<center style="background:#0282af; padding:10px; color:#000; font-size:14px; margin-bottom:3px; border-top:5px solid #cecece">
                    <p><b>Copyright &copy; 2017 SMP N 2 Patikraja</b></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer -->