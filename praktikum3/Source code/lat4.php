<html>
	<head>
		<title> Data Seleksi </title>
	</head>
	
	<body>
	
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
		Pekerjaan
		<select name="job">
			<option value="Mahasiswa">Mahasiswa
			<option value="ABRI">ABRI
			<option value="PNS">PNS
			<option value="Swasta">Swasta
		</select>
		
		<input type="submit" value= "OK" />
		</form>
	
		<?php
		if (isset ($_GET['job'])) {
			echo $_GET['job'];
		}
		?>
	
	</body>
</html>