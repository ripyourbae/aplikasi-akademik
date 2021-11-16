<?php include "header.php"; ?>
	<?php 
		error_reporting(E_ALL^(E_NOTICE | E_WARNING));
		error_reporting(E_ALL^E_DEPRECATED);
		include "../config/koneksi.php";

		echo "
			<div class='alert alert-info'>Data Berita</div><hr>
			<table>
				<td>
					<input type=button value='Tambah Berita' onClick=window.location='berita_input.php' class='btn btn-primary' style='float:right; margin-right:10px; margin-top:3px; margin-bottom:10px;'>
				</td>
			</table>
	          	<table class='table table-bordered table-hover' style='width: 100%;'>
                    <thead>
                        <tr style='background:#e3e3e3; border:1px solid #cecece;'>
                        	<th>No</th>
                            <th>Judul</th>
                           	<th>Isi Berita</th>
                       		<th>Gambar</th>
                       		<th style='width:170px;'>Tanggal Rilis</th>
                       		<th style='width:180px; text-align:center;'>Action</th>
                       	</tr>
                    </thead>";
        $query=mysql_query ("SELECT * FROM tbl_berita ORDER BY id_berita");
		$no=1;
		while($qry=mysql_fetch_array($query)) {
			echo "
							<tbody>
								<tr>
									<td>$no</td>
									<td>$qry[judul]</td>
									<td>$qry[isi_berita]</td>
									<td>$qry[gambar]</td>
									<td>$qry[waktu_terbit]</td>
									<td colspan=2 align=center>

										<button class='btn btn-success' type='button' onClick=window.location='berita_edit.php?id_berita=$qry[id_berita]' title='Edit Data'><i class='fa fa-edit'></i></button>

										<button class='btn btn-danger' type='button' onClick=window.location='berita_hapus.php?id_berita=$qry[id_berita]' title='Hapus Data'><i class='fa fa-trash'></i></button>
									</td>
								</tr>
							</tbody>";
			$no++;
		}
		echo "
				</table>";
	?>
<?php include "footer.php"; ?>