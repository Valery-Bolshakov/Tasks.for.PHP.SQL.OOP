<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Работа с базами данных SQL / Практика по работе с SQL:</title>
</head>
<body>

<p class="T1"><b>Работа с базами данных SQL / Практика по работе с SQL:</b></p>
<ul class="Ti">
    <li><b>Занятие №34: Основы работы с базами данных в PHP</b></li>
    <li><b><a href="index5.php?file=lesson_35">
                Занятие №35:</a> Команды SELECT, INSERT, DELETE, UPDATE</b></li>
    <li><b><a href="index5.php?file=lesson_36">
                Занятие №36:</a> Команды ORDER BY, LIMIT, COUNT, LIKE в SQL</b><hr></li>
    <li><b><a href="index5.php?file=lesson_37">
                Занятие №37:</a> Практика по работе с SQL в PHP. Часть 1.</b><hr></li>
    <li><b><a href="index5.php?file=lesson_38">
                Занятие №38:</a> Практика по работе с SQL в PHP. Часть 2.</b><hr></li>
    <li><b><a href="index5.php?file=lesson_39">
                Занятие №39:</a> Практика по работе с SQL в PHP. Часть 3.</b><hr></li>
    <li><b><a href="index5.php?file=lesson_40">
                Занятие №40:</a> Практика по работе с SQL в PHP. Часть 4.</b><hr></li>
    <li><b><a href="index5.php?file=lesson_41">
                Занятие №41:</a> Практика по работе с SQL в PHP. Часть 5.</b><hr></li>
    <li><b>Занятие 42:</b></li>
</ul>


</body>
</html>

<?php
echo "<br><hr>";

if (!empty($_REQUEST['file'])) {
    $file = $_REQUEST['file'];
    include_once "$file.php";
}

?>
