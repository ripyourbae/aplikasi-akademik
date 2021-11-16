<?php include "header.php"; ?>
	<?php 
		error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
    	ob_start();

		include "../config/koneksi.php";

		if ($_GET['id_profil']==''){
	      $ack = 1;
	    }else{
	      $ack = $_GET['id_profil'];
	    }

		$query = mysql_query("SELECT * FROM tbl_profil WHERE
    	id_profil = '$ack'");
  		$qry = mysql_fetch_array($query);

		echo "
			<form method=post action=profil_update.php enctype=multipart/form-data>
			<div class='alert alert-info'>FORM EDIT PROFIL SEKOLAH</div><hr><br/>
				<div class=table-responsive>
					<input type='hidden' name='id_profil' value='$qry[id_profil]'>
              		<table class='table table-hover table-striped' align=center>
              			<tr>
              				<div class=form-group>
								<td>NPSN</td>
								<td>:</td>
								<td><input type=text class=form-control name=npsn id=npsn value='$qry[npsn]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Status</td>
								<td>:</td>
								<td><input type=text class=form-control name=status id=status value='$qry[status]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Bentuk Pendidikan</td>
								<td>:</td>
								<td><input type=text class=form-control name=bentuk_pendidikan id=bentuk_pendidikan value='$qry[bentuk_pendidikan]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Status Kepemilikan</td>
								<td>:</td>
								<td><input type=text class=form-control name=status_kepemilikan id=status_kepemilikan value='$qry[status_kepemilikan]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>SK Pendirian Sekolah</td>
								<td>:</td>
								<td><input type=text class=form-control name=sk_pendirian id=sk_pendirian value='$qry[sk_pendirian]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
							<td>Tanggal SK Pendirian</td>
							<td>:</td>
							<td><input type=date class=form-control name=tanggal_sk id=tanggal_sk value='$qry[tanggal_sk]'</td>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>SK Izin Operasional</td>
								<td>:</td>
								<td><input type=text class=form-control name=sk_operasional id=sk_operasional value='$qry[sk_operasional]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
							<td>Tanggal SK Izin Operasional</td>
							<td>:</td>
							<td><input type=date class=form-control name=tanggal_operasional id=tanggal_operasional value='$qry[tanggal_operasional]'</td>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Kebutuhan Khusus Dilayani</td>
								<td>:</td>
								<td><input type=text class=form-control name=kebutuhan_khusus id=kebutuhan_khusus value='$qry[kebutuhan_khusus]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Nama Bank</td>
								<td>:</td>
								<td><input type=text class=form-control name=nama_bank id=nama_bank value='$qry[nama_bank]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Cabang KCP/Unit</td>
								<td>:</td>
								<td><input type=text class=form-control name=cabang id=cabang value='$qry[cabang]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Rekening Atas Nama</td>
								<td>:</td>
								<td><input type=text class=form-control name=atas_nama_rek id=atas_nama_rek value='$qry[atas_nama_rek]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Luas Tanah Milik</td>
								<td>:</td>
								<td><input type=text class=form-control name=luas_tanah_milik id=luas_tanah_milik value='$qry[luas_tanah_milik]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Luas Tanah Bukan Milik</td>
								<td>:</td>
								<td><input type=text class=form-control name=luas_tanah_bukan id=luas_tanah_bukan value='$qry[luas_tanah_bukan]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Status BOS</td>
								<td>:</td>
								<td><input type=text class=form-control name=status_bos id=status_bos value='$qry[status_bos]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Waktu Penyelenggaraan</td>
								<td>:</td>
								<td><input type=text class=form-control name=waktu_penyelenggaraan id=waktu_penyelenggaraan value='$qry[waktu_penyelenggaraan]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Sertifikasi ISO</td>
								<td>:</td>
								<td><input type=text class=form-control name=sertifikasi_iso id=sertifikasi_iso value='$qry[sertifikasi_iso]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Sumber Listrik</td>
								<td>:</td>
								<td><input type=text class=form-control name=sumber_listrik id=sumber_listrik value='$qry[sumber_listrik]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Daya Listrik</td>
								<td>:</td>
								<td><input type=text class=form-control name=daya_listrik id=daya_listrik value='$qry[daya_listrik]'></td>
							</div>
              			</tr>
              			<tr>
              				<div class=form-group>
								<td>Akses Internet</td>
								<td>:</td>
								<td><input type=text class=form-control name=akses_internet id=akses_internet value='$qry[akses_internet]'></td>
							</div>
              			</tr>
              		</table>
              		<center>
              			<br>
	              		<input type=submit value=Update class='btn btn-primary'>
	              		<input type=button value=Kembali onclick=self.history.back() class='btn btn-primary'>
              		</center>
              	</div>
            </form>";
	?>
<?php include "footer.php"; ?>