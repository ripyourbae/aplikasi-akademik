<?php include "header.php"; ?>
  <?php
    error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
    ob_start();
    include "../config/koneksi.php";

    $query = mysql_query("SELECT * FROM tbl_kelas WHERE
      id_kelas = '$_GET[id_kelas]'");
    $qry = mysql_fetch_array($query);

    echo "
      <div class='alert alert-info'>Edit Data Kelas</div><hr><br/>
          <div class=form-group>
            <form method=post action=berita_update.php enctype=multipart/form-data>
              <table border=0 align=center width=75%>
                <tr>
                    <td height=42 colspan=3 class='alert alert-warning' align=center><h3><b>Edit Kelas $qry[nama_kelas]</b></h>
                    </td>
                </tr>
                <tr>
                    <td><br><br></td>
                </tr>
                <tr>
                    <div class='form-group'>
                      <td>ID Kelas</td>
                      <td></td>
                      <td><input type=text name=id_kelas id=id_kelas value=$qry[id_kelas] class='form-control'></td>
                    </div>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <div class='form-group'>
                      <td>Nama Kelas</td>
                      <td></td>
                      <td><input type=text name=nama_kelas id=nama_kelas value=$qry[nama_kelas] class='form-control'></td>
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