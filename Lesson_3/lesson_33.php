<?php
// task 1
setcookie('test', '123');

// task 2
//setcookie('test','',time()); // удаляем куку на текущее время

// task 3
setcookie('enter', '1');
if (isset($_COOKIE['enter'])) {
    setcookie('enter', $_COOKIE['enter'] + 1);
}

// task 4
if (isset($_REQUEST['submit_4'])) {
    $arr = explode('.', $_REQUEST['date']);
    //var_dump($arr);
    $birthday = date('z', mktime(0, 0, 0, $arr[1], $arr[0]));// День ДР от начала года.


}

setcookie('birthday', $birthday);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Занятие №33</title>
</head>
<body>

<p><b class="T1">Занятие №33. </b><b class="D1">Работа с cookie на PHP</b></p>

<p><b class="T1">Задачи для решения:</b></p>

<fieldset>
    <p><b class="T">Task 1. </b><b class="D">По заходу на страницу запишите в куку с именем test текст '123'.
            Затем обновите страницу и выведите содержимое этой куки на экран.</b></p>

    <?php
    echo $_COOKIE['test'];
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 2. </b><b class="D">Выполните</b></p>
    <?php
    echo $_COOKIE['test'];
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 3. </b><b class="D">Сделайте счетчик посещения сайта посетителем.
            Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.</b></p>
    <?php
    echo $_COOKIE['enter'];
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 4. </b><b class="D">Спросите дату рождения пользователя. При следующем
            заходе на сайт напишите сколько дней осталось до его дня рождения. Если сегодня день рождения
            пользователя - поздравьте его!</b></p>

    <form action="" method="post">
        <input name="date" required placeholder="day.month.year"
               value="<?php if (isset($_REQUEST['date'])) echo $_REQUEST['date']; ?>">
        <input type="submit" name="submit_4">
    </form>
    <br>

    <?php
    $today = date('z'); // - номер дня от начала года

    if ($today < $_COOKIE['birthday']) {
        echo $_COOKIE['birthday'] - $today . ' дней до ДР';
    } elseif ($today > $_COOKIE['birthday']) {
        echo 'ДР уже прошел';
    } elseif ($today = $_COOKIE['birthday']) {
        echo 'Happy Birthday!!!';
    }
    ?>
</fieldset>
<br>


</body>
</html>

