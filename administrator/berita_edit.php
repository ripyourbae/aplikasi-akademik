<?php include "header.php"; ?>
    <?php 
    	include "../config/koneksi.php";
    	$id_berita = $_GET['id_berita'];

    	$query = mysql_query("SELECT * FROM tbl_berita WHERE id_berita='$id_berita'");
    	$ada = mysql_fetch_array($query);
    	echo "
    		<div class='alert alert-info'>Edit Data Berita</div><hr><br/>
    		<div class=form-group>
    			<form method=post action=berita_update.php enctype=multipart/form-data>
    				<input type='hidden' name='id_berita' value='$ada[id_berita]'>
	    			<table border=0 align=center width=75%>
	    				<tr>
				            <td height=42 colspan=3 class='alert alert-warning' align=center><h3><b>Edit Berita</b></h>
				            </td>
			            </tr>
			            <tr>
			            	<td><br><br></td>
			            </tr>
	    				<tr>
	    					<td>Judul</td>
							<td></td>
		    				<td>
		    					<input type=text class='form-control' name=judul id=judul value='$ada[judul]'>
		    				</td>
	    				</tr>    	
	    				<tr>
	    					<td>Isi Berita</td>
							<td></td>
							<td>
		    					<br>
		    					<textarea id=isi_berita name=isi_berita class=ckeditor value=$ada[isi_berita]>
		    						</textarea>
		    				</td>
	    				</tr>		
	    				<tr>
	    					<td>Gambar</td>
							<td></td>
		    				<td>
		    					<br>
		    					<img src='../foto_berita/$ada[gambar]' style='width:150px; height=150px;'><br><br>
								<input type=file class=form-control name=gambar id=gambar >
		    				</td>
	    				</tr>
	    				<tr><td>&nbsp;</td></tr>	
	    				<tr>
	    					<td colspan=3 align=center>
	    						<br><br>
	    						<input type=submit id=update name=update value=Update class='btn btn-primary'>
	    						<input type=reset id=reset name=reset value=Reset class='btn btn-primary'>
	    						<input type=button onClick=window.location='berita_lihat.php'; id=kembali name=kembali value=Kembali class='btn btn-primary'>
	    					</td> 
	    				</tr>
	    			</table>
	    		</form>
    		</div>";
    ?>
<?php include "footer.php"; ?>