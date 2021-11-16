<?php include "header.php"; ?>

<?php
    error_reporting(E_ALL^(E_NOTICE | E_WARNING));
    error_reporting(E_ALL^E_DEPRECATED);
 
    include "../../config/koneksi.php";

    $guru = mysql_query("SELECT * FROM tbl_guru");
    $jumlahguru = mysql_num_rows($guru);

    $siswa = mysql_query("SELECT * FROM tbl_siswa");
    $jumlahsiswa = mysql_num_rows($siswa);

    $pelajaran = mysql_query("SELECT * FROM tbl_pelajaran");
    $jumlahpelajaran = mysql_num_rows($pelajaran);

    $kelas = mysql_query("SELECT * FROM tbl_kelas");
    $jumlahkelas = mysql_num_rows($kelas);

    echo "
	<center>
		<div class='alert alert-success'>
			<strong>Selamat Datang </strong> di halaman Administrator
		</div>
	</center>

		<div class='row'>
            <div class='col-lg-12'>
                <h1 class='page-header'>
                    Beranda <small>Statistics Overview</small>
                </h1>
                <ol class='breadcrumb'>
                    <li class='active'>
                        <i class='fa fa-home'></i> Beranda
                    </li>
                </ol>
            </div>
        </div>

		<div class='row'>
            <div class='col-lg-3 col-md-6'>
                <div class='panel panel-primary'>
                    <div class='panel-heading'>
                        <div class='row'>
                        	<div class='col-xs-3'>
                                <i class='fa fa-user fa-5x'></i>
                            </div>
                            <div class='col-xs-9 text-right'>
                            	<div class='huge'>$jumlahguru</div>
                                    <div>Data Guru !</div>
                                </div>
                            </div>
                        </div>
                            <a href='#'>
                                <div class='panel-footer'>
                                    <span class='pull-left'>View Details</span>
                                    <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class='col-lg-3 col-md-6'>
                        <div class='panel panel-green'>
                            <div class='panel-heading'>
                                <div class='row'>
                                    <div class='col-xs-3'>
                                        <i class='fa fa-users fa-5x'></i>
                                    </div>
                                    <div class='col-xs-9 text-right'>
                                        <div class='huge'>$jumlahsiswa</div>
                                        <div>Data Siswa !</div>
                                    </div>
                                </div>
                            </div>
                            <a href='#'>
                                <div class='panel-footer'>
                                    <span class='pull-left'>View Details</span>
                                    <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class='col-lg-3 col-md-6'>
                        <div class='panel panel-yellow'>
                            <div class='panel-heading'>
                                <div class='row'>
                                    <div class='col-xs-3'>
                                        <i class='fa fa-file-text fa-5x'></i>
                                    </div>
                                    <div class='col-xs-9 text-right'>
                                        <div class='huge'>$jumlahpelajaran</div>
                                        <div>Data Mata Pelajaran !</div>
                                    </div>
                                </div>
                            </div>
                            <a href='#'>
                                <div class='panel-footer'>
                                    <span class='pull-left'>View Details</span>
                                    <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class='col-lg-3 col-md-6'>
                        <div class='panel panel-red'>
                            <div class='panel-heading'>
                                <div class='row'>
                                    <div class='col-xs-3'>
                                        <i class='fa fa-folder fa-5x'></i>
                                    </div>
                                    <div class='col-xs-9 text-right'>
                                        <div class='huge'>$jumlahkelas</div>
                                        <div>Data Kelas !</div>
                                    </div>
                                </div>
                            </div>
                            <a href='#'>
                                <div class='panel-footer'>
                                    <span class='pull-left'>View Details</span>
                                    <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
?>

<?php include "footer.php"; ?>