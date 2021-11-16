<body onload="window.print()">
<?php 
  error_reporting(0);
  include "../config/koneksi.php"; 
  $frt = mysql_fetch_array(mysql_query("SELECT * FROM tbl_header_print ORDER BY id_header_print DESC LIMIT 1")); 
  ?>
  <title>Laporan Jadwal Pelajaran</title>
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

    $ss = mysql_fetch_array(mysql_query("SELECT * FROM tbl_kelas where kode_kelas='$_GET[a]'"));
    if ($_GET[a] == '0'){
      echo "<center><h2>Laporan Semua Jadwal Pelajaran</h2></center>";
    }else{
      echo "<center><h2>Laporan Jadwal Pelajaran Kelas $ss[nama_kelas]</h2></center>";
    }
      echo "<table border='1' class='table table-hover' width=100% cellpadding=6>
            <tr style='background:#e3e3e3; border:1px solid #cecece;'>
                <th>No</th>
                <th style='width:40px;'>Kode</th>
                <th>Nama Pelajaran</th>
                <th>Nama Kelas</th>
                <th>Nama Guru</th>
                <th>Tahun Ajaran</th>
                <th style='width:80px;'>Semester</th>
                <th>Hari</th>
                <th>Jam</th>
            </tr>";

      if ($_GET[a] == '0') {
        $tampil = mysql_query("SELECT * FROM tbl_jadwal a 
                JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas 
                  JOIN tbl_guru c ON a.nip=c.nip 
                    JOIN tbl_pelajaran d ON a.kode_pelajaran=d.kode_pelajaran
                      ORDER BY d.semester ASC");
      }else{
          $tampil = mysql_query("SELECT * FROM tbl_jadwal a 
                JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas 
                  JOIN tbl_guru c ON a.nip=c.nip 
                    JOIN tbl_pelajaran d ON a.kode_pelajaran=d.kode_pelajaran
                      where a.kode_kelas='$_GET[a]' ORDER BY d.semester ASC");
      }
      $no = 1;
      while($qry=mysql_fetch_array($tampil)){
        echo "
        <tr align=center>
            <td>$no</td>
            <td>$qry[kode_pelajaran]</td>
            <td>$qry[nama_pelajaran]</td>
            <td>$qry[nama_kelas]</td>
            <td>$qry[nama_guru]</td>
            <td>$qry[tahun_ajaran]</td>
            <td>Semester $qry[semester]</td>
            <td>$qry[hari]</td>
            <td>$qry[jam] WIB</td>
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