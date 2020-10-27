<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Занятие №39</title>
</head>
<body>

<p><b class="T1">Занятие №39. </b><b class="D1">Практика по работе с SQL в PHP. Часть 3.</b></p>
<p><b class="D1">Сделаем возможность добавления нового работника с помощью формы.</b></p>

<?php
error_reporting(E_ALL);

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'test_1';

$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'UTF8'");
?>

<form action="" method="POST">
    <input name="name" required placeholder="Name"><br><br>
    <input name="age" required placeholder="Age"><br><br>
    <input name="salary" required placeholder="Salary"><br><br>
    <input type="submit" name="submit" value="INSERT">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];

    $query = "INSERT INTO `workers` SET `name` = '$name', `age` = '$age', `salary` = '$salary'";
    mysqli_query($link, $query) or die(mysqli_error($link));
}
?>

<p><b class="T1">Добавим код из предыдущего занятия для наглядности отображения в браузере</b></p>


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
    mysqli_close($link);
    ?>
</table>


</body>
</html>