<?php include "header.php"; ?>
	<?php 
		error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
    	ob_start();

		include "../config/koneksi.php";

		if ($_GET['id_visimisi']==''){
	      $ack = 1;
	    }else{
	      $ack = $_GET['id_visimisi'];
	    }

		$query = mysql_query("SELECT * FROM tbl_visimisi where id_visimisi='$ack'");
		$qry = mysql_fetch_array($query);

		echo "
			<form method=post action=visimisi_update.php enctype=multipart/form-data>
			<div class='alert alert-info'>FORM EDIT VISI & MISI SEKOLAH</div><hr><br/>
				<div class=table-responsive>
					<input type='hidden' name='id_visimisi' value='$qry[id_visimisi]'>
              		<table class='table table-hover table-striped' align=center>
              			<tr>
              				<div class=form-group>
								<td>Visi</td>
								<td>:</td>
								<td><input type=text class=form-control name=visi id=visi value='$qry[visi]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Misi</td>
								<td>:</td>
								<td>
									<input type=text class=form-control name=misi1 id=misi1 value='$qry[misi1]'><br>
									<input type=text class=form-control name=misi2 id=misi2 value='$qry[misi2]'><br>
									<input type=text class=form-control name=misi3 id=misi3 value='$qry[misi3]'><br>
									<input type=text class=form-control name=misi4 id=misi4 value='$qry[misi4]'><br>
									<input type=text class=form-control name=misi5 id=misi5 value='$qry[misi5]'><br>
									<input type=text class=form-control name=misi6 id=misi6 value='$qry[misi6]'><br>
									<input type=text class=form-control name=misi7 id=misi7 value='$qry[misi7]'><br>
									<input type=text class=form-control name=misi8 id=misi8 value='$qry[misi8]'><br>
									<input type=text class=form-control name=misi9 id=misi9 value='$qry[misi9]'><br>
									<input type=text class=form-control name=misi10 id=misi10 value='$qry[misi10]'><br>
								</td>
							</div>
              			</tr>
              		</table>
              		<center>
	              		<input type=submit value=Update class='btn btn-primary'>
	              		<input type=button value=Kembali onclick=self.history.back() class='btn btn-primary'>
              		</center>
              	</div>
            </form>";
	?>
<?php include "footer.php"; ?>