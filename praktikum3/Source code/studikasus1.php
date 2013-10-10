<!DOCTYPE html>
<html>
<head><title>Data Seleksi</title></head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method ="post"> <!--form ditangani oleh script atau file ini dengan metode POST-->
Pekerjaan
<select name="job">
	<!--option Mahasiswa-->
	<option value="Mahasiswa" 
		
	<?php
	if (@$_POST['job'] == 'Mahasiswa') { // memeriksa apakah form select 'job' yang terpilih memiliki value 'Mahasiswa'
	echo 'selected="selected"';	
	}
	?> 
	>Mahasiswa
	<!--Preselected yang pertama kali dipilih adalah ABRI-->
	<option value="Dosen" 
	<?php
				if(@$_POST['job'] == "Dosen" or !isset($_POST['job'])){ // memeriksa apakah form select 'job' yang terpilih memiliki value 'Dosen'
					echo 'selected="selected"'; //jika ya, maka setelah submit maka option ABRI yang akan ditampilkan di dropdown
				}
	?>
	>Dosen
	
	<!--Preselected yang pertama kali dipilih adalah PNS-->
	<option value="Guru" 
	<?php
				if(@$_POST['job'] == "Guru"){ // memeriksa apakah form select 'job' yang terpilih memiliki value 'Guru'
					echo 'selected="selected"'; //jika ya, maka setelah submit maka option PNS yang akan ditampilkan di dropdown
				}
	?>
	>Guru
	<!--Submit button-->
	<option value="Pelajar" 
	<?php
				if(@$_POST['job'] == "Pelajar"){ // memeriksa apakah form select 'job' yang terpilih memiliki value 'Pelajar'
					echo 'selected="selected"'; //jika ya, maka setelah submit maka option Swasta yang akan ditampilkan di dropdown
				}
	?>
	>Pelajar
</select> 
<input type="submit" value="OK"/> <!--Submit button-->
</form>

<?php
if (isset($_POST['job'])) { //jika form select job ada yang terpilih maka jalankan statement
	echo  $_POST['job']; // statement menampilkan string 'Hello, (disertai string yang dipilih di text field)
}

?>


</body>
</html>