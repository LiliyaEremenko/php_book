<?php
	if (isset($_POST['num'])) {
		$num = $_POST['num'];
		for ($i=1; $i <= $num; $i++) { 
			if ($num % $i == 0) {
				print_r('<p>'.$i.'<p>');
			}
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
		<input type="submit" value="Вывести список делителей">
	</form>
</body>
</html>