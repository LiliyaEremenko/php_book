<?php
	header('Content-type: text/html; charset=utf-8');
	if (isset($_POST['x'])&& isset($_POST['y']) && isset($_POST['oper'])){
		$x = (int)$_POST['x'];
		$y = (int)$_POST['y'];
		$oper = $_POST['oper'];
		$z = 0;
		switch ($oper) {
			case '+':
				$z = $x + $y;
				break;
			case '-':
				$z = $x - $y;
				break;
			case '*':
				$z = $x * $y;
				break;
			case '/':
				$z = $x / $y;
				break;
			default:
				$z = 'error';
				break;
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
	<form action="index_1.php" method="POST">
	<span class="text">x: </span><input type="text" name="x"><br>
	<span class="text">y: </span><input type="text" name="y"><br>
	<select name="oper">
		<option disabled>Выберите операцию</option>
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<input type="submit" value="Ok">
	</form>
	<div id="res">
		<?php
			if (isset($_POST['x'])&& isset($_POST['y']) && isset($_POST['oper'])) {
				echo $z;
			}
		?>
	</div>
</body>
</html>