<?php include "header.php"; ?>
	<div class="form-group">
		<form method=post action=user_simpan.php enctype=multipart/form-data>
			<div class="alert alert-warning" align="center">
				<strong>PERHATIAN!</strong> Silakan tambah data melalui form dibawah ini
			</div>
			<table align="center" border="0" width="50%">
				<tr>
					<td>Nama Admin</td>
					<td></td>
					<td><input type="text" name="nama_admin" id="nama_admin" class="form-control"></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>		
				<tr>
					<td>Username</td>
					<td></td>
					<td><input type="text" name="username" id="username" class="form-control"></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>Password</td>
					<td></td>
					<td><input type="password" name="password" id="password" class="form-control"></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>Level</td>
					<td></td>
					<td>
						<select name="level" class="form-control">
							<option value="superuser">Superuser</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<br>
						<input type="submit" name="simpan" id="simpan" value="Simpan" class='btn btn-primary'> 
						<input type="reset" value="Reset" class='btn btn-primary'>
						<input type="button" name="kembali" id="kembali" class="btn btn-primary" value="Kembali" onclick="window.location='user_lihat.php';">
					</td>
				</tr>
			</table>
		</form>
	</div>
<?php include "footer.php"; ?>