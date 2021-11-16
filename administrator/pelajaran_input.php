<?php include "header.php"; ?>
  <div class="alert alert-info">Tambah Mata Pelajaran Baru</div><hr><br/>
    <form method=post action=pelajaran_simpan.php enctype=multipart/form-data>
      <table border="0" width="75%" align="center">
        <tr>
          <td height="42" colspan="3" class="alert alert-warning" align="center"><h3><b>Mata Pelajaran</b></h>
            </td>
        </tr>
        <tr>
          <td><br><br></td>
        </tr>
        <tr>
          <div class=form-group>
            <td>Kode Mata Pelajaran</td>
            <td></td>
            <td><input type="text" name="kode_pelajaran" id="kode_pelajaran" class="form-control"></td>
          </div>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
          <div class=form-group>
            <td>Nama Pelajaran</td>
            <td></td>
            <td><input type="text" name="nama_pelajaran" id="nama_pelajaran" class="form-control"></td>
          </div>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
          <div class=form-group>
            <td>Semester</td>
            <td></td>
            <td><input type="text" name="semester" id="semester" class="form-control"></td>
          </div>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
          <td colspan="3" align="center">
          <br>
            <input type="submit" name="simpan" id="simpan" value="Simpan Data Baru" class="btn btn-primary">
            <input type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary">
            <input type="button" name="kembali" id="kembali" class="btn btn-primary" value="Kembali" onclick="window.location='pelajaran_tampil.php';">
          </td>
        </tr>
      </table>
    </form>
<?php include "footer.php"; ?>