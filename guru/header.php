<?php
    ob_start();
    session_start();
    error_reporting(0);

    if ($_SESSION[level] == ''){
        echo "<script>window.alert('Maaf, untuk mengakses halaman ini anda harus login.');
                    window.location='../index.php?halamandepan'</script>";
    }
?>

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
<body style='background:url(../images/gray_jean.png);'>

    <div style="padding:0% 7% 0 6%;" class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="span12">
                    <div class="span12">
                        <img style="margin-top:-3.5%; margin-bottom:2px; width:100%" src="../images/headersmp.jpg" />
            </div>
        </div>
    </div>

    <div class="navbar navbar-default">
        <div class="container">
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
                    <?php
                        if ($_SESSION[level]=='guru'){
                        }
                    ?>
                    <li class="nav pull-left"><a href="#"><b> Selamat Datang - </b><b style='color:blue'><?php echo "$_SESSION[namaguru]"; ?> (Guru)</b></a></li>

                    <li class="active">
                        <a href="index.php" class="fa fa-home"><b>&nbsp Beranda</b></a>
                    </li>
                    <li>
                        <a href="datanilai_tampil.php" class="fa fa-file-text"><b>&nbsp Data Nilai</b></a>
                    </li>
                    <li>
                        <a href="laptampil_nilai.php" class="fa fa-users"><b>&nbsp Laporan Nilai Siswa</b></a>
                    </li>
                    <li class="nav pull-right">
                        <a href="logout.php" class="fa fa-power-off"><b>&nbsp Logout</b></a>
                    </li>

                    </div>
                </ul>
                </div>
            </div>
        </div>
    </div>
</body>    
