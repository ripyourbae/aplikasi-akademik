<?php include "header.php"; ?>
	<?php
		include "../config/koneksi.php";
		$a = mysql_query("SELECT * FROM user_administrator WHERE id_admin='$_GET[id_admin]'");
		$b = mysql_fetch_array($a);

		echo "
			<div class=form-group>
				<form method=post action=user_update.php enctype=multipart/form-data>
					<div class='alert alert-warning' align=center>
						<strong>PERHATIAN!</strong> Silakan Edit Data melalui form dibawah ini
					</div>
					<input type='hidden' name='id_admin' value='$b[id_admin]'>
					<table align=center border=0 width=50%>
						<tr>
							<div class=form-group>
								<td>Nama Admin</td>
								<td></td>
								<td><input type=text class=form-control name=nama_admin id=nama_admin value='$b[nama_admin]'></td>
							</div>
						</tr>
						<tr>
							<td><br></td>
						</tr>		
						<tr>
							<div class=form-group>
								<td>Username</td>
								<td></td>
								<td><input type=text class=form-control name=username id=username value='$b[username]'></td>
							</div>
						</tr>
						<tr>
							<td><br></td>
						</tr>
						<tr>
							<div class=form-group>
								<td>Password</td>
								<td></td>
								<td><input type=password class=form-control name=password id=password value='$b[password]'></td>
							</div>
						</tr>
						<tr>
							<div class=form-group>
								<td colspan=3 align=center>
									<br>
									<input type=submit name=simpan id=simpan value=Update class='btn btn-primary'>
									<input type=button name=kembali id=kembali class='btn btn-primary' value=Kembali onclick=window.location='user_lihat.php';
								</td>
							</div>
						</tr>
					</table>
				</form>
			</div>
			";
	?>
<?php include "footer.php"; ?>