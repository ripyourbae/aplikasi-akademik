<?php include "header.php"; ?>
	<?php 
		error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
    	ob_start();

		include "../config/koneksi.php";

		if ($_GET['id_halaman']==''){
	      $ack = 1;
	    }else{
	      $ack = $_GET['id_halaman'];
	    }

		$query = mysql_query("SELECT * FROM tbl_halaman where id_halaman='$ack'");
		$qry = mysql_fetch_array($query);

		echo "
			<form method=post action=halaman_update.php enctype=multipart/form-data>
			<div class='alert alert-info'>FORM EDIT SELAMAT DATANG</div><hr><br/>
				<div class=table-responsive>
					<input type='hidden' name='id_halaman' value='$qry[id_halaman]'>
              		<table border=0 align=center width=75%>
              			<tr>
              				<div class=form-group>
								<td>Judul</td>
								<td></td>
								<td>
									<input type=text class=form-control name=judul id=judul value='$qry[judul]'>
								</td>
							</div>
              			</tr>
              			<tr>
			            	<td><br></td>
			            </tr>
              			<tr>
              				<div class=form-group>
								<td>Judul SEO</td>
								<td></td>
								<td>
									<input type=text class=form-control name=judul_seo id=judul_seo value='$qry[judul_seo]'>
								</td>
							</div>
              			</tr>
              			<tr>
			            	<td><br></td>
			            </tr>
              			<tr>
              				<div class=form-group>
								<td>Isi</td>
								<td></td>
								<td>
									<textarea id=detail name=detail class=ckeditor value=$qry[detail]>
		    						</textarea>
								</td>
							</div>
              			</tr>
              		</table>
              		<center><br>
	              		<input type=submit value=Update class='btn btn-primary'>
	              		<input type=button value=Kembali onclick=self.history.back() class='btn btn-primary'>
              		</center>
              	</div>
            </form>";
	?>
<?php include "footer.php"; ?>