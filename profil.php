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
                    <li>
                        <a href="index.php" class="fa fa-home" ><b>&nbsp Beranda</b></a>
                    </li>
                    <li class="active">
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
<!-- Header -->


<!-- Content -->
    <div style="padding:1% 0% 0 5%;" class="row-fluid">
        <div class="col-lg-8 text-left">
            <div class="panel panel-default">
                <div class="panel-body">
                    <ol class=breadcrumb>
                        <li>
                            <i class='fa fa-home'></i>  <a href=index.php>SMP Negeri 2 Patikraja</a>
                        </li>
                        <li class=active>
                            <i class='fa fa-eye'></i> Profil
                        </li>
                    </ol>
                    <?php 
                            include "config/koneksi.php";
                            $query = mysql_query("SELECT * FROM tbl_profil");
                            $qry = mysql_fetch_array($query);
                    ?>
                            <div class="alert alert-info">
                                Identitas Sekolah
                            </div>
                        <?php
                        echo"
                            <div class=table-responsive>
                                <table class=table table-bordered table-hover table-striped>
                                    <tr>
                                        <th>NPSN</th>
                                        <td>$qry[npsn]</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>$qry[status]</td>
                                    </tr>
                                    <tr>
                                        <th>Bentuk Pendidikan</th>
                                        <td>$qry[bentuk_pendidikan]</td>
                                    </tr>
                                    <tr>
                                        <th>Status Kepemilikan</th>
                                        <td>$qry[status_kepemilikan]</td>
                                    </tr>
                                    <tr>
                                        <th>SK Pendirian Sekolah</th>
                                        <td>$qry[sk_pendirian]</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal SK Pendirian</th>
                                        <td>$qry[tanggal_sk]</td>
                                    </tr>
                                    <tr>
                                        <th>SK Izin Operasional</th>
                                        <td>$qry[sk_operasional]</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal SK Izin Operasional</th>
                                        <td>$qry[tanggal_operasional]</td>
                                    </tr>
                                </table>
                            </div>";
                        ?>
                            <div class="alert alert-info">
                                Data Pelengkap
                            </div>
                        <?php
                        echo "
                            <div class=table-responsive>            
                                <table class=table table-bordered table-hover table-striped>
                                    <tr>
                                        <th>Kebutuhan Khusus Dilayani</th>
                                        <td>$qry[kebutuhan_khusus]</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Bank</th>
                                        <td>$qry[nama_bank]</td>
                                    </tr>
                                    <tr>
                                        <th>Cabang KCP/Unit</th>
                                        <td>$qry[cabang]</td>
                                    </tr>
                                    <tr>
                                        <th>Rekening Atas Nama</th>
                                        <td>$qry[atas_nama_rek]</td>
                                    </tr>
                                    <tr>
                                        <th>Luas Tanah Milik</th>
                                        <td>$qry[luas_tanah_milik]</td>
                                    </tr>
                                    <tr>
                                        <th>Luas Tanah Bukan Milik</th>
                                        <td>$qry[luas_tanah_bukan]</td>
                                    </tr>
                                </table>
                            </div>";
                        ?>
                            <div class="alert alert-info">
                                Data Rinci
                            </div>
                        <?php
                        echo "
                            <div class=table-responsive>
                                <table class=table table-bordered table-hover table-striped>
                                    <tr>
                                        <th>Status BOS</th>
                                        <td>$qry[status_bos]</td>
                                    </tr>
                                    <tr>
                                        <th>Waktu Penyelenggaraan</th>
                                        <td>$qry[waktu_penyelenggaraan]</td>
                                    </tr>
                                    <tr>
                                        <th>Sertifikasi ISO</th>
                                        <td>$qry[sertifikasi_iso]</td>
                                    </tr>
                                    <tr>
                                        <th>Sumber Listrik</th>
                                        <td>$qry[sumber_listrik]</td>
                                    </tr>
                                   <tr>
                                        <th>Daya Listrik</th>
                                        <td>$qry[daya_listrik]</td>
                                    </tr>
                                    <tr>
                                        <th>Akses Internet</th>
                                        <td>$qry[akses_internet]</td>
                                    </tr>
                                </table>
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
    </div>
<!-- Content -->
    

<!-- Footer -->
<footer>
    <div style="padding:1% 6% 0 5%;" class="row-fluid">
        <div class="col-lg-12 text-center">
            <div class="panel panel-default">
                <div class="panel-body">
                    <center style="background:#0282af; padding:10px; color:#000; font-size:14px; margin-bottom:3px; border-top:5px solid #cecece">
                    <p><b><i>Copyright &copy; 2017 SMP N 2 Patikraja</i></b></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->