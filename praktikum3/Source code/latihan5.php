<!DOCTYPE html>
<html>
<head><title>Data Checkbox</title></head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method ="get"> 
Hobby <br />
<input type="checkbox" name="hobby[]" value="Membaca" />Membaca 
<input type="checkbox" name="hobby[]" value="Olahraga" />Olahraga
<input type="checkbox" name="hobby[]" value="Menyanyi">Menyanyi <br />

<br/>

<input type="submit" value="OK"/> 

</form>
<br />

<?php
if (isset($_GET['hobby'])) { 
	foreach ($_GET['hobby'] as $key => $val){
	echo $key . ' -> ' .$val . ' <br />'; 
}}

?>


</body>
</html>