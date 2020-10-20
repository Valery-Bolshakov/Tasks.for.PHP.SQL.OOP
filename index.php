<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Задачи по PHP, SQL и ООП</title>
</head>
<body>

<p class="D"><b>Все задачи смотрел на данном сайте - <a
                href="http://old.code.mu/tasks/php/" target="_blank">http://code.mu/</a></b></p>
<hr>

<p class="T1"><b>Темы задач сгруппировал в следующие разделы:</b></p>
<ul class="Ti">
    <li><b>Задачи по основам PHP: <a
                    target="_blank" href="Lesson_1/index1.php">Lesson_1</a></b></li>
    <li><b>Практика по PHP / Важное / Регулярки: <a
                    target="_blank" href="Lesson_2/index2.php">Lesson_2</a></b></li>
    <li><b>Работа с htaccess / Файлы, папки / Сессии и куки: <a
                    target="_blank" href="Lesson_3/index4.php">Lesson_3</a></b></li>
    <li><b>Работа с базами данных SQL / Практика по работе с SQL: <a
                    target="_blank" href="Lesson_4/index5.php">Lesson_4</a></b></li>
    <li><b>Практика / Движок PHP / Продвинутая работа с БД SQL: <!--<a
                    target="_blank" href="Lesson_5/index6.php">Lesson_5</a>--></b></li>
    <li><b>Аутентификация / Продвинутая практика PHP: <!--<a
                    target="_blank" href="Lesson_6/index7.php">Lesson_6</a>--></b></li>
    <li><b>Задачи по ООП и MVC на PHP: <a
                    target="_blank" href="OOP_and_MVC/index3.php">OOP_and_MVC</a></b></li>
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
