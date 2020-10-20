<?php
/*isset — Определяет, была ли установлена переменная значением, отличным от NULL
empty — Проверяет, пуста ли переменная
&nbsp; - Cпецсимвол HTML "Неразрывный пробел"
$months = [1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
$week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];

< → &lt;
> → &gt;
& → &amp;
" → &quot;
` → &#x60;
*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Занятие №24</title>
</head>
<body>

<p><b class="T1">Занятие №24. </b><b class="D1">Работа с GET запросами в PHP</b></p>

<p><b class="T1">GET-запросы:</b></p><br>

<fieldset>
    <p><b class="T">Task 1. </b><b class="D">Отправьте с помощью GET-запроса число. Выведите его на экран.</b></p>
    <?php
    echo $_GET['get'];
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 2. </b><b class="D">Отправьте с помощью GET-запроса число. Выведите его на экран
            квадрат этого числа.</b></p>
    <?php
    echo $_GET['get'] * $_GET['get'];
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 3. </b><b class="D">Отправьте с помощью GET-запроса два числа. Выведите его
            на экран сумму этих чисел.</b></p>
    <?php
    echo $_GET['get1'] + $_GET['get2']
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 4. </b><b class="D">Пусть с помощью GET-запроса отправляется число. Оно может быть
            или 1, или 2. Сделайте так, чтобы если передано 1 - на экран вывелось слово 'привет',
            а если 2 - то слово 'пока'.</b></p>
    <?php
    if ($_GET['get'] == 1) {
        echo 'Hi';
    } elseif ($_GET['get'] == 2) {
        echo 'bye';
    } else {
        echo 'enter 1 or 2';
    }
    ?>
</fieldset>
<br>


<p><b class="T1">GET-запросы и массивы:</b></p><br>

<fieldset>
    <p><b class="T">Task 5. </b><b class="D">Дан массив. Сделайте так, чтобы с помощью GET-запроса можно
            было вывести любой элемент этого массива.</b></p>
    <?php
    $arr = ['a', 's', 'd', 'f'];

    if (isset($_GET['arr'])) {
        echo $arr[$_GET['arr']];
    }
    ?>
</fieldset>
<br>


<p><b class="T1">GET-запросы и ссылки:</b></p><br>

<fieldset>
    <p><b class="T">Task 6. </b><b class="D">Сделайте 3 ссылки. Пусть первая передает число 1, вторая - число 2,
            третья - число 3. Сделайте так, чтобы по нажатию на ссылку на экран выводилось ее число.</b></p>

    <a href="?file=lesson_24&href=1">link 1</a>
    <a href="?file=lesson_24&href=2">link 2</a>
    <a href="?file=lesson_24&href=3">link 3</a>
    <br>

    <?php
    if (isset($_GET['href'])) {
        echo $_GET['href'];
    }
    ?>
</fieldset>
<br>


<p><b class="T1">Ссылки и циклы:</b></p><br>

<fieldset>
    <p><b class="T">Task 7. </b><b class="D">Сформируйте в цикле 10 ссылок. Пусть каждая ссылка передает
            свое число. Сделайте так, чтобы по нажатию на ссылку на экран выводилось ее число.</b></p>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<a href=\"?file=lesson_24&href=$i\">link $i</a><br>";
    }

    if (isset($_GET['href'])) {
        echo 'Введено число: ' . $_GET['href'];
    }
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 8. </b><b class="D">Модифицируйте предыдущую задачу так, чтобы каждая ссылка стояла
            в своем абзаце.</b></p>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<p><a href=\"?file=lesson_24&href=$i\">link $i</a></p>";
    }

    if (isset($_GET['href'])) {
        echo 'Введено число: ' . $_GET['href'];
    }
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 9. </b><b class="D">Модифицируйте предыдущую задачу так, чтобы каждая ссылка стояла в
            своем li в теге ul.</b></p>

    <ul>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<li><a href=\"?file=lesson_24&href=$i\">link $i</a></li>";
        }
        ?>
    </ul>

    <?php
    if (isset($_GET['href'])) {
        echo 'Введено число: ' . $_GET['href'];
    }
    ?>
</fieldset>
<br>


<p><b class="T1">Ссылки и массивы:</b></p><br>

<fieldset>
    <p><b class="T">Task 10. </b><b class="D">Дан массив. Сделайте так, чтобы с помощью GET-запроса можно было
            вывести любой элемент этого массива. Для этого вручную сделайте ссылку для каждого элемента массива.
            Переходя любой ссылке мы должны увидеть на экране соответствующий элемент массива.</b></p>

    <?php
    $arr = ['a', 's', 'd', 'f', 'g', 'h', 'j'];

    echo "<a href=\"?file=lesson_24&href=0\">link 0</a> ";
    echo "<a href=\"?file=lesson_24&href=1\">link 1</a> ";
    echo "<a href=\"?file=lesson_24&href=2\">link 2</a> ";
    echo "<a href=\"?file=lesson_24&href=3\">link 3</a> ";
    echo "<a href=\"?file=lesson_24&href=4\">link 4</a> ";
    echo "<a href=\"?file=lesson_24&href=5\">link 5</a> ";
    echo "<a href=\"?file=lesson_24&href=6\">link 6</a> ";

    if (isset($_GET['href'])) {
        echo '<br> Введено символ: ' . $arr[$_GET['href']];
    }
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 11. </b><b class="D">Модифицируйте предыдущую задачу так, чтобы ссылки выводились
            с помощью цикла foreach автоматически в соответствии с количеством элементов в массиве.</b></p>

    <?php
    $arr = ['a', 's', 'd', 'f', 'g', 'h', 'j'];

    foreach ($arr as $key => $elem) {
        echo "<a href=\"?file=lesson_24&href=$key\">link $key</a> ";
    }

    if (isset($_GET['href'])) {
        echo '<br> Введено символ: ' . $arr[$_GET['href']];
    }
    ?>
</fieldset>
<br>


</body>
</html>

