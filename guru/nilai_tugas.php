<?php include "header.php"; ?>

	<?php 
	include "../config/koneksi.php";
	$id_nilai = $_GET['id_nilai'];
	$nilai = mysql_query("SELECT * FROM tbl_nilai WHERE id_nilai='$id_nilai'");
												
	$n = mysql_fetch_array($nilai);

	echo " 
		<div style='padding:1% 6% 0 5%;' class='row-fluid'>
	        <div class='col-lg-12 text-center'>
	            <div class='panel panel-default'>
	                <div class='panel-body'>
	                	<div class='alert alert-info' align='left'>Tambah - Nilai Tugas</div>
	                		<hr>
	                		<form method='post' action='nilaitugas_simpan.php'>
	                		<input type='hidden' name='id_nilai' id='id_nilai' value='$n[id_nilai]'/> "; ?>
	                		<table align="center" border=0 width="35%">
	                			<tr>
									<td>Nilai</td>
									<td></td>
									<td>
					  					<input type="hidden" name="status" value="T"/>
										<input type="text" name="nilai" id="nilai" class="form-control">
									</td>
								</tr>
								<tr>
									<td><br></td>
								</tr>
								<tr>
									<td>Keterangan</td>
									<td></td>
									<td><input type="text" name="keterangan" id="keterangan" class="form-control"></td>
								</tr>
								<tr>
									<td colspan="7" align="center"><br>
										<input type="submit" class="btn btn-primary" name="submitt" id="button" value="Tambahkan"> 
										<input type="reset" class="btn btn-primary" name="reset" id="reset" value="Reset">
										<input type="button" name="kembali" id="kembali" class="btn btn-primary" value="Kembali" onclick="window.history.back();">
									</td>
								</tr>
							</table>
						
					</form>
				</div>
			</div>
		</div>
	</div>

<?php include "footer.php"; ?>