<body onload="window.print()">
<?php
session_start();
error_reporting(0);
include "../config/koneksi.php"; 
$frt = mysql_fetch_array(mysql_query("SELECT * FROM tbl_header_print ORDER BY id_header_print DESC LIMIT 1")); 
?>
<title>Laporan Transkrip Nilai</title>
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
  $ss = mysql_fetch_array(mysql_query("SELECT * FROM tbl_kelas where kode_kelas='$_SESSION[kodekelas]'"));

  $g = mysql_fetch_array(mysql_query("SELECT * FROM tbl_siswa a JOIN tbl_kelas b ON a.kode_kelas=b.kode_kelas where a.nipd='$_SESSION[nipd]'"));
    if ($_GET[semester]=='1'){
      $ket = 'GANJIL';
    }else{
      $ket = 'GENAP';
    }

  	echo "<br><center><b>TRANSKRIP NILAI</b></center><br>";
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
            <td style='background:#f4f4f4; border-bottom:1px solid #8a8a8a'><b>Kelas</b></td>    <td style='border-bottom:1px solid #8a8a8a'> : $g[nama_kelas]
            </td>
        </tr>

        <tr><td>&nbsp;</td>    <td></td></tr>
      </table><br>";
	   echo "<table border='1' class='table table-hover' width=100% cellpadding=6>
          <tr style='background:#e3e3e3; border:1px solid #cecece;'>
			<th>No</th>
			<th>Mata Pelajaran</th>
			<th>Harian</th>
			<th>Tugas</th>
      <th>UTS</th>
      <th>UAS</th>
      <th>Nilai Akhir</th>
			<th>Predikat</th>
		  </tr>";
    $tampil = mysql_query("SELECT * FROM tbl_nilai a JOIN tbl_pelajaran b ON a.kode_pelajaran=b.kode_pelajaran
                           where a.nipd='$_SESSION[nipd]' ORDER BY b.semester");
    $no = 1;
    while($r=mysql_fetch_array($tampil)){
	  $ht1 = mysql_fetch_array(mysql_query("SELECT id_nilai, sum(nilai)/count(nilai) as nilai, status FROM `tbl_nilai_detail` where id_nilai='$r[id_nilai]' AND status='H' GROUP BY id_nilai, status"));
    $ht2 = mysql_fetch_array(mysql_query("SELECT id_nilai, sum(nilai)/count(nilai) as nilai, status FROM `tbl_nilai_detail` where id_nilai='$r[id_nilai]' AND status='T' GROUP BY id_nilai, status"));
    $harian = number_format($ht1[nilai],0);
    $tugas  = number_format($ht2[nilai],0);

    $rumus = mysql_fetch_array(mysql_query("SELECT * FROM tbl_rumus_raport ORDER BY id_rumus_raport DESC LIMIT 1"));
    $akhir = ($rumus[nilai_harian]*$harian + $rumus[nilai_tugas]*$tugas + $rumus[nilai_uts]*$r[nilai_uts] + $rumus[nilai_uas]*$r[nilai_uas])/100;
    $totalnilaiformat  = number_format($akhir,1);
    $totalnilai  = number_format($akhir,0);

    $grade1 = mysql_fetch_array(mysql_query("SELECT * FROM `tbl_predikat` where ($harian >=nilai_a) AND ($harian <= nilai_b)"));
    $grade2 = mysql_fetch_array(mysql_query("SELECT * FROM `tbl_predikat` where ($tugas >=nilai_a) AND ($tugas <= nilai_b)"));
    $grade3 = mysql_fetch_array(mysql_query("SELECT * FROM `tbl_predikat` where ($r[nilai_uts] >=nilai_a) AND ($r[nilai_uts] <= nilai_b)"));
    $grade4 = mysql_fetch_array(mysql_query("SELECT * FROM `tbl_predikat` where ($r[nilai_uas] >=nilai_a) AND ($r[nilai_uas] <= nilai_b)"));
    $grade = mysql_fetch_array(mysql_query("SELECT * FROM `tbl_predikat` where ($totalnilai >=nilai_a) AND ($totalnilai <= nilai_b)"));

      echo "<tr align=center>
				<td>$no</td>
				<td>$r[nama_pelajaran] (Semester $r[semester])</td>
				<td align=center>$harian</td>
				<td align=center>$tugas</td>
				<td align=center>$r[nilai_uts]</td>
				<td align=center>$r[nilai_uas]</td>
        <td align=center>$totalnilaiformat</td>
        <td align=center>$grade[grade]</td>
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
              $query=mysql_query ("SELECT * FROM tbl_guru a JOIN tbl_kelas b ON a.nip=b.nip where kode_kelas='$_SESSION[kodekelas]' ORDER BY a.nip ASC");
              $no=1;
              $w=mysql_fetch_array($query)
          ?>
          <td align="center"><br /><br /><br /><br /><br />
            <u><?php echo "$w[nama_guru]"; ?> </u>><br>
            <?php echo "$w[nip]"; ?> <br /><br /></td>
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