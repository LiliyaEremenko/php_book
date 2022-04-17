<?php
    if (!empty($_POST['text'])) {
        $text = $_POST['text'];
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
        <input type="submit" value="Узнать количество слов и символов">
    </form>
    <p></p>
    <div id="res_1">
        <?php
            if (!empty($_POST['text'])) {
                echo 'Количество символов: ', mb_strlen($text);
            }
        ?>
    </div>
    <div id="res_2">
        <?php
            if (!empty($_POST['text'])) {
                echo 'Количество слов: ', str_word_count($text);
            }
        ?>
    </div>
</body>
</html>