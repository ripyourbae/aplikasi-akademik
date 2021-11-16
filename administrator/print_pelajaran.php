<body onload="window.print()">
<?php 
  error_reporting(0);
  include "../config/koneksi.php"; 
  $frt = mysql_fetch_array(mysql_query("SELECT * FROM tbl_header_print ORDER BY id_header_print DESC LIMIT 1")); 
  ?>
  <title>Laporan Pelajaran</title>
  <table class="basic"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
      <td width="65" rowspan="6"><img src="../images/logo.png" width="90" height="90"></td>
      <td width="550" align="center">&nbsp;</td>
  	<td width="65" rowspan="6"><img src="../images/tutwuri.png" width="90" height="90"></td>
    </tr>
    <tr>
      <td align="center"><?php echo "$frt[header_1]"; ?></td>
    </tr>
    <tr>
      <td align="center"><p><?php echo "$frt[header_2]"; ?></p></td>
    </tr>   
  </table>
  <br>

  <?php

    $ss = mysql_fetch_array(mysql_query("SELECT * FROM tbl_pelajaran where semester='$_GET[semester]'"));
      
      if ($_GET[semester]=='0'){
        echo "<center><h2>Laporan Semua Mata Pelajaran</h2></center>";
      }else{
        echo "<center><h2>Laporan Mata Pelajaran Semester $ss[semester]</h2></center>";
      }
      
      echo "<table border='1' class='table table-hover' width=100% cellpadding=6>
            <tr style='background:#e3e3e3; border:1px solid #cecece;'>
        <th width=60px>No</th>
        <th width=220px>Kode Mata Pelajaran</th>
        <th>Nama Mata Pelajaran</th>
        <th>Semester</th>
      </tr>";

      if ($_GET[semester] == '0') {
        $tampil = mysql_query("SELECT * FROM tbl_pelajaran ORDER BY semester ASC");
      }else{
        $tampil = mysql_query("SELECT * FROM tbl_pelajaran where semester='$_GET[semester]' ORDER BY semester ASC");
      }

      $no = 1;
      while($r=mysql_fetch_array($tampil)){
        echo "
        <tr bgcolor=$warna>
          <td align=center>$no</td>
          <td align=center>$r[kode_pelajaran]</td>
          <td align=center>$r[nama_pelajaran]</td>
          <td align=center>$r[semester]</td>
        </tr>";
        $no++;
      }

      echo "</table><br/><hr>";
  ?>

  <table width=100%>
      <tr>
          <td colspan="2"></td>
          <td width="0"></td>
      </tr>
      <tr>
          <td width="300"></td>
          <td width="530"></td>
          <td align="center">Mengetahui <br> <?php echo "$frt[ttd_kanan]"; ?></td>
      </tr>
      <tr>
          <td width="300"></td>
          <td>&nbsp;</td>
          <td align="center" valign="top"><br /><br /><br /><br /><br />
            <?php                
                $query=mysql_query ("SELECT * FROM tbl_guru where jenis_ptk='Kepala Sekolah'");
                
                $w=mysql_fetch_array($query)
            ?>
                <u><?php echo "$w[nama_guru]"; ?></u><br>
                <?php echo "$w[nip]"; ?>  <br /><br />
          </td>
      </tr>
      <tr>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
      </tr>
  </table>
  </body>