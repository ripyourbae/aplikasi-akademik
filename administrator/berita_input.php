<?php include "header.php"; ?>
	<div class="form-group">
	<div class="alert alert-info">Tambah Berita Baru</div><hr><br/>
		<form method=post action=berita_simpan.php enctype=multipart/form-data>
		<table border="0" width="75%" align="center">
			<tr>
                <td height="42" colspan="3" class="alert alert-warning" align="center"><h3><b>Input Berita</b></h>
                </td>
            </tr>
            <tr>
            	<td><br><br></td>
            </tr>
	        <tr>
	        	<td>Judul</td>
				<td></td>
		        <td><input type="text" name="judul" id="judul" placeholder="Judul Berita" class="form-control">
		        </td>
	        </tr>
	        <tr>
                <td><br></td>
            </tr>
	        <tr>
                <td>Berita Pilihan</td> 
                <td></td>
                <td>
                    <input type="radio" name="headline" value="Y" checked> Ya  
                    <input type="radio" name="headline" value='N'> Tidak
                </td>
            </tr>
	        <tr>
	        	<td>Isi Berita</td>
				<td></td>
		        <td>
		           	<br><textarea name="isi_berita" class="ckeditor" id="isi_berita"></textarea>
		        </td>
	        </tr>
	        <tr>
	        	<td>Gambar</td>
				<td></td>
		        <td>
		           	<br>
		           	<input type="file" name="gambar" id="gambar" class="form-control">
		        </td>
	        </tr>
	        <tr>
	        	<td colspan="3" align="center">
	        		<br>
	        		<input type="submit" name="simpan" id="simpan" class="btn btn-primary" value="Simpan">
	        		<input type="reset" name="reset" id="reset" class="btn btn-primary" value="Reset">
	        		<input type="button" name="kembali" id="kembali" class="btn btn-primary" value="Kembali" onclick="window.location='berita_lihat.php';">
	        	</td>
	        </tr>
	    </form>
	    </table>
	</div>
<?php include "footer.php"; ?>