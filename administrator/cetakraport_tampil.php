<?php include "header.php"; ?>

<script>
	$(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
     $(".modal-body #bookId").val( myBookId );
});
</script>

<?php
	include "../config/koneksi.php";
	$aksi="aksi_raport.php";
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
			$tampil = mysql_query("SELECT * FROM tbl_kelas a JOIN tbl_guru b ON a.nip=b.nip where b.nip='$_SESSION[id_admin]' ORDER BY a.kode_kelas ASC");
	    }else{
			$tampil = mysql_query("SELECT * FROM tbl_kelas a JOIN tbl_guru b ON a.nip=b.nip ORDER BY a.kode_kelas ASC");
		}
		$no = $posisi+1;
	    while($r=mysql_fetch_array($tampil)){
			$siswa = mysql_query("SELECT * FROM tbl_siswa where kode_kelas='$r[kode_kelas]'");
			$total = mysql_num_rows($siswa);
	      echo "<tr bgcolor=$warna>
					<td>$no</td>
					<td>$r[kode_kelas]</td>
	                <td>$r[nama_kelas]</td>
					<td>$r[nama_guru]</td>
					<td>$total Orang Siswa</td>
					<td>$r[jumlahsiswa] Orang Siswa</td>
			        <td><center>
						<a class='btn btn-primary' title='Tampilkan Siswa' href=?module=raport&act=tampilsiswa&id=$r[kode_kelas]><i class='fa fa-search'></i> Tampilkan Siswa</a>
					</td></tr>
				</div>";
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
						<th></th>
						<th style='text-align:center;'>Action</th>
				  	</tr>";
	    
		    $tampil = mysql_query("SELECT * FROM tbl_siswa where kode_kelas='$_GET[id]' ORDER BY nipd ASC");
			$no = 1;
			$thns = date("Y");
		    while($r=mysql_fetch_array($tampil)){
			  
				echo "<tr bgcolor=$warna>
						<td>$no</td>
						<td style='color:red'>$r[nipd]</td>
						<td>$r[nama_siswa]</td>
						<td>$r[jenis_kelamin]</td>
						<td>$r[tempat_lahir]</td>
						<td>$r[tanggal_lahir]</td>
						<form target='_BLANK' action='print_raport.php?id=$_GET[id]' method='GET'>
						<td style='width:270px'><input type='hidden' name='nipd' value='$r[nipd]'>
					  		  <select style='width:150px; margin:0px' name='semester' class='form-control'>
					  		  	<option value='' selected>- Pilih Semester -</option>
					  		  	<option value='1'>Semester 1</option>
					  		  	<option value='2'>Semester 2</option>
					  		  </select>
					  		  <input style='width:70px; float:right; margin-left:-70px; margin-top:-33px;' type='text' value='$r[kode_kelas]' name='a' class='form-control'>

					  		  <input style='width:70px; float:right; margin-left:-20px; margin-top:-33px;' type='text' value='$thns' name='tahun' class='form-control'>
					  	</td>
						<td><center>
								<Button type='submit' class='btn btn-success' name='raport' value='Cetak Raport'><i class='fa fa-print'></i> Cetak Raport</Button>
							</center>
						</td>
						</form>
					 </tr>";
		      $no++;
		    }				
				
			break;
		}
?>

<br>
<?php include "footer.php"; ?>