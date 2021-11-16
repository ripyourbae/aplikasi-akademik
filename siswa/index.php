<?php include "header.php"; ?>

    <div style="padding:1% 6% 0 5%;" class="row-fluid">
        <div class="col-lg-3 text-left table-responsive">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php include "sidebar-kiri.php"; ?>
                </div>
            </div>
        </div>
        <div style="padding:0% 1% 0 1%;" class="col-lg-6 text-left">
            <div class="panel panel-default">
                <div class="panel-body">

                    <?php include "slide.php"; ?>

                    <ul style='background:#fff; box-shadow:1px 5px 3px #cecece; margin-bottom:4%;' class="nav nav-tabs nav-stacked">

                    <?php

                        include "../config/koneksi.php";
                        echo "<br>";
                        $tampil = mysql_query("SELECT * FROM tbl_berita ORDER BY id_berita DESC LIMIT 1");
                        while ($t = mysql_fetch_array($tampil)){
                            $isi_berita =(strip_tags($t[isi_berita])); 
                            $isi = substr($isi_berita,0,320);  
                            echo "
                            <li style='clear:both'>
                            <div class='alert alert-info' align='center' style='height:10%;'><a href='berita-$t[id_berita].html'>$t[judul]</a></div>
                                <div style='height:100px; overflow:hidden; float:left'>
                                    <img style='width:120px; float:left; margin-right:7px' src='../foto_berita/$t[gambar]' class='img-polaroid'>
                                </div>
                                  <p>$isi <a href='berita-$t[id_berita].html'>[Baca Selanjutnya]</a></p><br>
                                  <hr style='width:100%; margin-top:3%; margin-bottom:-2%;'><br>";
                        }
                        echo "<a class='btn btn-block btn-default' style='background:#0282af; text-color:#000;' href='semua_berita.php'><b>Lihat Semua</b></a>";
                    ?>
                    </ul><br>

                </div>
            </div>
        </div>

        <div class="col-lg-3 text-left table-responsive">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php include "sidebar-kanan.php"; ?>
                </div>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>