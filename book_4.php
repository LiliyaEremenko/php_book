<?php
	if (isset($_POST['a']) && isset($_POST['b'])) {
		$a = $_POST['a'];
		$b = $_POST['b'];
		for ($i=2; $i <= min($a, $b) ; $i++) { 
			if ($a % $i == 0 && $b % $i == 0) {
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
	<input type="text" placeholder="Введите 1 число" name="a">
	<input type="text" placeholder="Введите 2 число" name="b">
	<input type="submit" value="Вывести общие делители">
	</form>
</body>
</html>