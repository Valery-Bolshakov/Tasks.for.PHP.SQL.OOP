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
    <li><b>Занятие 37:</b></li>
    <li><b>Занятие 38:</b></li>
    <li><b>Занятие 39:</b></li>
    <li><b>Занятие 40:</b></li>
    <li><b>Занятие 41:</b></li>
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
