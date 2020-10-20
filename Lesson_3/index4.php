<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Работа с htaccess / Файлы, папки / Сессии и куки</title>
</head>
<body>

<a class="title" href="http://localhost:63342/tasks.for.php.sql.oop/index.php">
    <p><b>Стартовая страница. &#8634;</b> (запуск в IDE)</p></a>
<a class="title" href="http://tasks.for.php.sql.oop/index.php">
    <p><b>Стартовая страница. &#8634;</b> (Open Server)</p></a>
<hr>

<p class="T1"><b>Работа с htaccess / Файлы, папки / Сессии и куки:</b></p>

<ul class="Ti">
    <li><b><!--<a href="index4.php?file=lesson_30/lesson_30"></a>-->
                Занятие №30: Работа с htaccess в PHP</b><hr></li>
    <li><b><a href="index4.php?file=lesson_31/lesson_31">
                Занятие №31:</a> Работа с файлами и папками в PHP</b><hr></li>
    <li><b><a href="index4.php?file=lesson_32">
                Занятие №32:</a> Работа с сессиями в PHP</b></li>
    <li><b><a href="index4.php?file=lesson_33">
                Занятие №33:</a> Работа с cookie в PHP</b></li>
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
