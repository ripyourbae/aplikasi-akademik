<?php include "header.php"; ?>
	<?php
		error_reporting(E_ALL^(E_NOTICE | E_WARNING));
		error_reporting(E_ALL^E_DEPRECATED);
		include "../config/koneksi.php";

		echo "
			<div class='alert alert-info'>Semua Data Siswa</div><hr>
				<form action='siswa_pencarian.php' method='POST'>
					<table>
						<tr>
						<h4>Pencarian : </h4>
			                <td>
			                   	<input type='text' name='cari' size=30 placeholder='NIS / Nama Siswa' class='form-control' style='width: 250px; margin:0px float:right; margin-right:10px; margin-top:3px; margin-bottom:10px;'>
			                </td>
			                <td>
			                	<input type='submit' id='submit' value='Cari' class='btn btn-success' style='width: 50px; margin:0px float:right; margin-right:40px; margin-top:3px; margin-bottom:10px;'>
			                </td>
			                <td>
			                	<input type=button value='Tambah Data Siswa' onclick=window.location='siswa_input.php' class='btn btn-primary' style='margin:10px float:right; margin-right:40px; margin-top:3px; margin-bottom:10px;'>
			                </td>
			         	</tr>
			        </table>
		        </form>

	            <div class=table-responsive>
	                <table class='table table-bordered table-hover' style='width: 100%;'>
                    	<thead>
                        	<tr align=center style='background:#e3e3e3; border:1px solid #cecece;'>
						
								<td><b>No</b></td>
								<td><b>NIS</b></td>
								<td><b>Nama Siswa</b></td>
								<td><b>Tempat Lahir</b></td>
								<td><b>Tanggal Lahir</b></td>
								<td><b>Jenis Kelamin</b></td>
								<td><b>Agama</b></td>
								<td><b>Kelas</b></td>
								<td style='width:240px; text-align:center;'><b>Aksi</td>
							</tr>
						</thead>";
		
		$query=mysql_query ("SELECT * FROM tbl_siswa a JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas ORDER BY a.nipd ASC");
		$no=1;
		while($a = mysql_fetch_array($query)){
			echo "
								<tbody>
									<tr align=center>
										<td>$no</td>
										<td>$a[nipd]</td>
										<td>$a[nama_siswa]</td>
										<td>$a[tempat_lahir]</td>
										<td>$a[tanggal_lahir]</td>
										<td>$a[jenis_kelamin]</td>
										<td>$a[agama]</td>
										<td>$a[nama_kelas]</td>

										<td colspan=2 align=center>

											<button class='btn btn-primary' type='button' onClick=window.location='siswa_edit.php?id_siswa=$a[id_siswa]' title='Edit Data'><i class='fa fa-edit'></i></button>

											<button class='btn btn-success' type='button' onClick=window.location='siswa_data.php?id_siswa=$a[id_siswa]' title='Lihat Detail'><i class='fa fa-search'></i></button>

											<button class='btn btn-danger' type='button' onClick=window.location='siswa_hapus.php?id_siswa=$a[id_siswa]' title='Hapus Data'><i class='fa fa-trash'></i></button>
										</td>
									</tr>
								</tbody>";

			$no++;
		}
		echo "	
							</table>
				
					</div>
				</div>";
	?>
<?php include "footer.php"; ?>
