<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Занятие №38</title>
</head>
<body>

<p><b class="T1">Занятие №38. </b><b class="D1">Практика по работе с SQL в PHP. Часть 2.</b></p>

<table border="1" width="300">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
        <th>del</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Коля</td>
        <td>23</td>
        <td>300</td>
        <td><a href="?del=1">удалить</a></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Вася</td>
        <td>24</td>
        <td>400</td>
        <td><a href="?del=2">удалить</a></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Петя</td>
        <td>25</td>
        <td>500</td>
        <td><a href="?del=3">удалить</a></td>
    </tr>
</table>

<p><b class="D1">Модифицируем таблицу , добавив возможность удаления работников.</b></p>

<?php

error_reporting(E_ALL);

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'test_1';

$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'UTF8'");

/*$query = "INSERT INTO `workers` (`name`, `age`, `salary`, `del`) VALUES ('Коля', 23, 300, ''),
                                                              ('Вася', 24, 400, ''), ('Петя', 25, 500, '')";
mysqli_query($link, $query) or die(mysqli_error($link));*/ //Создание таблицы


/*$query = "ALTER TABLE `workers` ADD `del` VARCHAR(225) NOT NULL AFTER `salary`"; //добавим возможность удаления
mysqli_query($link, $query) or die(mysqli_error($link));*/

//mysqli_close($link);

?>

<table border="1" width="300">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
        <th>del</th>
    </tr>
    <?php

    // Удаление по id
    if (isset($_GET['del'])) {
        $del = $_GET['del'];
        $query = "DELETE FROM `workers` WHERE `id` = $del";
        mysqli_query($link, $query) or die(mysqli_error($link));
    }

    $query = "SELECT * FROM `workers`";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $worker = mysqli_fetch_assoc($result); $data[] = $worker) ;

    $result_table = '';
    foreach ($data as $item) {
        $result_table .= '<tr>';

        $result_table .= '<td>' . $item['id'] . '</td>';
        $result_table .= '<td>' . $item['name'] . '</td>';
        $result_table .= '<td>' . $item['age'] . '</td>';
        $result_table .= '<td>' . $item['salary'] . '</td>';
        $result_table .= '<td><a href="?del=' . $item['id'] . '">удалить</a></td>';

        $result_table .= '</tr>';
    }

    echo $result_table;
    ?>
</table>


</body>
</html>