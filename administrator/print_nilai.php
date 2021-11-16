<body onload="window.print()">
<?php 
  error_reporting(0);
  include "../config/koneksi.php"; 
  error_reporting(0);
  $frt = mysql_fetch_array(mysql_query("SELECT * FROM tbl_header_print ORDER BY id_header_print DESC LIMIT 1")); 
  ?>
  <title>Laporan Nilai</title>
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
  $mapel = mysql_query("SELECT * FROM tbl_pelajaran where kode_pelajaran='$_GET[pelajaran]'");
  $m = mysql_fetch_array($mapel);
	echo "<center><h2>Laporan Nilai Mata Pelajaran $m[nama_pelajaran]</h2></center>";
	   echo "<table border='1' class='table table-hover' width=100% cellpadding=6>
          <tr style='background:#e3e3e3; border:1px solid #cecece;'>
			<th>No</th>
			<th>NIS</th>
			<th>Nama Siswa</th>
			<th>Nilai Harian</th>
			<th>Nilai Tugas</th>
			<th>Nilai UTS</th>
			<th>Nilai UAS</th>
		  </tr>";
      $tampil = mysql_query("SELECT * FROM tbl_siswa where kode_kelas='$_GET[id]' ORDER BY nipd ASC");
      $no = 1;
    	echo "<form action='' method='POST'>";

      while($r=mysql_fetch_array($tampil)){
    	$nilai = mysql_query("SELECT * FROM tbl_nilai where nipd='$r[nipd]'");
    	$n = mysql_fetch_array($nilai);
    	$ht1 = mysql_fetch_array(mysql_query("SELECT id_nilai, GROUP_CONCAT(nilai SEPARATOR ',') as nilai, status FROM `tbl_nilai_detail` where id_nilai='$n[id_nilai]' AND status='H' GROUP BY id_nilai, status"));
      $ht2 = mysql_fetch_array(mysql_query("SELECT id_nilai, GROUP_CONCAT(nilai SEPARATOR ',') as nilai, status FROM `tbl_nilai_detail` where id_nilai='$n[id_nilai]' AND status='T' GROUP BY id_nilai, status"));
      echo "<tr align=center>
      				<td>$no</td>
      				<td>$r[nipd]</td>
      				<td>$r[nama_siswa]</td>
      				<td>$ht1[nilai]</td>
      				<td>$ht2[nilai]</td>
      				<td>$n[nilai_uts]</td>
      				<td>$n[nilai_uas]</td>
    			</tr>";
          $no++;
        }

		  echo "</table><br/><hr>";
?>
<table width=100%>
    <tr>
        <td colspan="2"></td>
        <td width="286"></td>
    </tr>
    <tr>
        <td width="230" align="center">Mengetahui <br> <?php echo "$frt[ttd_kiri]"; ?></td>
        <td width="530"></td>
        <td align="center">Mengetahui <br> <?php echo "$frt[ttd_kanan]"; ?></td>
    </tr>
    <tr>
      <?php
        $query=mysql_query ("SELECT * FROM tbl_guru a JOIN tbl_kelas b ON a.nip=b.nip where kode_kelas='$_GET[id]' ORDER BY a.nip ASC");
        $no=1;
        $w=mysql_fetch_array($query)
      ?>
        <td align="center"><br /><br /><br /><br /><br />
          <u><?php echo "$w[nama_guru]"; ?></u><br>
          <?php echo "$w[nip]"; ?> <br /><br /></td>
        <td>&nbsp;</td>
        <td align="center" valign="top"><br /><br /><br /><br /><br />
          <?php                
              $query=mysql_query ("SELECT * FROM tbl_guru where jenis_ptk='Kepala Sekolah'");
                
              $w=mysql_fetch_array($query)
          ?>
              <u><?php echo "$w[nama_guru]"; ?></u><br>                  <?php echo "$w[nip]"; ?>  <br /><br />
        </td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>