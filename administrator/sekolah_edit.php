<?php include "header.php"; ?>
	<?php
		error_reporting(E_ALL^(E_NOTICE | E_WARNING));
		ob_start();

		include "../config/koneksi.php";
		$a = mysql_query("SELECT * FROM tbl_sekolah WHERE id_sekolah='$_GET[id_sekolah]'");
		$b = mysql_fetch_array($a);
		echo "
			<form method=post action=sekolah_update.php enctype=multipart/form-data>
				<center>
					<label>Edit Sekolah $b[nama_sekolah]</label>
				</center>
				<table align=center>
					<tr>
						<div class=form-group>
							<td>Nama Sekolah</td>
							<td>:</td>
							<td><input type=text name=nama_sekolah id=nama_sekolah value=$b[nama_sekolah] class=form-control></td>
						</div>
					</tr>
					<tr>
						<div class=form-group>
							<td>NSS</td>
							<td>:</td>
							<td><input type=text name=nss id=nss value=$b[nss] class=form-control></td>
						</div>
					</tr>
					<tr>
						<div class=form-group>
							<td>NIS</td>
							<td>:</td>
							<td><input type=text name=nis id=nis value=$b[nis] class=form-control></td>
						</div>
					</tr>
					<tr>
						<div class=form-group>
							<td>NPSN</td>
							<td>:</td>
							<td><input type=text name=npsn id=npsn value=$b[npsn] class=form-control></td>
						</div>
					</tr>
					<tr>
						<div class=form-group>
							<td>SKPD</td>
							<td>:</td>
							<td><input type=text name=skpd id=skpd value=$b[skpd] class=form-control></td>
						</div>
					</tr>
					<tr>
						<div class=form-group>
							<td>Alamat</td>
							<td>:</td>
							<td><input type=text name=alamat id=alamat value=$b[alamat] class=form-control></td>
						</div>
					</tr>
					<tr>
						<div class=form-group>
							<td>Telepon Sekolah</td>
							<td>:</td>
							<td><input type=text name=telepon_sekolah id=telepon_sekolah value=$b[telepon_sekolah] class=form-control></td>
						</div>
					</tr>
					<tr>
						<div class=form-group>
							<td>Fax</td>
							<td>:</td>
							<td><input type=text name=fax id=fax value=$b[fax] class=form-control></td>
						</div>
					</tr>
					<tr>
						<div class=form-group>
							<td>Email</td>
							<td>:</td>
							<td><input type=text name=email id=email value=$b[email] class=form-control></td>
						</div>
					</tr>
					<tr>
						<div class=form-group>
							<td>Profil Sekolah</td>
							<td>:</td>
							<td><input type=text name=profil_sekolah id=profil_sekolah value=$b[profil_sekolah] class=form-control></td>
						</div>
					</tr>
					<tr>
						<td colspan=3>
							<input type=submit name=update id_siswa=update value=Update class=btn btn-default> 
							<input type=reset value=Reset class=btn btn-default>
							<input type=button value=Kembali onclick=self.history.back() class=btn btn-default>
						</td>
					</tr>
				</table>
			</form>
		";
	?>
<?php include "footer.php"; ?>