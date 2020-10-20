<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="http://tasks.for.php.sql.oop/index.php"><h3>Стартовая страница.</h3></a>
<hr>

<h3>Задачи по ООП и MVC на PHP:</h3>
<ul>
    <li><a href="index3.php?file=lesson_2">
            Занятие №2. Работа со свойствами объектов</a></li>
    <li><a href="index3.php?file=lesson_3">
            Занятие №3. Работа с методами объектов</a></li>
    <li><a href="index3.php?file=lesson_4">
            Занятие №4. Обращение к свойствам класса через $this</a></li>
    <li><a href="index3.php?file=lesson_5">
            Занятие №5. Обращение к методам через $this</a></li>
    <li><a href="index3.php?file=lesson_6">
            Занятие №6. Модификаторы доступа public и private</a></li>
    <li><a href="index3.php?file=lesson_7">
            Занятие №7. Конструктор объекта</a></li>
    <li><a href="index3.php?file=lesson_8">
            Занятие №8. Работа с геттерами и сеттерами</a></li>
    <li><a href="index3.php?file=lesson_9">
            Занятие №9. Свойства только для чтения</a></li>
    <li><a href="index3.php?file=lesson_10">
            Занятие №10. Хранение классов в отдельных файлах</a></li>
    <li><a href="index3.php?file=lesson_11">
            Занятие №11. </a></li>
    <li><a href="index3.php?file=lesson_12">
            Занятие №12. </a></li>
    <li><a href="index3.php?file=lesson_13">
            Занятие №13. </a></li>
    <li><a href="index3.php?file=lesson_14">
            Занятие №14. </a></li>
    <li><a href="index3.php?file=lesson_15">
            Занятие №15. </a></li>
    <li><a href="index3.php?file=lesson_16">
            Занятие №16. </a></li>
    <li><a href="index3.php?file=lesson_17">
            Занятие №17. </a></li>
    <li><a href="index3.php?file=lesson_18">
            Занятие №18. </a></li>
    <li><a href="index3.php?file=lesson_19">
            Занятие №19. </a></li>
    <li><a href="index3.php?file=lesson_20">
            Занятие №20. </a></li>

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
