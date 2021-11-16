<?php include "header.php"; ?>
	<?php 
		error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
    	ob_start();
		
		include "../config/koneksi.php";

		if ($_GET['id_kontak']==''){
	      $ack = 1;
	    }else{
	      $ack = $_GET['id_kontak'];
	    }

		$query = mysql_query("SELECT * FROM tbl_kontak WHERE id_kontak = '$ack'");
		$qry = mysql_fetch_array($query);

		echo "
			<form method=post action=kontak_update.php enctype=multipart/form-data>
			<div class='alert alert-info'>FORM EDIT KONTAK SEKOLAH</div><hr><br/>
		            <div class=table-responsive>
		            <input type='hidden' name='id_kontak' value='$qry[id_kontak]'>
		                <table class='table table-hover table-striped' align=center>
		                	<tr>
		                		<td>Alamat</td>
		                		<td>:</td>
		                		<td><input type=text name=alamat id=alamat value='$qry[alamat]' class=form-control></td>
		                	</tr>
		                	<tr>
		                		<td>RT/RW</td>
		                		<td>:</td>
		                		<td><input type=text name=rt_rw id=rt_rw value=$qry[rt_rw] class=form-control></td>
		                	</tr>
		                	<tr>
		                		<td>Dusun</td>
		                		<td>:</td>
		                		<td><input type=text name=dusun id=dusun value='$qry[dusun]' class=form-control></td>
		                	</tr>
		                	<tr>
		                		<td>Desa/Kelurahan</td>
		                		<td>:</td>
		                		<td><input type=text name=desa id=desa value='$qry[desa]' class=form-control></td>
		                	</tr>
		                	<tr>
		                		<td>Kecamatan</td>
		                		<td>:</td>
		                		<td><input type=text name=kecamatan id=kecamatan value='$qry[kecamatan]' class=form-control></td>
		                	</tr>
		                	<tr>
		                		<td>Kabupaten</td>
		                		<td>:</td>
		                		<td><input type=text name=kabupaten id=kabupaten value='$qry[kabupaten]' class=form-control></td>
		                	</tr>
		                	<tr>
		                		<td>Provinsi</td>
		                		<td>:</td>
		                		<td><input type=text name=provinsi id=provinsi value='$qry[provinsi]' class=form-control></td>
		                	</tr>
		                	<tr>
		                		<td>Kode Pos</td>
		                		<td>:</td>
		                		<td><input type=text name=kode_pos id=kode_pos value='$qry[kode_pos]' class=form-control></td>
		                	</tr>
		                	<tr>
		                		<td>Lintang</td>
		                		<td>:</td>
		                		<td><input type=text name=lintang id=lintang value='$qry[lintang]' class=form-control></td>
		                	</tr>
		                	<tr>
		                		<td>Bujur</td>
		                		<td>:</td>
		                		<td><input type=text name=bujur id=bujur value='$qry[bujur]' class=form-control></td>
		                	</tr>
		                	<tr>
		                		<td>Telepon</td>
		                		<td>:</td>
		                		<td><input type=text name=telepon id=telepon value='$qry[telepon]' class=form-control></td>
		                	</tr>
		                	<tr>
		                		<td>Fax</td>
		                		<td>:</td>
		                		<td><input type=text name=fax id=fax value='$qry[fax]' class=form-control></td>
		                	</tr>
		                	<tr>
		                		<td>Email</td>
		                		<td>:</td>
		                		<td><input type=text name=email id=email value='$qry[email]' class=form-control></td>
		                	</tr>
		                </table>
		                <center>
		                	<input type=submit name=update value=Update class='btn btn-primary'>
		                	<input type=button name=batal value=Kembali onclick=self.history.back() class='btn btn-primary'>
		                </center>
		                </table>
		            </div>  
				</div>
			</form>
		";
	?>
<?php include "footer.php"; ?>