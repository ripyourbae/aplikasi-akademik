<?php include "header.php"; ?>
<?php
	session_start();
    error_reporting(0);

	echo "
	<div style='padding:1% 6% 0 5%;' class='row-fluid'>
        <div class='col-lg-12 text-left'>
	        <div class='panel panel-default'>
	            <div class='panel-body'>
					<div class='alert alert-info'>Jadwal Pelajaran</div><hr>";

		if ($_POST[semester] != '' AND $_POST[tahun] != ''){
			$nilai = $_POST[semester];
			$text  = 'Semester '.$_POST[semester];
			$thns = $_POST[tahun];
		}elseif ($_POST[semester] == '' AND $_POST[tahun] != ''){
			$thns = $_POST[tahun];
			$nilai = '';
			$text  = 'Semua';
		}else{
			$thns = date("Y");
			$nilai = '';
			$text  = 'Semua';
		}
		echo "
		<form target='_BLANK' action='print_jadwal.php' method='POST'>
			<select style='width:120px; margin:0px float:right; margin-right:10px; margin-top:20px;' name='semester' class='form-control'>
			  	<option value='$nilai' selected>$text</option>
			  	<option value='1'>Semester 1</option>
			  	<option value='2'>Semester 2</option>
			</select>
			
			<input style='width:70px; margin:0px float:right; margin-left:130px; margin-top:-35px;' type='text' value='$thns' name='tahun' class='form-control'>
			<a style='margin:0px float:right; margin-left:210px; margin-top:-30px;' class='btn btn-success' target='_BLANK' href='print_jadwal.php?semester=$nilai&tahun=$thns&a=$_SESSION[kodekelas]'><i class='fa fa-print'> Print Jadwal </i></a>
		</form>"; 
?>
			</div>
	    </div>
	</div>
    </div>

<?php include "footer.php"; ?>