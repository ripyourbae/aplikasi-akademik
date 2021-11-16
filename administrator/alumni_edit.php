<?php include "header.php"; ?>
  <?php
    error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
    ob_start();
    include "../config/koneksi.php";

    $query = mysql_query("SELECT * FROM tbl_alumni WHERE
      id_alumni = '$_GET[id_alumni]'");
    $qry = mysql_fetch_array($query);

    echo "
      <div class='alert alert-info'>Tambah Alumni</div><hr><br/>
          <form method=post action=alumni_update.php enctype=multipart/form-data>
              <input type='hidden' name='id_alumni' value='$qry[id_alumni]'>
              <table border=0 width=75% align=center>
                <tr>
                    <td height=42 colspan=3 class='alert alert-warning' align=center><h3><b>Edit Data Alumni</b></h>
                    </td>
                </tr>
                <tr>
                    <td><br><br></td>
                </tr>
                <tr>
                    <td>Nama Alumni</td>
                    <td>:</td>
                    <td><input type=text name=nama_alumni id=nama_alumni class='form-control' value='$qry[nama_alumni]'></td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                      <input type=text name=tempat_lahir id=tempat_lahir class='form-control' value='$qry[tempat_lahir]'>
                      <input type=date name=tanggal_lahir id=tanggal_lahir class='form-control' value='$qry[tanggal_lahir]'>
                    </td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                      <textarea type=text name=alamat id=alamat class='form-control'> $qry[alamat]</textarea> 
                    </td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                      <input type=text name=kelas id=kelas class='form-control' value='$qry[kelas]'>
                    </td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                    <td>Tahun Lulusan</td>
                    <td>:</td>
                    <td>
                      <select name='tahun_lulusan' class=form-control> 
                        <option value='0'>- Pilih Tahun Lulusan -</option>"; 
                          $lulus = mysql_query("SELECT * FROM tbl_lulusan");
                          while($z = mysql_fetch_array($lulus)){
                            if ($z[tahun_lulusan] == $qry[tahun_lulusan]){
                              echo "<option value='$z[tahun_lulusan]' selected>$z[tahun_lulusan]</option>";
                            }else{
                              echo "<option value='$z[tahun_lulusan]'>$z[tahun_lulusan]</option>";
                            }
                          }
                       echo "</select>
                    </td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td>:</td>
                    <td>
                        <br>
                        <img src='../foto_berita/foto_alumni/$qry[foto]' style='width:150px; height=150px;'><br><br>
                        <input type=file class=form-control name=foto id=foto >
                    </td>
                </tr>
                <tr>
                  <td><br></td>
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