<?php include "header.php"; ?>

<script>
	$(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
     $(".modal-body #bookId").val( myBookId );
});
</script>
<script>
function myFunction() {
    alert("Klik Button 'Simpan Semua Nilai' Terlebih Dahulu!");
}
</script>

<?php
	include "../config/koneksi.php";
	$aksi="aksi_transkrip.php";
	switch($_GET[act]){

	  default:
	    echo "<div class='alert alert-info'>Semua Data Kelas</div><hr>
	          <table class='table table-bordered table-hover' width=100%>
	          <tr style='background:#e3e3e3; border:1px solid #cecece;'>
				<th width=60px>No</th>
				<th width=220px>Kode Kelas</th>
				<th>Nama Kelas</th>
				<th>Wali Kelas</th>
				<th>Jumlah Siswa</th>
				<th>Kapasitas</th>
				<th style='width:280px; text-align:center;'>Action</th></tr>";
	    
		if ($_SESSION[level] == 'admin'){
			$tampil = mysql_query("SELECT * FROM tbl_kelas a JOIN tbl_guru b ON a.nip=b.nip where b.nip='$_SESSION[id_user]' ORDER BY a.kode_kelas ASC");
	    }else{
			$tampil = mysql_query("SELECT * FROM tbl_kelas a JOIN tbl_guru b ON a.nip=b.nip ORDER BY a.kode_kelas ASC");
		}
		$no = 1;
	    while($r=mysql_fetch_array($tampil)){
			$siswa = mysql_query("SELECT * FROM tbl_siswa where kode_kelas='$r[kode_kelas]'");
			$total = mysql_num_rows($siswa);
	      echo "<tr bgcolor=$warna>
					<td>$no</td>
					<td>$r[kode_kelas]</td>
	                <td>$r[nama_kelas]</td>
					<td>$r[nama_guru]</td>
					<td>$total Orang Siswa</td>
					<td>$r[jumlah_siswa] Orang Siswa</td>
			        <td><center>
						<a class='btn btn-primary' title='Tampilkan Siswa' href=?module=transkrip&act=tampilsiswa&id=$r[kode_kelas]><i class='fa fa-search'></i> Tampilkan Siswa</a>
					</td></tr>";
	      $no++;
	    }
	    break;
		
		case "tampilsiswa":
			$kelas = mysql_query("SELECT * FROM tbl_kelas where kode_kelas='$_GET[id]'");
			$k = mysql_fetch_array($kelas);
			$mapel = mysql_query("SELECT * FROM tbl_pelajaran where kode_pelajaran='$_GET[pelajaran]'");
			$p = mysql_fetch_array($mapel);
			echo "<div class='alert alert-info'>Semua Siswa di Kelas $k[nama_kelas]</b></div><hr>"; 
			  echo "<table class='table table-bordered table-hover' width=100%>
	          <tr style='background:#e3e3e3; border:1px solid #cecece;'>
				<th>No</th>
				<th>No Induk</th>
				<th>Nama Siswa</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th style='width:280px; text-align:center;'>Action</th>
			  </tr>";
	    
	    $tampil = mysql_query("SELECT * FROM tbl_siswa where kode_kelas='$_GET[id]' ORDER BY nipd ASC");
		$no = 1;
		$thns = date("Y");
	    while($r=mysql_fetch_array($tampil)){
		$a = mysql_fetch_array($absen);  
			echo "<tr bgcolor=$warna >
					<td>$no</td>
					<td>$r[nipd]</td>
					<td>$r[nama_siswa]</td>
					<td>$r[jenis_kelamin]</td>
					<td>$r[tempat_lahir]</td>
					<td>$r[tanggal_lahir]</td>
					<td><center>
						<a target='BLANK' class='btn btn-success' title='Cetak Transkrip Nilai Siswa' href='print_transkrip.php?id=$_GET[id]&nipd=$r[nipd]'><i class='fa fa-print'></i> Cetak Transkrip Nilai</a>
					</td>
				  </tr>";
	      $no++;
	    }
		break;
	}
?>

<br>
<?php include "footer.php"; ?>