<?php
    if (!empty($_POST['text'])) {
        $text = $_POST['text'];
        $len = mb_strlen($text);
        foreach (count_chars($text, 1) as $i => $val) {
            print_r(chr($i).' = '.round(($val/$len*100), 1).' % <br>');
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
        <textarea name="text" cols="50" rows="10"></textarea>
        <p></p>
        <input type="submit" value="Узнать процентное содержание символов...">
    </form>
</body>
</html>