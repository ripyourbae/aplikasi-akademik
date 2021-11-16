<body onload="window.print()">
<?php 
  error_reporting(0);
  include "../config/koneksi.php"; 
  $frt = mysql_fetch_array(mysql_query("SELECT * FROM tbl_header_print ORDER BY id_header_print DESC LIMIT 1")); 
  ?>
  <title>Laporan Data Siswa</title>
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
      
      if ($_GET[a]=='0'){
        echo "<center><h2>Laporan Data Semua Siswa</h2></center>";
      }else{
        echo "<center><h2>Laporan Data Siswa Kelas $ss[nama_kelas]</h2></center>";
      }
      echo "<table border='1' class='table table-hover' width=100% cellpadding=6>
            <tr align=center style='background:#e3e3e3; border:1px solid #cecece;'>
                <td><b>No</b></td>
                <td><b>Nama Siswa</b></td>
                <td><b>Tempat Lahir</b></td>
                <td><b>Tanggal Lahir</b></td>
                <td><b>Jenis Kelamin</b></td>
                <td><b>Agama</b></td>
                <td><b>Kelas</b></td>
                <td><b>Asal Sekolah</b></td>

          </tr>";

      if ($_GET[a] == '0') {
        $tampil = mysql_query("SELECT * FROM tbl_siswa a JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas ORDER BY a.nipd ASC");
      }else{
        $tampil = mysql_query("SELECT * FROM tbl_siswa a JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas where a.kode_kelas='$_GET[a]' ORDER BY a.nipd ASC");
      }
    
      $no = 1;
      while($r=mysql_fetch_array($tampil)){
        echo "
        <tr align=center bgcolor=$warna>
            <td>$no</td>
            <td>$r[nama_siswa]</td>
            <td>$r[tempat_lahir]</td>
            <td>$r[tanggal_lahir]</td>
            <td>$r[jenis_kelamin]</td>
            <td>$r[agama]</td>
            <td>$r[nama_kelas]</td>
            <td>$r[sekolah_asal]</td>
        </tr>";
        $no++;
      }

      echo "</table><br/><hr>";
  ?>
  <?php
    if ($_GET[a] == '0') {
      echo "
      <table width=100%>
        <tr>
            <td colspan='2'></td>
            <td width='0'></td>
        </tr>
        <tr>
            <td width='300'>
            <td width='530'></td>
            <td align='center'>Mengetahui <br> Kepala Sekolah</td>
        </tr>
        <tr>
            <td width='300'></td>
        </tr>
        <tr>
            <td colspan='2'>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>";


    }else{
        echo "
        <table width=100%>
            <tr>
                <td colspan='2'></td>
                <td width='286'></td>
            </tr>
            <tr>
                <td width='230' align='center'>Mengetahui <br> Wali Kelas </td>
                <td width='530'></td>
                <td align='center'>Mengetahui <br> Kepala Sekolah </td>
            </tr>
            <tr>";
      }
  ?>

            <?php                
                $query=mysql_query ("SELECT * FROM tbl_guru a JOIN tbl_kelas b ON a.nip=b.nip where kode_kelas='$_GET[a]' ORDER BY a.nip ASC");
                
                $w=mysql_fetch_array($query)
            ?>
                  <td align='center'><br /><br /><br /><br /><br />
                    <?php echo "$w[nama_guru]"; ?><br /><br>
                    <?php echo "$w[nip]"; ?>  <br /><br />
                  </td>
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