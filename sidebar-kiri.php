<?php
    error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
    ob_start();
    include "config/koneksi.php"; ?>

	<center>
		<div style='background:#fff; padding-bottom:5px; box-shadow:1px 5px 3px #cecece'>
			<div class='alert alert-info' style='text-align:center;'><strong>Kepala Sekolah</strong></div>
			<img width="170px" src="images/foto.jpg" class="img-polaroid">
			<?php                
                $query=mysql_query ("SELECT * FROM tbl_guru where jenis_ptk='Kepala Sekolah'");
                
                $w=mysql_fetch_array($query)
            ?>

			<p><br><strong><?php echo "$w[nama_guru]"; ?></strong></p>
		</div>
	</center><br>

	<div class='alert alert-info' style='text-align:center;'><strong>Kegiatan Sekolah</strong></div><br>
	<ul style='background:#fff; box-shadow:1px 5px 3px #cecece; margin-top:-15%; margin-bottom:5%;' class="nav nav-tabs nav-stacked">
		<?php 
			$pilihan = mysql_query("SELECT * FROM tbl_berita WHERE headline='Y' ORDER BY id_berita DESC LIMIT 4");
			while ($p = mysql_fetch_array($pilihan)){
				echo "
					
					<div style='height:50px; overflow:hidden; float:left'>
						<img style='width:70px; float:left; margin-right:7px' src='foto_berita/$p[gambar]' class='img-polaroid'>
					</div>
						<a style='height:50px'>$p[judul]</a>

					<hr style='margin-top:7%; margin-bottom:2%;'>";
			}
		?>
	</ul><br>

	<div class='alert alert-info' style='text-align:center;'><strong>Daftar Alumni</strong></div><br>
	<ul style='background:#fff; box-shadow:1px 5px 3px #cecece; margin-top:-15%; margin-bottom:5%;' class="nav nav-tabs nav-stacked">
		<?php 
			$alumni = mysql_query("SELECT * FROM tbl_lulusan ORDER BY id_lulusan ASC");
			while ($a = mysql_fetch_array($alumni)){
				echo "
					<center>
						<a href=tampilalumni.php?id=$a[tahun_lulusan] style='height:50px'> Tahun Lulusan $a[tahun_lulusan]</a> <hr style='margin-top:1%; margin-bottom:3%;'>
					</center>";
			}
		?>
	</ul><br>

