<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Занятие №28</title>
</head>
<body>

<p><b class="T1">Занятие №28. </b><b class="D1">Задачи на регулярные выражения PHP. Часть 3</b></p>

<p><b class="T1">Задачи для решения:</b></p>
<p><b class="D1"> - на карманы при замене</b></p>

<fieldset>
    <p><b class="T">Task 1. </b><b class="D">Дана строка 'aaa@bbb eee7@kkk'. Напишите регулярку,
            которая найдет строки по шаблону: любое количество букв и цифр, символ @, любое количество
            букв и цифр и поменяет местами то, что стоит до @ на то, что стоит после нее. Например,
            aaa@bbb должно превратиться в bbb@aaa.</b></p>
    <?php
    $str = 'aaa@bbb eee7@kkk';
    echo preg_replace('/([a-z\d]+)@([a-z\d]+)/', '$2@$1', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 2. </b><b class="D">Дана строка вида 'a1b2c3'. Напишите регулярку, которая
            найдет все цифры и удвоит их количество таким образом: 'a11b22c33'
            (то есть рядом с каждой цифрой напишет такую же).</b></p>
    <?php
    $str = 'a1b2c3';
    echo preg_replace('/(\d)/', '$1$1', $str);
    ?>
</fieldset>
<br>


<p><b class="D1"> - на карманы в самой регулярке</b></p>

<fieldset>
    <p><b class="T">Task 3. </b><b class="D">Дана строка 'aae xxz 33a'. Найдите все места, где есть два
            одинаковых идущих подряд символа и замените их на '!'.</b></p>
    <?php
    $str = 'aae xxz 33a';
    echo preg_replace('/([a-z\d])\1/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 4. </b><b class="D">Дана строка 'aaa bcd xxx efg'. Найдите строки, состоящие
            из одинаковых символов (это будет aaa xxx).</b></p>
    <?php
    $str = 'aaa bcd xxx efg';
    echo preg_replace('/([a-z\d])\1+/', '!', $str);
    ?>
</fieldset>
<br>


<p><b class="D1"> - Задачи на preg_match[_all]</b></p>

<fieldset>
    <p><b class="T">Task 5. </b><b class="D">С помощью preg_match определите, что переданная строка является
            емэйлом. Примеры емэйлов для тестирования mymail@mail.ru, my.mail@mail.ru, my-mail@mail.ru,
            my_mail@mail.ru, mail@mail.com, mail@mail.by, mail@yandex.ru.</b></p>
    <?php
    $arr = [
        'mymail@mail.ru',
        'my.mail@mail.ru',
        'my-mail@mail.ru',
        'my_mail@mail.ru',
        'mail@mail.com',
        'mail@mail.by',
        'mail@yandex.ru'
    ];
    foreach ($arr as $elem) {
        echo preg_match('/^[a-zA-Z0-9_.-]+@[a-z]+\.[a-z]{2,3}$/', $elem), '<br>';
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 6. </b><b class="D">Дана строка с текстом, в котором могут быть емейлы.
            С помощью preg_match_all найдите все емэйлы.</b></p>
    <?php
    $str = 'Примеры емэйлов для тестирования mymail@mail.ru my.mail@mail.ru my-mail@mail.ru
            my_mail@mail.ru mail@mail.com';

    echo preg_match_all('/[a-zA-Z0-9_.-]+@[a-z]+\.[a-z]{2,3}/u', $str, $m);
    //var_dump($m);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 7. </b><b class="D">С помощью preg_match определите, что переданная строка
            является доменом. Примеры доменов: site.ru, site.com, my-site123.com.</b></p>
    <?php
    $arr = [
        'site.ru',
        'site.com',
        'my-site123.com'
    ];
    foreach ($arr as $elem) {
        $item = preg_match('/^[a-z0-9-]+\.[a-z]{2,3}$/', $elem);
        if ($item == 1) {
            echo "$elem, - строка является доменом", '<br>';
        }
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 8. </b><b class="D">С помощью preg_match определите, что переданная строка является
            доменом 3-го уровня. Примеры доменов: hello.site.ru, hello.site.com, hello.my-site.com.</b></p>
    <?php
    $arr = [
        'hello.site.ru',
        'hello.site.com',
        'hello.my-site.com'
    ];
    foreach ($arr as $elem) {
        $item = preg_match('/^[a-z0-9]+\.[a-z0-9-]+\.[a-z]{2,3}$/', $elem);
        if ($item == 1) {
            echo "$elem, - строка является доменом 3-го уровня", '<br>';
        }
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 9. </b><b class="D">С помощью preg_match определите, что переданная строка является
            доменом, название которого начинается с http. Примеры доменов: http://site.ru, http://site.com</b></p>
    <?php
    $arr = [
        'http://site.ru',
        'http://site.com'
    ];
    foreach ($arr as $elem) {
        $item = preg_match('#^http://[a-z0-9]+\.[a-z]{2,3}$#', $elem);
        if ($item == 1) {
            echo "$elem, - строка является доменом с http", '<br>';
        }
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 10. </b><b class="D">С помощью preg_match определите, что переданная строка
            является доменом вида http://site.ru. Протокол может быть как http, так и https.</b></p>
    <?php
    $arr = [
        'http://site.ru',
        'https://site.com'
    ];
    foreach ($arr as $elem) {
        $item = preg_match('#^https?://[a-z0-9]+\.[a-z]{2,3}$#', $elem);
        if ($item == 1) {
            echo "$elem, - строка является доменом с http или https", '<br>';
        }
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 11. </b><b class="D">С помощью preg_match определите, что переданная строка
            является доменом. Протокол может быть как http, так и https. Домен может быть со слешем
            в конце: http://site.ru, http://site.ru/, https://site.ru, https://site.ru/.</b></p>
    <?php
    $arr = [
        'http://site.ru',
        'http://site.ru/',
        'https://site.com',
        'https//site.com',
        'https://site.com/'
    ];
    foreach ($arr as $elem) {
        $item = preg_match('#^https?://[a-z0-9]+\.[a-z]{2,3}/?$#', $elem);
        if ($item == 1) {
            echo "$elem, - строка является доменом", '<br>';
        } else {
            echo "$elem, - строка НЕ является доменом", '<br>';
        }
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 12. </b><b class="D">С помощью preg_match определите, что переданная строка
            начинается с http или с https.</b></p>
    <?php
    $str = 'https://site.com/';
    echo preg_match('/^https?/', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 13. </b><b class="D">С помощью preg_match определите, что переданная строка
            заканчивается расширением txt, html или php.</b></p>
    <?php
    $arr = [
        'site.txt',
        'site.tt',
        'site.html',
        'site.htm',
        'site.php'
    ];
    foreach ($arr as $elem) {
        $item = preg_match('/\.(txt|html|php)$/', $elem);
        if ($item == 1) {
            echo "$elem, - Верно", '<br>';
        } else {
            echo "$elem, -  НЕ Верно", '<br>';
        }
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 14. </b><b class="D">С помощью preg_match определите, что переданная строка
            заканчивается расширением jpg или jpeg.</b></p>
    <?php
    $arr = [
        'site.jpg',
        'site.jg',
        'site.jpe',
        'site.jpeg'
    ];
    foreach ($arr as $elem) {
        $item = preg_match('/\.(jpe?g)$/', $elem);
        if ($item == 1) {
            echo "$elem, - заканчивается расширением jpg или jpeg", '<br>';
        } else {
            echo "$elem, -  НЕ Верно", '<br>';
        }
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 15. </b><b class="D">С помощью preg_match узнайте является ли строка числом,
            длиной до 12 цифр.</b></p>
    <?php
    $str = '467768745535';
    $item = preg_match('/^\d{1,12}$/', $str);
    if ($item == 1) {
        echo "$str - является", '<br>';
    } else {
        echo "$str -  НЕ Верно", '<br>';
    }

    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 16. </b><b class="D">Дана строка с буквами, пробелами и цифрами. Найдите сумму
            всех чисел из данной строки.</b></p>
    <?php
    $str = '256asf5asg 2a6sg 78sah5h';
    preg_match_all('/\d/', $str, $arr);
    echo array_sum($arr[0]);
    ?>
</fieldset>
<br>


<p><b class="D1"> - Задачи на preg_replace</b></p>

<fieldset>
    <p><b class="T">Task 17. </b><b class="D">С помощью preg_replace преобразуйте дату в формате
            '31-12-2014' в '2014.12.31'.</b></p>
    <?php
    $str = '31-12-2014';
    echo preg_replace('/(\d{2})\-(\d{2})\-(\d{4})/', '$3.$2.$1', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 18. </b><b class="D">С помощью preg_replace замените в строке домены
            вида http://site.ru, http://site.com на <a href="http://site.ru">site.ru</a></b></p>
    <?php
    $str1 = 'http://site.ru';
    $str2 = 'http://site.com';
    echo preg_replace('#http://([a-z0-9]+\.[a-z]{2,3})#', '<a href="$0">$1</a>', $str1), '<br>';
    echo preg_replace('#http://([a-z0-9]+\.[a-z]{2,3})#', '<a href="$0">$1</a>', $str2);
    ?>
</fieldset>
<br>


</body>
</html>

