<?php include "header.php"; ?>
	<?php 
		error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
		ob_start();
		include "../config/koneksi.php";

		echo "
			<div class='alert alert-info'>Semua data Mata Pelajaran</div><hr>
				<table>
					<form target='_BLANK' action='print_pelajaran.php?' method='GET'>
						<select style='width:170px; margin:0px' name='semester' class='form-control'>
					  	  	<option value='0' selected>- Semua Semester -</option>
						  	<option value='1'>Semester 1</option>
				  		  	<option value='2'>Semester 2</option>
			  		  	</select><br>
					  	
					  	<Button style='margin-top:-10px style=width:150px;' type='submit' class='btn btn-success' name='raport' value='Cetak Raport'><i class='fa fa-print'></i> Cetak / Print Laporan</Button><br><br>
					</form>

					
					

				</table>
		        <table class='table table-bordered table-hover' style='width: 100%;'>
	                	<thead>
	                        <tr style='background:#e3e3e3; text-align:center; border:1px solid #cecece;'>

	                        	<td style='width:40px;'><b>No</b></td>
								<td style='width:200px;'><b>Kode Mata Pelajaran</b></td>
								<td><b>Nama Pelajaran</b></td>
								<td><b>Semester</b></td>
							</tr>
						</thead>";

		$query=mysql_query ("SELECT * FROM tbl_pelajaran ORDER BY id_pelajaran");
		$no=1;
		while($qry=mysql_fetch_array($query)){
			echo "
					<tr style='text-align:center;'>
						<td>$no</td>
						<td>$qry[kode_pelajaran]</td>
						<td>$qry[nama_pelajaran]</td>
						<td>Semester $qry[semester]</td>
					</tr>";
			$no++;
		}
		echo "
				</table>
			";
	?>
<?php include "footer.php"; ?>