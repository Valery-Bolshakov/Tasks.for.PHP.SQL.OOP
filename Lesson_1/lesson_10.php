
<h3>Занятие №10. Основы рыботы с формами в PHP:</h3>

<?php
//isset — Определяет, была ли установлена переменная значением, отличным от NULL
//empty — Проверяет, пуста ли переменная
?>
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
<?php
echo 'Пример формы: <br><br>';
//Если город пустой - покажем форму
if (empty($_REQUEST['city'])) {
    ?>
    <form action="" method="POST">
        <input name="city" required type="text" placeholder="Введите город"><br><br>
        <input type="submit">
    </form>
    <?php
}

//Если форма была отправлена и город не пустой:
if (!empty($_REQUEST['city'])) {
    $city = strip_tags($_REQUEST['city']);
    echo 'Ваш город: ' . $city;
}
echo '<hr><br>';

echo 'Task 1. Спросите имя пользователя с помощью формы.', "<br>";
echo 'Task 2. Спросите у пользователя имя, возраст, а также попросите его ввести сообщение
(его сделайте в textarea).
Позаботьтесь о том, чтобы пользователь не мог вводить теги', "<br>";
echo 'Task 3. Убрать форму если она была отправлена', "<br><br>";

if (empty($_REQUEST['name'])) {
    ?>
    <form action="" method="POST">
        <input name="name" required type="text" placeholder="Введите Имя"><br><br>
        <input name="age" required type="text" placeholder="Ведите возраст"><br><br>
        <textarea name="message"></textarea><br><br>
        <input type="submit">
    </form>
    <?php
}

if (!empty($_REQUEST['name'])) {
    $name = strip_tags($_REQUEST['name']);
    $age = strip_tags($_REQUEST['age']);
    $message = strip_tags($_REQUEST['message']);
    echo 'Привет, ' . $name . ', ' . $age . ' лет.', '<br>';
    echo 'Твоё сообщение: ' . $message;
}
echo '<hr><br>';


echo 'Task 4. Спросите логин и пароль(звездочками) Сравните их с $login и $pass,
хранящихся в файле, обрезать концевые пробелы', "<br><br>";
$login = 'User';
$pass = '0987';
?>

<form action="" method="post">
    <input name="login" type="text" required placeholder="login"><br><br>
    <input name="pass" type="password" required placeholder="password"><br><br>
    <input type="submit" name="submit">
</form>

<?php
if (isset($_REQUEST['submit'])) {
    $login_1 = trim($_REQUEST['login']);
    $pass_1 = trim($_REQUEST['pass']);

    if (($login == $login_1) and ($pass == $pass_1)) {
        echo 'Доступ разрешен.';
    } else {
        echo 'Данные не совпали';
    }
}
echo '<hr><br>';


echo 'Task 5. Спросите имя пользователя. Сделайте так, чтобы
после отправки формы значения ее полей не пропадали', "<br>";
echo 'Task 6. Дополнить предыдущее тегом textarea', "<br><br>";

if (isset($_REQUEST['submit_1'])) {
    $name = trim(strip_tags($_REQUEST['login']));
    $message = strip_tags($_REQUEST['message']);
} ?>

<form action="" method="POST">
    <input type="text" name="login" placeholder="User name" required
           value="<?php if (!empty($name)) {
               echo $name;
           } ?>"><br><br>
    <textarea name="message" placeholder="You message"><?php if (isset($message)) {
            echo $message;
        } ?></textarea><br><br>
    <input type="submit" name="submit_1" value="Отправить форму">
</form>

<?php
echo '<hr><br>';


echo 'Скомбинированная задача: Заготовка формы регистрации', "<br><br>";
/**
 * - Спросите логин, пароль(звездочками) и
 * подтвержление пароля(звездочками).
 * - Спросите имя фамилию и автобиографию. Удалите теги.
 * - Сделайте 3 поля ввода, в которые вводятся день, месяц и год.Выведите эти данные на экран,дату
 * в формате "2019-08-26".
 * - Сделайте 5 полей ввода, в которые вводятся числа. Выведите на экран max and min из них.
 *
 * - Проверьте,что пароль > 5ти и < 9ти символов, а логин > 3х и < 12-ти.
 * Если все правильно - выведите сообщение "успешно зареган".
 * - Сравните пароли(если совпадают - выведите сообщение об этом.)
 */
?>

<form action="" method="post">
    <input type="text" name="login" required placeholder="Enter login"
           value="<?php if (!empty($_REQUEST['login'])) {
               echo $login;
           } ?>"><br><br>
    <input type="password" name="pass_1" required placeholder="Password"><br><br>
    <input type="password" name="pass_2" required placeholder="Confirm the password"><br><br>
    <input type="text" name="name" required placeholder="Name"><br><br>
    <input type="text" name="surname" required placeholder="Surname"><br><br>
    <textarea name="message" placeholder="Your autobiography"><?php if (isset($message)) {
            echo $message;
        } ?></textarea><br><br>
    <input type="date" name="date"> Your date of Birth <br><br>
    <input type="text" name="number_1" placeholder="insert the number 0 ~ 99"><br>
    <input type="text" name="number_2" placeholder="insert the number 0 ~ 99"><br>
    <input type="text" name="number_3" placeholder="insert the number 0 ~ 99"><br>
    <input type="text" name="number_4" placeholder="insert the number 0 ~ 99"><br>
    <input type="text" name="number_5" placeholder="insert the number 0 ~ 99"><br><br>
    <input type="submit" name="submit_2" value="Отправить форму"><br><br>
</form>

<?php
if (isset($_REQUEST['submit_2'])) {
    $login = strip_tags($_REQUEST['login']);
    $login_1 = strlen($login);
    $pass_1 = strip_tags($_REQUEST['pass_1']);
    $pass_2 = strip_tags($_REQUEST['pass_2']);
    $message = strip_tags($_REQUEST['message']);
    if (($login_1 > 3 and $login_1 < 12) and ((strlen($pass_1) > 5) and (strlen($pass_1) < 9))) {
        if ($pass_1 === $pass_2) {
            echo 'Пароли совпали. <br> Регистрация прошла успешно! <br>';
            echo $_REQUEST['date'], '<br>';
        } else {
            echo 'Пароли не совпали', '<br>';
        }
    }
    $number[] = $_REQUEST['number_1'];
    $number[] = $_REQUEST['number_2'];
    $number[] = $_REQUEST['number_3'];
    $number[] = $_REQUEST['number_4'];
    $number[] = $_REQUEST['number_5'];
    sort($number);
    echo 'min - ' . array_shift($number) . ', max - ' . array_pop($number);
}
?>


</body>
</html>













