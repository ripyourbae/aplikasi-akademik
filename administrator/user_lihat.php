<?php include "header.php"; ?>
	<?php
		error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
		ob_start();
		include "../config/koneksi.php";

		echo "
			<div class='alert alert-info'>Data Admin</div><hr>
			<table>
				<tr>
					<td>
						<input type=button value='Tambah Admin Baru' onClick=window.location='user_input.php' class='btn btn-primary' style='float:right; margin-right:10px; margin-top:3px; margin-bottom:10px;'>
					</td>
			   	</tr>
			</table>
			
	          <table class='table table-bordered table-hover' style='width: 100%;'>
                    <thead>
                        <tr style='background:#e3e3e3; border:1px solid #cecece;'>
                        	<th style='text-align:center;'>No.</th>
                            <th style='text-align:center;'>Nama Admin</th>
                            <th style='text-align:center;'>Username</th>
                            <th style='text-align:center;'>Status</th>
                            <th style='width:240px; text-align:center;'>Aksi</th>
                        </tr>
                    </thead>";

		$query=mysql_query ("SELECT * FROM user_administrator ORDER BY id_admin");
		$no=1;
		while($qry=mysql_fetch_array($query)) {
			echo "
							<tbody>
								<tr align=center>
									<td>$no</td>
									<td>$qry[nama_admin]</td>
									<td>$qry[username]</td>
									<td>$qry[level]</td>
									<td colspan=2 align=center>

										<button class='btn btn-success' type='button' onClick=window.location='user_edit.php?id_admin=$qry[id_admin]' title='Edit Data'><i class='fa fa-edit'></i></button>

										<button class='btn btn-danger' type='button' onClick=window.location='user_hapus.php?id_admin=$qry[id_admin]' title='Hapus Data'><i class='fa fa-trash'></i></button>
									</td>
								</tr>
							</tbody>";
			$no++;
		}
		echo "	
						</table>";
	?>
<?php include "footer.php"; ?>