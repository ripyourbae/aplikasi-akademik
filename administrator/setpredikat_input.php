<?php include "header.php"; ?>
  <div class="alert alert-info">Tambah Predikat Nilai Baru</div><hr><br/>
    <form method=post action=setpredikat_simpan.php enctype=multipart/form-data>
      <table border="0" width="75%" align="center">
        <tr>
          <td height="42" colspan="3" class="alert alert-warning" align="center"><h3><b>Input Predikat Nilai</b></h>
            </td>
        </tr>
        <tr>
          <td><br><br></td>
        </tr>
        <tr>
          <div class=form-group>
            <td>Nilai A</td>
            <td></td>
            <td><input type="text" name="nilai_a" id="nilai_a" class="form-control"></td>
          </div>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
          <div class=form-group>
            <td>Nilai B</td>
            <td></td>
            <td><input type="text" name="nilai_b" id="nilai_b" class="form-control"></td>
          </div>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
          <div class=form-group>
            <td>Grade Nilai</td>
            <td></td>
            <td><input type="text" name="grade" id="grade" class="form-control"></td>
          </div>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
          <div class=form-group>
            <td>Keterangan</td>
            <td></td>
            <td><input type="text" name="keterangan" id="keterangan" class="form-control"></td>
          </div>
        </tr>
        <tr>
          <td colspan="3" align="center">
          <br>
            <input type="submit" name="simpan" id="simpan" value="Simpan Data Baru" class="btn btn-primary">
            <input type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary">
            <input type="button" name="kembali" id="kembali" class="btn btn-primary" value="Kembali" onclick="window.location='setpredikat_tampil.php';">
          </td>
        </tr>
      </table>
    </form>
<?php include "footer.php"; ?>