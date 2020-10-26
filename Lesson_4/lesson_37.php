<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Занятие №37</title>
</head>
<body>

<p><b class="T1">Занятие №37. </b><b class="D1">Практика по работе с SQL в PHP. Часть 1.</b></p>

<p><b class="D1">Пусть в базе данных есть такая таблица workers:</b></p>

<table border="1" width="250">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Коля</td>
        <td>23</td>
        <td>400</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Вася</td>
        <td>24</td>
        <td>500</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Петя</td>
        <td>25</td>
        <td>600</td>
    </tr>
</table>

<p><b class="T1">Выведем данную таблицу в браузер средствами PHP и HTML</b></p>

<?php

error_reporting(E_ALL);

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'test_1';

$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'UTF8'");


//mysqli_close($link);
/**
 * Создание таблицы в нашей БД:
 */
/*$query = "CREATE TABLE `test_1`.`workers` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL ,
 `age` INT(11) NOT NULL , `salary` INT(11) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
mysqli_query($link, $query) or die(mysqli_error($link));

$query = "INSERT INTO `workers` (`name`, `age`, `salary`) VALUES ('Коля', 23, 300), ('Вася', 24, 400), ('Петя', 25, 500)";
mysqli_query($link, $query) or die(mysqli_error($link));*/
?>

<table border="1" width="250">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
    </tr>
    <?php
    $query = "SELECT * FROM `workers`";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $worker = mysqli_fetch_assoc($result); $data[] = $worker);

    /*echo '<pre>';
    print_r($data);
    echo '</pre>';*/

    $result_table = '';

    foreach ($data as $elem) {
        $result_table .= '<tr>';
        $result_table .= '<td>' . $elem['id'] . '</td>';
        $result_table .= '<td>' . $elem['name'] . '</td>';
        $result_table .= '<td>' . $elem['age'] . '</td>';
        $result_table .= '<td>' . $elem['salary'] . '</td>';
        $result_table .= '</tr>';
    }

    echo $result_table;
    ?>
</table>


























</body>
</html>