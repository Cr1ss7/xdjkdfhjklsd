<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Adiosito</h1>	
	<form method="POST">
	<input type="password" name="pass" required autocomplete="off">
	<input type="submit" value="XD" name="stop">
	</form>
	<?php
error_reporting(0);
$contra = $_POST['pass'];
if($contra == 1111){
	for($i=1;$i<=3;$i++){
		echo shell_exec("start chrome /incognito https://www.youtube.com/watch?v=Mli3dXlDlcE");
		$i = $i - 1;
	}	
}else if($contra == 0000){
			$i = 4;
		}else
echo '';
	?>
</body>
</html>
