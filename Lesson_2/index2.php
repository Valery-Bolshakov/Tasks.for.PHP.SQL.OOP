<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Практика по PHP / Важное / Регулярки</title>
</head>
<body>

<a class="title" href="http://localhost:63342/tasks.for.php.sql.oop/index.php">
    <p><b>Стартовая страница. &#8634;</b> (запуск в IDE)</p></a>
<a class="title" href="http://tasks.for.php.sql.oop/index.php">
    <p><b>Стартовая страница. &#8634;</b> (Open Server)</p></a>
<hr>

<p class="T1"><b>Практика по PHP / Важное / Регулярки:</b></p>
<ul class="Ti">
    <li><b><a href="index2.php?file=lesson_21">
                Занятие №21:</a> Задачи на отработку циклов и функций в PHP</b></li>
    <li><b><a href="index2.php?file=lesson_22">
                Занятие №22:</a> Практика по написанию скриптов в PHP</b><hr></li>
    <li><b><a href="index2.php?file=lesson_23">
                Занятие №23:</a> Работа с HTML из PHP</b></li>
    <li><b><a href="index2.php?file=lesson_24">
                Занятие №24:</a> Работа с GET запросами в PHP</b><hr></li>
    <li><b>Занятие №25: Учебник по регулярным выражениям (задач нет)</b></li>
    <li><b><a href="index2.php?file=lesson_26">
                Занятие №26:</a> Работа с регулярными выражениями на PHP. Глава 1</b></li>
    <li><b><a href="index2.php?file=lesson_27">
                Занятие №27:</a> Работа с регулярными выражениями на PHP. Глава 2</b></li>
    <li><b><a href="index2.php?file=lesson_28">
                Занятие №28:</a> Работа с регулярными выражениями на PHP. Глава 3</b></li>
    <li><b><a href="index2.php?file=lesson_29">
                Занятие №29:</a> Работа с регулярными выражениями на PHP. Глава 4</b></li>
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
