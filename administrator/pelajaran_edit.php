<?php include "header.php"; ?>
  <?php
    error_reporting(E_ALL^(E_NOTICE | E_WARNING | E_DEPRECATED));
    ob_start();
    include "../config/koneksi.php";

    $query = mysql_query("SELECT * FROM tbl_pelajaran WHERE
      id_pelajaran = '$_GET[id_pelajaran]'");
    $qry = mysql_fetch_array($query);

    echo "
      <div class='alert alert-info'>Edit Data Mata Pelajaran</div><hr><br/>
          <div class=form-group>
            <form method=post action=pelajaran_update.php enctype=multipart/form-data>
              <table border=0 align=center width=75%>
                <tr>
                  <td height=42 colspan=3 class='alert alert-warning' align=center><h3><b>Edit Mata Pelajaran $qry[nama_pelajaran]</b></h>
                  </td>
                </tr>
                <tr>
                  <td><br><br></td>
                </tr>
                <tr>
                  <div class='form-group'>
                    <td>Kode Mata Pelajaran</td>
                    <td></td>
                    <td><input type=text name=id_pelajaran id=id_pelajaran class='form-control' value=$qry[id_pelajaran]></td>
                  </div>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <div class='form-group'>
                    <td>Nama pelajaran</td>
                    <td></td>
                    <td><input type=text name=nama_pelajaran id=nama_pelajaran class='form-control' value=$qry[nama_pelajaran]></td>
                  </div>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <div class='form-group'>
                    <td>Semester</td>
                    <td></td>
                    <td><input type=text name=semester id=semester class='form-control' value=$qry[semester]></td>
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