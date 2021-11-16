<div class='alert alert-info' style='margin-bottom:8%; text-align:center;'><strong>Kegiatan Lomba</strong></div>
<ul style='background:#fff; box-shadow:1px 5px 3px #cecece; margin-top:-7%' class="nav nav-tabs nav-stacked">
		<?php 
			$pilihan = mysql_query("SELECT * FROM tbl_berita WHERE headline='N' ORDER BY id_berita DESC LIMIT 5");
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
	
</div>
	<div class="panel-body">
		<div colspan="3" class='alert alert-info' style="margin-top:-5%; margin-bottom:1px; text-align:center; "><strong>Kalender</strong></div>
			
				<ul style='background:#fff; box-shadow:1px 5px 3px #cecece; margin-top:2%;margin-bottom:15%;' class="nav nav-tabs nav-stacked">
			        <?php include "kalender.php"; ?>     
			    </ul>
		</div>
    </div>