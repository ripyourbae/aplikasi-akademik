<?php include "header.php"; ?>
  <?php
    error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
    ob_start();
    include "../config/koneksi.php";

    $query = mysql_query("SELECT * FROM tbl_jadwal WHERE
      id_jadwal = '$_GET[id_jadwal]'");
    $qry = mysql_fetch_array($query);

    echo "
      <div class='alert alert-info'>Edit Data Jadwal Pelajaran</div><hr><br/>
            <div class=form-group>
              <form method=post action=berita_update.php enctype=multipart/form-data>
                <table border=0 align=center width=75%>
                  <tr>
                      <td height=42 colspan=3 class='alert alert-warning' align=center><h3><b>Edit Jadwal Pelajaran</b></h></td>
                  </tr>
                  <tr>
                      <td><br><br></td>
                  </tr>
                  <tr>
                      <div class='form-group'>
                        <td>Kode Jadwal</td>
                        <td></td>
                        <td><input type=text name=id_jadwal id=id_jadwal class='form-control' value=$qry[id_jadwal]></td>
                      </div>
                  </tr>
                  <tr>
                      <td><br></td>
                  </tr>
                  <tr>
                      <div class='form-group'>
                        <td>Kode Kelas</td>
                        <td></td>
                        <td><input type=text name=id_kelas id=id_kelas class='form-control' value=$qry[id_kelas]></td>
                      </div>
                  </tr>
                  <tr>
                      <td><br></td>
                  </tr>
                  <tr>
                      <div class='form-group'>
                        <td>Kode Pelajaran</td>
                        <td></td>
                        <td><input type=text name=id_pelajaran id=id_pelajaran class='form-control' value=$qry[id_pelajaran]></td>
                      </div>
                  </tr>
                  <tr>
                      <td><br></td>
                  </tr>
                  <tr>
                      <div class='form-group'>
                        <td>NIP</td>
                        <td></td>
                        <td><input type=text name=nip id=nip class='form-control' value=$qry[nip]></td>
                      </div>
                  </tr>
                  <tr>
                      <td><br></td>
                  </tr>
                  <tr>
                      <div class='form-group'>
                        <td>Tahun Ajaran</td>
                        <td></td>
                        <td><input type=text name=tahun_ajaran id=tahun_ajaran class='form-control' value=$qry[tahun_ajaran]></td>
                      </div>
                  </tr>
                  <tr>
                      <td><br></td>
                  </tr>
                  <tr>
                      <div class='form-group'>
                        <td>Jam</td>
                        <td></td>
                        <td><input type=text name=jam id=jam class='form-control' value=$qry[jam]></td>
                      </div>
                  </tr>
                  <tr>
                      <td><br></td>
                  </tr>
                  <tr>
                      <div class='form-group'>
                        <td>Hari</td>
                        <td></td>
                        <td><input type=text name=hari id=hari class='form-control' value=$qry[hari]></td>
                      </div>
                  </tr>
                </table>
                <br>
                <center>
                  <input type=submit value=Update id=update name=update class='btn btn-primary'>
                  <input type=button value=Kembali class='btn btn-primary' onclick=self.history.back()>
                </center>
              </form>";
  ?>
<?php include "footer.php"; ?>