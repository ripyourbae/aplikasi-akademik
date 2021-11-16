<?php
    ob_start();
    session_start();
    error_reporting(0);

    if ($_SESSION[level] == ''){
        echo "<script>window.alert('Maaf, untuk mengakses halaman ini anda harus login.');
                    window.location='login.php?halamandepan'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Halaman Administrator</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/plugins/morris.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="../ckeditor/styles.js"></script>

    </head>
    <body>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Halaman Administrator</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <?php
                        if ($_SESSION[level]=='superuser'){
                        }
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo "$_SESSION[level]"; ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            <a href="index.php"><i class="fa fa-fw fa-home"></i> Beranda</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#sekolah"><i class="fa fa-fw fa-user">
                            </i> Sekolah <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="sekolah" class="collapse">
                                <li>
                                    <a href="halaman_edit.php">Halaman Welcome</a>
                                </li>
                                <li>
                                    <a href="profil_edit.php">Profil</a>
                                </li>
                                <li>
                                    <a href="visimisi_edit.php">Visi Misi</a>
                                </li>
                                <li>
                                    <a href="kontak_edit.php">Kontak</a>
                                </li>
                                <li>
                                    <a href="alumni_tampil.php">Alumni</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="berita_lihat.php"><i class="fa fa-fw fa-table"></i> Berita</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#data"><i class="fa fa-fw fa-list-ul">
                            </i> Kelola Data <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="data" class="collapse">
                                <li>
                                    <a href="user_lihat.php">Data Admin</a>
                                </li>
                                <li>
                                    <a href="guru_tampil.php">Data Guru</a>
                                </li>
                                <li>
                                    <a href="siswa_lihat.php">Data Siswa</a>
                                </li>
                                <li>
                                    <a href="pelajaran_tampil.php">Data Mata Pelajaran</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#akademik"><i class="fa fa-fw fa-list-ol">
                            </i> Data Akademik<i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="akademik" class="collapse">
                                <li>
                                    <a href="kelas_tampil.php">Data Kelas</a>
                                </li>
                                <li>
                                    <a href="jadwal_tampil.php">Data Jadwal Pelajaran</a>
                                </li>
                                <li>
                                    <a href="datanilai_tampil.php">Data Nilai Siswa</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#peralatan"><i class="fa fa-fw fa-wrench">
                            </i> Peralatan<i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="peralatan" class="collapse">
                                <li>
                                    <a href="setheader_edit.php">Setting Header Print</a>
                                </li>
                                <li>
                                    <a href="setpredikat_tampil.php">Setting Predikat Nilai</a>
                                </li>
                                <li>
                                    <a href="setnilai_edit.php">Setting Nilai Akhir</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#laporan"><i class="fa fa-fw fa-book">
                            </i> Laporan <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="laporan" class="collapse">
                                <li>
                                    <a href="laptampil_siswa.php">Laporan Data Siswa</a>
                                </li>
                                <li>
                                    <a href="laptampil_guru.php">Laporan Data Guru</a>
                                </li>
                                <li>
                                    <a href="laptampil_pelajaran.php">Laporan Mata Pelajaran</a>
                                </li>
                                <li>
                                    <a href="laptampil_kelas.php">Laporan Kelas</a>
                                </li>
                                <li>
                                    <a href="laptampil_jadwal.php">Laporan Jadwal Pelajaran</a>
                                </li>
                                <li>
                                    <a href="laptampil_nilai.php">Laporan Nilai</a>
                                </li>
                                <li>
                                    <a href="cetakraport_tampil.php">Cetak Raport Siswa</a>
                                </li>
                                <li>
                                    <a href="cetaktranskrip_tampil.php">Cetak Transkrip Nilai</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        <div id="page-wrapper">
            <div class="container-fluid">