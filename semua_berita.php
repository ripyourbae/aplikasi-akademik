<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
    ob_start();
    include "config/koneksi.php";
    include "config/class_paging.php" ; 
    include "header.php"; ?>
  	
  	
    <div style="padding:1% 0.5% 0 5%;" class="row-fluid">
        <div class="col-lg-8 text-left">
            <div class="panel panel-default">
                <div class="panel-body">

                    <?php

                        $p      = new Paging;
                        $batas  = 5;
                        $posisi = $p->cariPosisi($batas);

                        
                        $tampil = mysql_query("SELECT * FROM tbl_berita ORDER BY id_berita DESC LIMIT $posisi, $batas");
                    
                        while ($t = mysql_fetch_array($tampil)){

					?>
                           
                    <?php

                    $isi_berita =(strip_tags($t[isi_berita])); 
                    $isi = substr($isi_berita,0,480); 
                    $isi = substr($isi_berita,0,strrpos($isi," "));
                        echo "
                        <div class='alert alert-info'>
                            <a>$t[judul]</a>
                        </div>
                        <div style='height:100px; overflow:hidden; float:left'>
                            <img style='width:150px; float:left; margin-right:7px' src='foto_berita/$t[gambar]' class='img-polaroid'>
                        </div>
                        <p style='margin-top:7%; margin-bottom:2%;'>$isi <a href='berita-$t[id_berita]-$t[judul_seo].html'>[Baca Selanjutnya]</a></p><div style='clear:both'></div>

                        <hr style='margin-top:1%; margin-bottom:1%;'>";
                    }

                    $jmldata=mysql_num_rows(mysql_query("SELECT * FROM tbl_berita"));

                    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
                    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
                    
                        echo "<hr>";
                        echo "
                            <div style='float:left; margin-top:-40px; margin-left:-40px;'>
                                <ul>
                                    <a href=semua_berita.php?halaman=1>First</a>
                                    <li class='pagination'>&laquo;</li>
                                    <li class='pagination'><a>$linkHalaman</a></li>
                                    <li class='pagination'>&raquo;</li>
                                    <a href=semua_berita.php?halaman=$jmlhalaman>Last</a>
                                    
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

