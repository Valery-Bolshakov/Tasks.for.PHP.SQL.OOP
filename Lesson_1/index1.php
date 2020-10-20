<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <title>Задачи по основам PHP</title>
</head>
<body>

<p class="T1"><b>Задачи по основам PHP:</b></p>
<ul class="Ti">
    <li><b><a href="index1.php?file=lesson_2">
            Занятие №2:</a> Основы языка PHP</b></li>
    <li><b><a href="index1.php?file=lesson_3">
            Занятие №3:</a> Основы работы с массивами</b></li>
    <li><b><a href="index1.php?file=lesson_4">
            Занятие №4:</a> Работа с конструкциями if-else и switch-case</b></li>
    <li><b><a href="index1.php?file=lesson_5">
            Занятие №5:</a> Работа с циклами foreach, for, while</b></li>
    <li><b><a href="index1.php?file=lesson_6">
            Занятие №6:</a> Работа с математическими функциями</b></li>
    <li><b><a href="index1.php?file=lesson_7">
            Занятие №7:</a> Работа со строковыми функциями</b></li>
    <li><b><a href="index1.php?file=lesson_8">
            Занятие №8:</a> Функции работы с массивами</b></li>
    <li><b><a href="index1.php?file=lesson_9">
            Занятие №9:</a> Практика на комбинации стандартных функций в PHP</b></li>
    <li><b><a href="index1.php?file=lesson_10">
            Занятие №10:</a> Основы рыботы с формами в PHP</b></li>
    <li><b><a href="index1.php?file=lesson_11">
            Занятие №11:</a> Работа с датами в PHP</b></li>
    <li><b><a href="index1.php?file=lesson_12">
            Занятие №12:</a> Основы работы с пользовательскими функциями</b></li>
    <li><b><a href="index1.php?file=lesson_13">
            Занятие №13:</a> Приёмы работы с флагами</b></li>
    <li><b><a href="index1.php?file=lesson_14">
            Занятие №14:</a> Приёмы работы с логическими значениями</b></li>
    <li><b><a href="index1.php?file=lesson_15">
            Занятие №15:</a> Приёмы работы с циклами</b></li>
    <li><b><a href="index1.php?file=lesson_16">
            Занятие №16:</a> Приёмы работы с массивами</b></li>
    <li><b><a href="index1.php?file=lesson_17">
            Занятие №17:</a> Правильное использование пользовательских функций</b></li>
    <li><b><a href="index1.php?file=lesson_18">
            Занятие №18:</a> Практика на пользовательские функции</b></li>
    <li><b><a href="index1.php?file=lesson_19">
            Занятие №19:</a> Продвинутая работа с пользовательскими фунциями</b></li>
    <li><b><a href="index1.php?file=lesson_20">
            Занятие №20:</a> Продвинутая работа с формами</b></li>
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



