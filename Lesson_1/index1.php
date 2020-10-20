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

<a href="http://tasks.for.php.sql.oop/index.php"><h3>Стартовая страница</h3></a>
<hr>


<h3>Задачи по основам PHP:</h3>
<ul>
    <li><a href="index1.php?file=test_page">
            Тестовая страница</a></li>
    <li><a href="index1.php?file=lesson_2">
            Занятие №2. Основы языка PHP</a></li>
    <li><a href="index1.php?file=lesson_3">
            Занятие №3. Основы работы с массивами</a></li>
    <li><a href="index1.php?file=lesson_4">
            Занятие №4. Работа с конструкциями if-else и switch-case</a></li>
    <li><a href="index1.php?file=lesson_5">
            Занятие №5. Работа с циклами foreach, for, while</a></li>
    <li><a href="index1.php?file=lesson_6">
            Занятие №6. Работа с математическими функциями</a></li>
    <li><a href="index1.php?file=lesson_7">
            Занятие №7. Работа со строковыми функциями</a></li>
    <li><a href="index1.php?file=lesson_8">
            Занятие №8. Функции работы с массивами</a></li>
    <li><a href="index1.php?file=lesson_9">
            Занятие №9. Практика на комбинации стандартных функций в PHP</a></li>
    <li><a href="index1.php?file=lesson_10">
            Занятие №10. Основы рыботы с формами в PHP</a></li>
    <li><a href="index1.php?file=lesson_11">
            Занятие №11. Работа с датами в PHP</a></li>
    <li><a href="index1.php?file=lesson_12">
            Занятие №12. Основы работы с пользовательскими функциями</a></li>
    <li><a href="index1.php?file=lesson_13">
            Занятие №13. Приёмы работы с флагами</a></li>
    <li><a href="index1.php?file=lesson_14">
            Занятие №14. Приёмы работы с логическими значениями</a></li>
    <li><a href="index1.php?file=lesson_15">
            Занятие №15. Приёмы работы с циклами</a></li>
    <li><a href="index1.php?file=lesson_16">
            Занятие №16. Приёмы работы с массивами</a></li>
    <li><a href="index1.php?file=lesson_17">
            Занятие №17. Правильное использование пользовательских функций</a></li>
    <li><a href="index1.php?file=lesson_18">
            Занятие №18. Практика на пользовательские функции</a></li>
    <li><a href="index1.php?file=lesson_19">
            Занятие №19. Продвинутая работа с пользовательскими фунциями</a></li>
    <li><a href="index1.php?file=lesson_20">
            Занятие №20. Продвинутая работа с формами</a></li>
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



