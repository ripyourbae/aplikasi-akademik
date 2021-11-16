<?php 
    include "header.php"; 
    include "../config/koneksi.php";
?>
  <div class="alert alert-info">Tambah Alumni</div><hr><br/>
    <form method=post action=alumni_simpan.php enctype=multipart/form-data>
      <table border="0" width="75%" align="center">
        <tr>
          <td height="42" colspan="3" class="alert alert-warning" align="center"><h3><b>Tambah Data Alumni</b></h>
            </td>
        </tr>
        <tr>
          <td><br><br></td>
        </tr>
        <tr>
            <td>Nama Alumni</td>
            <td>:</td>
            <td><input type="text" name="nama_alumni" id="nama_alumni" class="form-control"></td>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>
            	<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
	         	<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
            </td>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
            	<textarea type="text" name="alamat" id="alamat" class="form-control"></textarea> 
            </td>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>
            	<select name="kelas" id="kelas" class="form-control">
	         		<option value="">- Pilih Kelas -</option>
	         		<option value="IX A">IX A</option>
	         		<option value="IX B">IX B</option>
	         		<option value="IX C">IX C</option>
	         		<option value="IX D">IX D</option>
	         		<option value="IX E">IX E</option>
	         		<option value="IX F">IX F</option>
	         	</select>
            </td>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
            <td>Tahun Lulusan</td>
            <td>:</td>
            <td>
                <?php
                echo "
                <select name='tahun_lulusan' class='form-control'>
                    <option value='0' selected>- Pilih Tahun Lulusan -</option>"; 
                        $lulus = mysql_query("SELECT * FROM tbl_lulusan ORDER BY id_lulusan ASC");
                        while($z = mysql_fetch_array($lulus)){
                            echo "
                                <option value='$z[tahun_lulusan]'>$z[tahun_lulusan]</option>";
                        }
                echo "</select>";
                ?> 
            </td>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>:</td>
            <td>
            	<input type="file" name="foto" id="foto" class="form-control">
            </td>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
          <td colspan="3" align="center">
          <br>
            <input type="submit" name="simpan" id="simpan" value="Simpan Data" class="btn btn-primary">
            <input type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary">
            <input type="button" name="kembali" id="kembali" class="btn btn-primary" value="Kembali" onclick="window.location='alumni_tampil.php';">
          </td>
        </tr>
      </table>
    </form>
<?php include "footer.php"; ?>