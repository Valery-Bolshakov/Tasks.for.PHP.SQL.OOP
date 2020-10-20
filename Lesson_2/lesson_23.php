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
    <title>Занятие №23</title>
</head>
<body>
<p><b class="T1">Занятие №23. </b><b class="D1">Работа с HTML из PHP</b></p>
<p><b class="T1">Переменные и строки:</b></p><br>


<fieldset>
    <p><b class="T">Task 1. </b><b class="D">Дана переменная $name со значением 'Иван'. Выведите с ее помощью на
            экран фразу 'Привет, Иван!'. Напишите два варианта решения - с одинарными кавычками и двойными.</b></p>
    <?php
    $name = 'Иван';
    $arr = ['name' => 'Иван'];

    echo 'Варианты вывода строки + переменные + массив:', '<br>';
    echo '1 - Привет, ' . $name . '! ', '<br>';
    echo '1 - Привет, ' . $arr['name'] . '! ', '<br>';
    echo "2 - Привет, $name!", '<br>';
    echo "3 - Привет, $arr[name]!", '<br>';
    echo "4 - Привет, {$arr['name']}!", '<br>';
    echo '3 - Привет, $arr[name]!', '<br>'; // Так не работает
    echo '3 - Привет, {$arr[name]}!', '<br>'; // Так не работает
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 2. </b><b class="D">Дан массив ['name'=>'Иван', 'age'=>30]. Выведите с его помощью
            на экран фразу 'Привет, Иван! Тебе 30 лет.'. Напишите два варианта решения - с одинарными
            кавычками и двойными.</b></p>

    <?php
    $arr = ['name' => 'Иван', 'age' => 30];

    echo '1 - Привет, ' . $arr['name'] . '! Тебе' . $arr['age'] . 'лет.', '<br>';
    echo "2 - Привет, $arr[name]! Тебе $arr[age] лет.", '<br>';
    echo "3 - Привет, {$arr['name']}! Тебе {$arr['age']} лет.", '<br>';
    ?>
</fieldset>
<br>


<p><b class="T1">Формирование тегов:</b></p><br>


<fieldset>
    <p><b class="T">Task 3. </b><b class="D">Дана переменная $text со значением '!!!'. Выведите с ее помощью на экран
            текст &lt;p&gt;!!!&lt;/p&gt;. Напишите два варианта решения - с одинарными кавычками и двойными.</b></p>

    <?php
    $text = '!!!';
    echo "<p>" . $text . '</p>';
    echo "<p>$text</p>";
    echo '<p>$text</p>';
    echo '&lt;p&gt;' . $text . "&lt;/p&gt;";
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 4. </b><b class="D">Дана переменная $href со значением 'index.html' и переменная $text со
            значением 'ссылка'. Выведите с их помощью на экран текст <br> '&lt;a href="index.html"&gt;ссылка'&lt;/a&gt;
            Напишите два варианта решения - с одинарными кавычками и двойными.</b></p>

    <?php
    $href = 'index.html';
    $text = 'text';

    echo "&lt;a href=\"$href\"&gt;$text&lt;/a&gt;", '<br>';
    echo '&lt;p&gt;' . $text . "&lt;/p&gt;";
    ?>
</fieldset>
<br>


<p><b class="T1">Теги и циклы:</b></p><br>


<fieldset>
    <p><b class="T">Task 5. </b><b class="D">Дан массив. Выведите каждый элемент этого массива в отдельном абзаце.</b>
    </p>

    <?php
    $arr = ['1', '2', '3'];
    foreach ($arr as $elem) {
        echo "<p>$elem</p>";
    }
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 6. </b><b class="D">Дан массив. Выведите каждый элемент этого массива в отдельной li в теге
            ul.</b></p>

    <?php
    $arr = ['1', '2', '3'];
    echo '<ul>';
    foreach ($arr as $elem) {
        echo "<li>$elem</li>";
    }
    echo '</ul>';
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 7. </b><b class="D">Дан массив. С помощью цикла сформируйте с его помощью
            следующий HTML код: a href="1.html" ссылка 1 /a </b></p>

    <?php
    $arr = [
        ['href' => '1.html', 'text' => 'ссылка 1'],
        ['href' => '2.html', 'text' => 'ссылка 2'],
        ['href' => '3.html', 'text' => 'ссылка 3'],
    ];

    foreach ($arr as $elem) {
        $href = $elem['href'];
        $text = $elem['text'];
        echo "&lt;a href=\"$href\"&gt; $text &lt;/a&gt;", '<br>'; // &lt; p &gt;
    }
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 8. </b><b class="D">Модифицируйте предыдущую задачу так, чтобы получился следующий HTML
            код:</b></p>

    <?php
    $arr = [
        ['href' => '1.html', 'text' => 'ссылка 1'],
        ['href' => '2.html', 'text' => 'ссылка 2'],
        ['href' => '3.html', 'text' => 'ссылка 3'],
    ];

    echo '&lt;ul&gt;', '<br>';
    foreach ($arr as $elem) {
        $href = $elem['href'];
        $text = $elem['text'];
        echo "&lt;li&gt;&lt;a href=\"$href\"&gt; $text &lt;/a&gt;&lt;/li&gt;", '<br>'; // &lt; p &gt;
    }
    echo '&lt;ul&gt;';
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 9. </b><b class="D">Модифицируйте предыдущую задачу так, чтобы получился следующий HTML
            код:</b></p>

    <?php
    $arr = [
        ['name' => 'Коля', 'age' => 30, 'salary' => 500],
        ['name' => 'Вася', 'age' => 31, 'salary' => 600],
        ['name' => 'Петя', 'age' => 32, 'salary' => 700],
    ];

    echo '<table>';
    echo '<tr>';
    foreach ($arr as $elem) {
        echo '<tr>';
        foreach ($elem as $key => $item) {
            echo "<td>$elem[$key]</td>";
        }
        echo '</tr>';

    }
    echo '</tr>';
    echo '</table>';
    ?>
</fieldset>
<br>



<fieldset>
    <p><b class="T">Task 9. </b><b class="D">Модифицируйте предыдущую задачу так, чтобы получился следующий HTML
            код:</b></p>

    <?php
    $arr = [
        ['name' => 'Коля', 'age' => 30, 'salary' => 500],
        ['name' => 'Вася', 'age' => 31, 'salary' => 600],
        ['name' => 'Петя', 'age' => 32, 'salary' => 700],
    ];

    // &lt; p &gt;
    echo '&lt;table&gt;', '<br>';
    echo '&lt;tr&gt;', '<br>';
    foreach ($arr as $elem) {
        echo '&lt;tr&gt;', '<br>';
        foreach ($elem as $key => $item) {
            echo "&lt;td&gt;$elem[$key]&lt;/td&gt;", '<br>';
        }
        echo '&lt;/tr&gt;', '<br>';

    }
    echo '&lt;/tr&gt;', '<br>';
    echo '&lt;/table&gt;', '<br>';
    ?>
</fieldset>
<br>
</body>
</html>
















