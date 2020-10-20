<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Занятие №36</title>
</head>
<body>

<p><b class="T1">Занятие №36. </b><b class="D1">Команды ORDER BY, LIMIT, COUNT, LIKE в SQL</b></p>

<p><b class="T1">Задачи для решения:</b></p>
<p><b class="D1"> - На LIMIT</b></p>

<?php

error_reporting(E_ALL); // Вывод php ошибок в винде

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link)); //устанавливаем соединение и
// 'or die' - это вывод ошибок sql
mysqli_query($link, "SET NAMES 'utf8'"); // задаем кодировку(без этой строчки кирилица плохо отображается)


//mysqli_close($link); // закрытие соединения

/** СТРУКТУРА ТАБЛИЦЫ */
/*$query = "INSERT INTO workers (name, age, salary) VALUES ('Дима', 23, 400), ('Петя', 25, 500), ('Вася', 23, 500),
                                           ('Коля', 30, 1000), ('Иван', 27, 500), ('Кирилл', 28, 1000)";
$result = mysqli_query($link, $query) or die(mysqli_error($link));*/
?>

<fieldset>
    <p><b class="T">Task 1. </b><b class="D">Из таблицы workers достаньте первые 5 записей.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE id>0 LIMIT 5";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user) ;


    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 2. </b><b class="D">Из таблицы workers достаньте записи со второй, 3 штуки.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE id>0 LIMIT 1, 3";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user);

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>


<p><b class="D1"> - На ORDER BY</b></p>

<fieldset>
    <p><b class="T">Task 3. </b><b class="D">Из таблицы workers достаньте всех работников и
            отсортируйте их по возрастанию зарплаты.</b></p>
    <?php
    //SELECT * FROM имя_таблицы WHERE условие ORDER BY поле_для_сортировки

    $query = "SELECT * FROM workers WHERE id>0 ORDER BY salary";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user);

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 4. </b><b class="D">Из таблицы workers достаньте всех работников и
            отсортируйте их по убыванию зарплаты.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE id>0 ORDER BY salary DESC";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user);

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 5. </b><b class="D">Из таблицы workers достаньте работников со второго
            по шестой и отсортируйте их по возрастанию возраста.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE id>0 ORDER BY age LIMIT 1, 5";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user);

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>


<p><b class="D1"> - На COUNT</b></p>

<fieldset>
    <p><b class="T">Task 6. </b><b class="D">В таблице workers подсчитайте всех работников.</b></p>
    <?php
    $query = "SELECT COUNT(*) as count_working FROM workers";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user);

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 7. </b><b class="D">В таблице workers подсчитайте всех работников c зарплатой 500$.</b></p>
    <?php
    $query = "SELECT COUNT(*) as count FROM workers WHERE salary=500";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user);

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>


<p><b class="D1"> - На LIKE</b></p>

<fieldset>
    <p><b class="T">Task 8. </b><b class="D">В таблице pages найти строки, в которых фамилия автора
            заканчивается на "ов".</b></p>
    <?php
    $query = "SELECT * FROM pages WHERE author LIKE '%ов'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user);

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 9. </b><b class="D">В таблице pages найти строки, в которых есть слово "элемент"
            (искать только по колонке article).</b></p>
    <?php
    $query = "SELECT * FROM pages WHERE article LIKE '%элемент%'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user);

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 10. </b><b class="D">В таблице workers найти строки, в которых возраст
            работника начинается с числа 3, а далее идет только одна цифра.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE age LIKE '3_'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user);

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 11. </b><b class="D">В таблице workers найти строки,
            в которых имя работника заканчивается на "я".</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE name LIKE '%я'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user);

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>


</body>
</html>

