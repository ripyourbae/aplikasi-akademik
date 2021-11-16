<body onload="window.print()">
<?php 
  session_start();
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

      echo "<center><h3>Jadwal Pelajaran Kelas $ss[nama_kelas]</h3></center>";
    $g = mysql_fetch_array(mysql_query("SELECT * FROM tbl_siswa where nipd='$_SESSION[nipd]'"));

    echo "<table>
            <tr>
              <td></td> 
              <td></td>
              <td rowspan='5'>
                  <img style='width:75px; margin-left:5px' src='foto_siswa/$g[foto]'>
              </td>
            </tr>
            <tr>
              <td style='background:#f4f4f4; border-bottom:1px solid #8a8a8a' width=120px>
                  <b>No Induk</b>
              </td> 
              <td style='border-bottom:1px solid #8a8a8a'> : $g[nipd]</td>
            </tr>
            <tr>
              <td style='background:#f4f4f4; border-bottom:1px solid #8a8a8a'>
                  <b>Nama Lengkap</b>
              </td>    
              <td style='border-bottom:1px solid #8a8a8a'> : $g[nama_siswa]</td>
            </tr>
            <tr>
              <td style='background:#f4f4f4; border-bottom:1px solid #8a8a8a'>
                  <b>Semester</b>
              </td>    
              <td style='border-bottom:1px solid #8a8a8a'> : $_GET[semester]</td>
            </tr>
            <tr>
              <td style='background:#f4f4f4; border-bottom:1px solid #8a8a8a'>
                <b>Tahun Pelajaran</b>
              </td>   
              <td style='border-bottom:1px solid #8a8a8a'> : $_GET[tahun]</td>
            </tr>
          </table><br>";

    
      echo "<table border='1' class='table table-hover' width=100% cellpadding=6>
            <tr style='background:#e3e3e3; border:1px solid #cecece;'>
                <th>No</th>
                <th>Nama Pelajaran</th>
                <th>Nama Guru</th>
                <th>Semester</th>
                <th>Hari</th>
                <th>Jam</th>
            </tr>";

      if ($_GET[semester] != '' AND $_GET[tahun] != ''){
        $tampil = mysql_query("SELECT * FROM tbl_jadwal a 
                  JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas 
                    JOIN tbl_guru c ON a.nip=c.nip 
                      JOIN tbl_pelajaran d ON a.kode_pelajaran=d.kode_pelajaran
                        where a.kode_kelas='$_GET[a]' AND a.tahun_ajaran='$_GET[tahun]' AND d.semester='$_GET[semester]' ORDER BY a.id_jadwal DESC");
      }elseif($_GET[semester] == '' AND $_GET[tahun] != ''){
        $tampil = mysql_query("SELECT * FROM tbl_jadwal a 
                  JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas 
                    JOIN tbl_guru c ON a.nip=c.nip 
                      JOIN tbl_pelajaran d ON a.kode_pelajaran=d.kode_pelajaran
                        where a.kode_kelas='$_GET[a]' AND a.tahun_ajaran='$_GET[tahun]' ORDER BY d.semester ASC");
      }else{
        $tampil = mysql_query("SELECT * FROM tbl_jadwal a 
                  JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas 
                    JOIN tbl_guru c ON a.nip=c.nip 
                      JOIN tbl_pelajaran d ON a.kode_pelajaran=d.kode_pelajaran
                        where a.kode_kelas='$_GET[a]' AND a.tahun_ajaran='$thns' ORDER BY d.semester ASC");
      }

      
      $no = 1;
      while($qry=mysql_fetch_array($tampil)){
        echo "
        <tr align=center>
            <td>$no</td>
            <td>$qry[nama_pelajaran]</td>
            <td>$qry[nama_guru]</td>
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