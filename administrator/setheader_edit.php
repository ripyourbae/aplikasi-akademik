<?php include "header.php"; ?>
<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
  	ob_start();

  	include "../config/koneksi.php";

	$query = mysql_query("SELECT * FROM tbl_header_print ORDER BY id_header_print DESC LIMIT 1");
  	$qry = mysql_fetch_array($query);

  	echo "
  	<div class='alert alert-danger'>Setting Data Header Print Laporan dan Tanda Tangan</div><hr>
	<form method=post action=setheader_update.php enctype=multipart/form-data>
		<input type=hidden name=id_header_print value=$qry[id_header_print]>
		<table width='80%'>
	        <tr>
	            <div class=form-group>
	            	<td>Header 1</td>
                    <td></td>
		            <td>
		            	<textarea name=header_1 class=ckeditor id=header_1> $qry[header_1]</textarea>
		            </td>          	
	            </div>
	        </tr>
	        <tr>
	            <div class=form-group>
	            	<td>Header 2</td>
                    <td></td>
		            <td>
		            	<br>
		            	<textarea name=header_2 class=ckeditor id=header_2> $qry[header_2]</textarea>
		            </td>
	            </div>
	        </tr>
	        <tr>
	        	<td><br></td>
	        </tr>
	        <tr>
	            <div class=form-group>
	            	<td>Ttd Kiri</td>
                    <td></td>
		            <td><input type=text name='ttd_kiri' id=ttd_kiri class=form-control value='$qry[ttd_kiri]' style='width: 100%;'></td>            	
	            </div>
	        </tr>
	        <tr>
	        	<td><br></td>
	        </tr>
	        <tr>
		        <div class=form-group>
		        	<td>Ttd Kanan</td>
                    <td></td>
		        	<td>
		        		<input type=text id=ttd_kanan class=form-control name=ttd_kanan value='$qry[ttd_kanan]' style='width: 100%;'>
		        	</td>
		        </div>
	        </tr>
	        <tr>
	        	<td>
	        		<br><br>
	        		<input type=submit name=update id=update class='btn btn-primary' value=Update>
	        	</td>
	        </tr>
	    </table>
	</form>";
?>
<?php include "footer.php"; ?>