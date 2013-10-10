<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validasi Login</title>
</head>
<body>
<?php 
	if((@$_POST['Username']=='feliksss') AND (@$_POST['Password']=='feliksss')) { 
		echo 'You are Login as :'.$_POST['Username']; 
		echo '<br><br>Welcome ' . $_POST['Username']; 
	} else { 
		echo "<body><strong>Username dan password tidak cocok!<br></strong></body>"; 
	} 
?> 
</body>
</html>