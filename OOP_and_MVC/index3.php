<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>

<p class="T1"><b>Задачи по ООП и MVC на PHP:</b></p>
<ul class="Ti">
    <li><b><a href="index3.php?file=lesson_2">
            Занятие №2:</a> Работа со свойствами объектов</b></li>
    <li><b><a href="index3.php?file=lesson_3">
            Занятие №3:</a> Работа с методами объектов</b></li>
    <li><b><a href="index3.php?file=lesson_4">
            Занятие №4:</a> Обращение к свойствам класса через $this</b></li>
    <li><b><a href="index3.php?file=lesson_5">
            Занятие №5:</a> Обращение к методам через $this</b></li>
    <li><b><a href="index3.php?file=lesson_6">
            Занятие №6:</a> Модификаторы доступа public и private</b></li>
    <li><b><a href="index3.php?file=lesson_7">
            Занятие №7:</a> Конструктор объекта</b></li>
    <li><b><a href="index3.php?file=lesson_8">
            Занятие №8:</a> Работа с геттерами и сеттерами</b></li>
    <li><b><a href="index3.php?file=lesson_9">
            Занятие №9:</a> Свойства только для чтения</b></li>
    <li><b><a href="index3.php?file=lesson_10">
            Занятие №10:</a> Хранение классов в отдельных файлах</b></li>
    <li><b><a href="index3.php?file=lesson_11">
            Занятие №11: </b></li>
    <li><b><a href="index3.php?file=lesson_12">
            Занятие №12: </b></li>
    <li><b><a href="index3.php?file=lesson_13">
            Занятие №13: </b></li>
    <li><b><a href="index3.php?file=lesson_14">
            Занятие №14: </b></li>
    <li><b><a href="index3.php?file=lesson_15">
            Занятие №15: </b></li>
    <li><b><a href="index3.php?file=lesson_16">
            Занятие №16: </b></li>
    <li><b><a href="index3.php?file=lesson_17">
            Занятие №17: </b></li>
    <li><b><a href="index3.php?file=lesson_18">
            Занятие №18: </b></li>
    <li><b><a href="index3.php?file=lesson_19">
            Занятие №19: </b></li>
    <li><b><a href="index3.php?file=lesson_20">
            Занятие №20: </b></li>

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
