<?php
    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        $a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
        $max = max($a, $b, $c);
        switch ($max) {
            case $a:
                if ($max*$max == $b*$b + $c*$c) {
                    echo 'YES';
                }
                else {
                    echo 'NO';
                }
            case $b:
                if ($max*$max == $a*$a + $c*$c) {
                    echo 'YES';
                }
                else {
                    echo 'NO';
                }
            case $c:
                if ($max*$max == $a*$a + $b*$b) {
                    echo 'YES';
                }
                else {
                    echo 'NO';
                }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a" placeholder="Введите первое число...">
        <input type="text" name="b" placeholder="Введите второе число...">
        <input type="text" name="c" placeholder="Введите третье число...">
        <input type="submit" value="Проверить">
    </form>
</body>
</html>