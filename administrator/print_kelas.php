<body onload="window.print()">
<?php 
  error_reporting(0);
  include "../config/koneksi.php"; 
  $frt = mysql_fetch_array(mysql_query("SELECT * FROM tbl_header_print ORDER BY id_header_print DESC LIMIT 1")); 
  ?>
  <title>Laporan Data Kelas</title>
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
    echo "<center><h2>Laporan Data Kelas</h2></center>";
      echo "<table border='1' class='table table-hover' width=100% cellpadding=6>
            <tr style='background:#e3e3e3; border:1px solid #cecece;'>
        <th>No</th>
        <th>Kode Kelas</th>
        <th>Nama Kelas</th>
        <th>Wali Kelas</th>
        <th>Jumlah Siswa</th>
      </tr>";

      
      $tampil = mysql_query("SELECT * FROM tbl_kelas a JOIN tbl_guru b ON a.nip=b.nip where b.nip='$_SESSION[id_admin]' ORDER BY a.kode_kelas ASC");
      
      $tampil = mysql_query("SELECT * FROM tbl_kelas a JOIN tbl_guru b ON a.nip=b.nip ORDER BY a.kode_kelas ASC");
      
      $no = 1;
        while($qry=mysql_fetch_array($tampil)){
          $hitung = mysql_num_rows(mysql_query("SELECT * FROM tbl_siswa where kode_kelas='$qry[kode_kelas]'"));
      echo "
          <tr bgcolor=$warna>
            <td align=center>$no</td>
            <td align=center>$qry[kode_kelas]</td>
            <td align=center>$qry[nama_kelas]</td>
            <td align=center>$qry[nama_guru]</td>
            <td align=center>$hitung Orang</td>
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