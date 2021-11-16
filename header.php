<?php 
ob_start();
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
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
                        <img style="margin-top:-3.5%; margin-bottom:2px;  width:100%" src="images/headersmp.jpg" />
            </div>
        </div>
    </div>

    <div class="navbar navbar-default">
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
                    <li class="active">
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
                    <li>
                        <a href="login.php" class="fa fa-user" ><b>&nbsp Login User</b></a>
                    </li>

                    </div>
                </ul>
                </div>
            </div>
        </div>
    </div>
</body>    
</html>
