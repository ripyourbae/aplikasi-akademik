<body onload="window.print()">
<?php 
  error_reporting(0);
  include "../config/koneksi.php"; 
  $frt = mysql_fetch_array(mysql_query("SELECT * FROM tbl_header_print ORDER BY id_header_print DESC LIMIT 1")); 
  ?>
  <title>Laporan Data Guru</title>
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
    echo "<center><h2>Laporan Data Guru</h2></center>";
      echo "<table border='1' class='table table-hover' width=100% cellpadding=6>
            <tr align=center style='background:#e3e3e3; border:1px solid #cecece;'>
              <td><b>No</td>
              <td><b>NIP</td>
              <td><b>Nama Guru</td>
              <td><b>Jenis Kelamin</td>
              <td><b>Telepon</td>
              <td><b>Agama</td>
              <td><b>Jenis PTK (Jabatan)</td>
              <td><b>Sumber Gaji</td>
          </tr>";

      $tampil = mysql_query("SELECT * FROM tbl_guru ORDER BY id_guru");
      $no = 1;
      while($r=mysql_fetch_array($tampil)){
        echo "
        <tr align=center bgcolor=$warna>
          <td>$no</td>
          <td>$r[nip]</td>
          <td>$r[nama_guru]</td>
          <td>$r[jenis_kelamin]</td>
          <td>$r[telepon]</td>
          <td>$r[agama]</td>
          <td>$r[jenis_ptk]</td>
          <td>$r[sumber_gaji]</td>
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
                <?php echo "$w[nip]"; ?>  <br><br>
          </td>
      </tr>
      <tr>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
      </tr>
  </table>
  </body>