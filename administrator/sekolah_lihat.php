<?php include "header.php"; ?>
	<?php
		error_reporting(E_ALL^(E_NOTICE | E_WARNING));
		error_reporting(E_ALL^E_DEPRECATED);
		ob_start();
		include "../config/koneksi.php";

		echo "
			<div class=row>
                <div class=col-lg-6>
                    <h2>Data Sekolah</h2>
                    <div class=table-responsive>
                        <table class=table table-hover style='width: 100%;'>
                            <thead>
								<tr>
									<th>No.</th>
									<th>Nama Sekolah</th>
									<th>NSS</th>
									<th>NIS</th>
									<th>NPSN</th>
									<th>SKPD</th>
									<th>Alamat</th>
									<th>Telepon Sekolah</th>
									<th>FAX</th>
									<th>Email</th>
									<th>Profil Sekolah</th>
									<th>Aksi</th>
								</tr>
							</thead>";
		$query=mysql_query ("SELECT * FROM tbl_sekolah ORDER BY nis");
		$no=1;
		while($qry=mysql_fetch_array($query)) {
			echo "
							<tbody>
								<tr>
									<td>$no</td>
									<td>$qry[nama_sekolah]</td>
									<td>$qry[nss]</td>
									<td>$qry[nis]</td>
									<td>$qry[npsn]</td>
									<td>$qry[skpd]</td>
									<td>$qry[alamat]</td>
									<td>$qry[telepon_sekolah]</td>
									<td>$qry[fax]</td>
									<td>$qry[email]</td>
									<td>$qry[profil_sekolah]</td>
									<td colspan=2>
										<button type=button class=btn btn-xs btn-primary>
											<a href='sekolah_hapus.php?id_sekolah=$qry[id_sekolah]'>Hapus</a></button>
                   						<button type=button class=btn btn-xs btn-success>
                   							<a href='sekolah_edit.php?id_sekolah=$qry[id_sekolah]'>Edit</button>
									</td>
								</tr>
							</tbody>";
			$no++;
		}
		echo "
						</table>
						<button type=button class=btn btn-xs btn-info>
                   		<center><a href='sekolah_input.php'>Tambah Data</button>
					</div>
				</div>
			</div>";
	?>
<?php include "footer.php"; ?>