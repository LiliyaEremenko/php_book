<?php
	if (isset($_POST['degree'])) {
		$degree = (int)$_POST['degree'];
		$degree_far = $degree*9/5+32;
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
		<input type="text" name="degree">
		<input type="submit" value="Перевести">
	</form>
	<div id="res">
	<?php
	if (isset($_POST['degree']) && !empty($_POST['degree'])) {
		echo $degree_far;
	}
	?>
	</div>
</body>
</html>
