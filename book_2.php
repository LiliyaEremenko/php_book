<?php
	if (isset($_POST['num'])){
		$res = 1;
		for ($i=1; $i <= $_POST['num']; $i++) { 
			$res = $res*$i;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="num" placeholder="Введите число">
		<input type="submit" value="Вычислить факториал">
	</form>
	<?php
	if (isset($_POST['num'])&&!empty($_POST['num'])){
		echo $res;
	}
?>
</body>
</html>