<?php include "header.php"; ?>
	<form method=post action=sekolah_simpan.php enctype=multipart/form-data>
		<div class="alert alert-warning">
			<center><strong>PERHATIAN!</strong> Silakan tambah data melalui form dibawah ini</center>
		</div>
		<table align="center">
			<tr>
				<div class="form-group">
					<td>Nama Sekolah</td>
					<td>:</td>
					<td><input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td>NSS</td>
					<td>:</td>
					<td><input type="text" name="nss" id="nss" class="form-control"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td>NIS</td>
					<td>:</td>
					<td><input type="text" name="nis" id="nis" class="form-control"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td>NPSN</td>
					<td>:</td>
					<td><input type="text" name="npsn" id="npsn" class="form-control"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td>SKPD</td>
					<td>:</td>
					<td><input type="text" name="skpd" id="skpd" class="form-control"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat" id="alamat" class="form-control"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td>Telepon Sekolah</td>
					<td>:</td>
					<td><input type="text" name="telepon_sekolah" id="telepon_sekolah" class="form-control"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td>Fax</td>
					<td>:</td>
					<td><input type="text" name="fax" id="fax" class="form-control"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="email" id="email" class="form-control"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
					<td>Profil Sekolah</td>
					<td>:</td>
					<td><input type="text" name="profil_sekolah" id="profil_sekolah" class="form-control"></td>
				</div>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<br>
					<input type="submit" name="simpan" id="simpan" value="Simpan" class="btn btn-default">
					<input type="reset" name="reset" id="reset" value="Reset" class="btn btn-default">
				</td>
			</tr>
		</table>
	</form>
<?php include "footer.php"; ?>