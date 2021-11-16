<?php include "header.php"; ?>
<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
  	ob_start();

  	include "../config/koneksi.php";

	$query = mysql_query("SELECT * FROM tbl_rumus_raport ORDER BY id_rumus_raport DESC LIMIT 1");
  	$qry = mysql_fetch_array($query);

  	echo "
  	<div class='alert alert-danger'>Rumus - Data Persentasi Nilai untuk Perhitungan Nilai Akhir Raport</div><hr>
	<form method=post action=setnilai_update.php enctype=multipart/form-data>
		<input type=hidden name=id_rumus_raport value=$qry[id_rumus_raport]>
		<table width='40%'>
	        <tr>
	            <div class=form-group>
	            	<td>Nilai Harian</td>
                    <td></td>
		            <td>
		            	<input type=text name='nilai_harian' id=nilai_harian class=form-control value='$qry[nilai_harian]' style='width: 100%;'>
		            </td>
		            <td>
		            	&nbsp %
		            </td>          	
	            </div>
	        </tr>
	        <tr>
	        	<td><br></td>
	        </tr>
	        <tr>
	            <div class=form-group>
	            	<td>Nilai Tugas</td>
                    <td></td>
		            <td>
		            	<input type=text name='nilai_tugas' id=nilai_tugas class=form-control value='$qry[nilai_tugas]' style='width: 100%;'>
		            </td>
		            <td>
		            	&nbsp %
		            </td>
	            </div>
	        </tr>
	        <tr>
	        	<td><br></td>
	        </tr>
	        <tr>
	            <div class=form-group>
	            	<td>Nilai UTS</td>
                    <td></td>
		            <td><input type=text name='nilai_uts' id=nilai_uts class=form-control value='$qry[nilai_uts]' style='width: 100%;'>
		            </td>    
		            <td>
		            	&nbsp %
		            </td>        	
	            </div>
	        </tr>
	        <tr>
	        	<td><br></td>
	        </tr>
	        <tr>
		        <div class=form-group>
		        	<td>Nilai UAS</td>
                    <td></td>
		        	<td>
		        		<input type=text id=nilai_uas class=form-control name=nilai_uas value='$qry[nilai_uas]' style='width: 100%;'>
		        	</td>
		        	<td>
		            	&nbsp %
		            </td>
		        </div>
	        </tr>
	        <tr>
	        	<td><br></td>
	        </tr>
	        <tr>
		        <div class=form-group>
		        	<td>KKM</td>
                    <td></td>
		        	<td>
		        		<input type=text id=kkm class=form-control name=kkm value='$qry[kkm]' style='width: 100%;'>
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