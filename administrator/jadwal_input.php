<?php include "header.php"; 
      include "../config/koneksi.php"; ?>
      
<div class="alert alert-info">Tambah - Jadwal Pelajaran</div><hr><br/>
      <form method=post action=jadwal_simpan.php enctype=multipart/form-data>
          <table border="0" width="75%" align="center">
          <tr>
              <td height="42" colspan="3" class="alert alert-warning" align="center"><h3><b>Jadwal Pelajaran</b></h>
              </td>
          </tr>
          <tr>
              <td><br><br></td>
          </tr>
          <tr>
            <div class=form-group>
                <td>Kelas</td>
                <td></td>
                <td>
                  <select name="kode_kelas" class="form-control">
                      <option value='0' selected>- Pilih Kelas -</option>
                      <?php 
                        $kelas = mysql_query("SELECT * FROM tbl_kelas");
                        while($a = mysql_fetch_array($kelas)){
                          echo "<option value='$a[kode_kelas]'>$a[nama_kelas]</option>";
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
                <td>Pelajaran</td>
                <td></td>
                <td>
                  <select name="kode_pelajaran" class="form-control">
                      <option value='0' selected>- Pilih Pelajaran -</option>
                      <?php 
                        $mapel = mysql_query("SELECT * FROM tbl_pelajaran");
                        while($b = mysql_fetch_array($mapel)){
                          echo "<option value='$b[kode_pelajaran]'>$b[kode_pelajaran] - $b[nama_pelajaran]</option>";
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
                <td>Pilih Guru</td>
                <td></td>
                <td>
                  <select name="nip" class="form-control">
                      <option value='0' selected>- Pilih Guru -</option>
                      <?php 
                        $guru = mysql_query("SELECT * FROM tbl_guru");
                        while($b = mysql_fetch_array($guru)){
                          echo "<option value='$b[nip]'>$b[nama_guru]</option>";
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
                <td>Tahun Ajaran</td>
                <td></td>
                <td><input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control"></td>
            </div>
          </tr>
          <tr>
              <td><br></td>
          </tr>
          <tr>
            <div class=form-group>
                <td>Hari</td>
                <td></td>
                <td>
                  <select name="hari" class="form-control">
                      <option value='0' selected>- Pilih -</option>
                      <option value='Senin'>Senin</option>
                      <option value='Selasa'>Selasa</option>
                      <option value='Rabu'>Rabu</option>
                      <option value='Kamis'>Kamis</option>
                      <option value='Jumat'>Jumat</option>
                      <option value='Sabtu'>Sabtu</option>
                  </select>
                </td>
            </div>
          </tr>
          <tr>
              <td><br></td>
          </tr>
          <tr>
            <div class=form-group>
                <td>Jam</td>
                <td></td>
                <td><input type="time" name="jam" id="jam" class="form-control"></td>
            </div>
          </tr>
          <tr>
              <td colspan="3" align="center"><br>
                <input type="submit" name="simpan" id="simpan" class="btn btn-primary" value="Simpan">
                <input type="reset" name="reset" id="reset" class="btn btn-primary" value="Reset">
                <input type="button" name="kembali" id="kembali" class="btn btn-primary" value="Kembali" onclick="window.location='jadwal_tampil.php';">
              </td>
          </tr>
          </table>
    </form>