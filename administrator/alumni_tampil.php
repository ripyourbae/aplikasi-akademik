<?php include "header.php"; ?>
	<?php 
		error_reporting(E_ALL^(E_NOTICE | E_WARNING));
		error_reporting(E_ALL^E_DEPRECATED);
		include "../config/koneksi.php";

		echo "
			<div class='alert alert-info'>Data Alumni</div><hr>
			<table>
				<td>
					<input type=button value='Tambah Alumni' onClick=window.location='alumni_input.php' class='btn btn-primary' style='float:right; margin-right:10px; margin-top:3px; margin-bottom:10px;'>
				</td>
			</table>
	          	<table class='table table-bordered table-hover' style='width: 100%;'>
                    <thead>
                        <tr style='background:#e3e3e3; border:1px solid #cecece;'>
                        	<th style='text-align:center;'>No</th>
                            <th style='text-align:center;'>Nama Alumni</th>
                           	<th style='text-align:center;'>Tempat Lahir</th>
                           	<th style='text-align:center;'>Tanggal Lahir</th>
                           	<th style='text-align:center;'>Alamat</th>
                           	<th style='text-align:center;'>Kelas</th>
                           	<th style='text-align:center;'>Tahun Lulusan</th>
                       		<th style='width:180px; text-align:center;'>Action</th>
                       	</tr>
                    </thead>";
        $query=mysql_query ("SELECT * FROM tbl_alumni ORDER BY id_alumni ASC");
		$no=1;
		while($qry=mysql_fetch_array($query)) {
			echo "
							<tbody>
								<tr align=center>
									<td>$no</td>
									<td>$qry[nama_alumni]</td>
									<td>$qry[tempat_lahir]</td>
									<td>$qry[tanggal_lahir]</td>
									<td>$qry[alamat]</td>
									<td>$qry[kelas]</td>
									<td>$qry[tahun_lulusan]</td>
									<td colspan=2 align=center>

										<button class='btn btn-success' type='button' onClick=window.location='alumni_edit.php?id_alumni=$qry[id_alumni]' title='Edit Data'><i class='fa fa-edit'></i></button>

										<button class='btn btn-danger' type='button' onClick=window.location='alumni_hapus.php?id_alumni=$qry[id_alumni]' title='Hapus Data'><i class='fa fa-trash'></i></button>
									</td>
								</tr>
							</tbody>";
			$no++;
		}
		echo "
				</table>";
	?>
<?php include "footer.php"; ?>