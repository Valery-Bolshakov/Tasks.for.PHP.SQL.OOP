<?php
session_start();
//session_destroy()
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Занятие №32</title>
</head>
<body>


<p><b class="T1">Занятие №32. </b><b class="D1">Работа с сессиями PHP</b></p>

<p><b class="T1">Задачи на сессии PHP:</b></p>

<p><b class="D1"> - Работа с сессиями</b></p>

<fieldset>
    <p><b class="T">Task 1. </b><b class="D">По заходу на страницу запишите в сессию текст 'test'.
            Затем обновите страницу и выведите содержимое сессии на экран.</b></p>
    <?php
    $_SESSION['text'] = 'test';
    var_dump($_SESSION['text']);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 2. </b><b class="D">Пусть у вас есть две страницы сайта. Запишите на первой
            странице что-нибудь в сессию, а затем выведите это при заходе на другую страницу.</b></p>
    <?php
    $_SESSION['name'] = 'username';
    $_SESSION['surname'] = 'surname';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 3. </b><b class="D">Сделайте счетчик обновления страницы пользователем.
            Данные храните в сессии. Скрипт должен выводить на экран количество обновлений.
            При первом заходе на страницу он должен вывести сообщение о том, что вы еще не обновляли страницу.</b></p>
    <?php
    if (!isset($_SESSION['counter'])) {
        echo 'вы еще не обновляли страницу';
        $_SESSION['counter'] = 0;
    } else {
        $_SESSION['counter'] += 1;
        echo 'страница обновлена пользователем: ' . $_SESSION['counter'] . ' раз';
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 4. </b><b class="D">Сделайте две страницы: index.php и test.php.
            При заходе на index.php спросите с помощью формы страну пользователя, запишите ее в сессию
            (форма при этом должна отправится на эту же страницу). Пусть затем пользователь зайдет
            на страницу test.php - выведите там страну пользователя.</b></p>

    <form action="" method="post">
        <input name="country" required placeholder="Введите страну">
        <input type="submit" name="submit">
    </form>
    <?php
    if (isset($_REQUEST['submit'])) {
        $_SESSION['country'] = $_REQUEST['country'];
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 5. </b><b class="D">Запишите в сессию время захода пользователя на сайт.
            При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.</b></p>
    <?php
    if (!isset($_SESSION['first'])) {
        $_SESSION['first'] = time();
    } else {
        $second = time() - $_SESSION['first'];
        echo 'Пользователь зашел на сайт ' . $second . ' секунд назад';
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 6. </b><b class="D">Спросите у пользователя email с помощью формы. Затем сделайте так,
            чтобы на странице test в другой форме (поля: имя, фамилия, пароль, email) при ее открытии поле email было
            автоматически заполнено.</b></p>

    <form>
        <input type="email" name="email" required>
        <input type="submit" name="submit_6">
    </form>

    <?php
    if (isset($_REQUEST['submit_6']))
        $_SESSION['email'] = $_REQUEST['email']
    ?>
</fieldset>
<br>


</body>
</html>

