<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
    ob_start();
    include "config/koneksi.php"; 
    include "header.php"; 
    include "config/class_paging.php"; ?>

    <?php

    $tampil = mysql_query("SELECT * FROM tbl_alumni WHERE tahun_lulusan='$_GET[id]'");
    $b = mysql_fetch_array($tampil)

    ?>
  	
    <div style="padding:1% 0.5% 0 5%;" class="row-fluid">
        <div class="col-lg-8 text-left">
            <div class="panel panel-default">
                <div class="panel-body">
                <?php
                    echo "
                        <div class='alert alert-info'><h4 align=center> Daftar Alumni Tahun Lulusan $b[tahun_lulusan]</h4></div>";
                ?>

                    <?php
                    $p      = new Paging;
                    $batas  = 5;
                    $posisi = $p->cariPosisi($batas);

                    $tampil = mysql_query("SELECT * FROM tbl_alumni WHERE tahun_lulusan='$_GET[id]' ORDER BY id_alumni ASC LIMIT $posisi, $batas");
                    
                    while ($t = mysql_fetch_array($tampil)){

                        echo "
                        <div class='alert alert-info'>
                            <p><u><b> $t[nama_alumni] </b></u></p>
                        </div>
                        <div style='height:100px; overflow:hidden; float:left'>
                            <img style='width:100px; float:left; margin-right:7px' src='foto_berita/foto_alumni/$t[foto]' class='img-polaroid'>
                        </div>
                            <p>Kelas                      : $t[kelas] </p>
                            <p>Tempat & Tanggal Lahir     : $t[tempat_lahir], $t[tanggal_lahir]</p>
                            <p>Alamat                     : $t[alamat] </p>
                            <div style='clear:both'>
                        </div>
                            <hr style='margin-top:1%; margin-bottom:1%;'>";
                    }

                    $jmldata=mysql_num_rows(mysql_query("SELECT * FROM tbl_alumni"));
                    
                    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
                    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
                    
                        echo "<hr>";
                        echo "
                            <div style='float:left; margin-top:-40px; margin-left:-40px;'>
                                <ul>
                                    <a href=tampilalumni.php?id=$_GET[id]&halaman=1>First</a>
                                    <li class='pagination'><a>&laquo;</a></li>
                                    <li class='pagination'><a>$linkHalaman</a></li>
                                    <li class='pagination'><a>&raquo;</a></li>
                                    <a href=tampilalumni.php?id=$_GET[id]&halaman=$jmlhalaman>Last</a>
                                    
                                </ul>
                            </div>";

                    ?>
                   
                    </div>
                </div>
            </div>
            <div style="padding:0% 7% 0 1%;" class="col-lg-4 text-left">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php include "sidebar-kanan.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	


<?php include "footer.php"; ?>

