<?php include "header.php";
      include "../config/koneksi.php"; ?>
  <div class="alert alert-info">Tambah Kelas Baru</div><hr><br/>
      <form method=post action=kelas_simpan.php enctype=multipart/form-data>
          <table border="0" width="75%" align="center">
              <tr>
                  <td height="42" colspan="3" class="alert alert-warning" align="center"><h3><b>Input Kelas</b></h>
                  </td>
              </tr>
              <tr>
                  <td><br><br></td>
              </tr>
              <tr>
                  <div class=form-group>
                    <td>Kode Kelas</td>
                    <td></td>
                    <td><input type="text" name="kode_kelas" id="kode_kelas" class="form-control"></td>
                  </div>
              </tr>
              <tr>
                  <td><br></td>
              </tr>
              <tr>
                  <div class=form-group>
                    <td>Nama Guru</td>
                    <td></td>
                    <td>
                      <select name="nip" class="form-control">
                          <option value='0' selected>- Pilih Guru -</option>
                          <?php 
                            $guru = mysql_query("SELECT * FROM tbl_guru");
                            while($g = mysql_fetch_array($guru)){
                              echo "<option value='$g[nip]'>$g[nama_guru]</option>";
                            }
                          ?>
                          </select>
                    </td>
                  </div>
              </tr>
              <tr>
                  <td><br></td>
              </tr>
              <tr>
                  <div class=form-group>
                    <td>Nama Kelas</td>
                    <td></td>
                    <td><input type="text" name="nama_kelas" id="nama_kelas" class="form-control"></td>
                  </div>
              </tr>
              <tr>
                  <td><br></td>
              </tr>
              <tr>
                  <div class=form-group>
                    <td>Jumlah Siswa</td>
                    <td></td>
                    <td><input type="text" name="jumlah_siswa" id="jumlah_siswa" class="form-control"></td>
                  </div>
              </tr>
              <tr>
                <td colspan="3" align="center">
                  <br><br>
                  <input type="submit" name="simpan" id="simpan" value="Simpan" class="btn btn-primary">
                  <input type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary">
                  <input type="button" name="kembali" id="kembali" class="btn btn-primary" value="Kembali" onclick="window.location='kelas_tampil.php';">
                </td>
              </tr>
          </table>
      </form>
<?php include "header.php"; ?>