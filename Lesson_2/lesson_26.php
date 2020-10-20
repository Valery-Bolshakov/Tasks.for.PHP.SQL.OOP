
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Занятие №26</title>
</head>
<body>

<p><b class="T1">Занятие №26. </b><b class="D1">Задачи на регулярные выражения PHP. Часть 1</b></p>

<p><b class="T1">Задачи для решения:</b></p>
<p><b class="D1"> - на символ '.'</b></p>

<fieldset>
    <p><b class="T">Task 1. </b><b class="D">Дана строка 'ahb acb aeb aeeb adcb axeb'. Напишите регулярку,
            которая найдет строки ahb, acb, aeb по шаблону: буква 'a', любой символ, буква 'b'.</b></p>
    <?php
    $str = 'ahb acb aeb aeeb adcb axeb';
    echo preg_replace('/a.b/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 2. </b><b class="D">Дана строка 'aba aca aea abba adca abea'. Напишите регулярку,
            которая найдет строки abba adca abea по шаблону: буква 'a', 2 любых символа, буква 'a'.</b></p>
    <?php
    $str = 'aba aca aea abba adca abea';
    echo preg_replace('/a..a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 3. </b><b class="D">Дана строка 'aba aca aea abba adca abea'. Напишите регулярку,
            которая найдет строки abba и abea, не захватив adca.</b></p>
    <?php
    $str = 'aba aca aea abba adca abea';
    echo preg_replace('/ab.a/', '!', $str);
    ?>
</fieldset>
<br>


<p><b class="D1"> - на символы '+', '*', '?', ()</b></p>

<fieldset>
    <p><b class="T">Task 4. </b><b class="D">Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку,
            которая найдет строки aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз,
            буква 'a'.</b></p>
    <?php
    $str = 'aa aba abba abbba abca abea';
    echo preg_replace('/ab+a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 5. </b><b class="D">Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку,
            которая найдет строки aa, aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз
            (в том числе ни одного раза), буква 'a'.</b></p>
    <?php
    $str = 'aa aba abba abbba abca abea';
    echo preg_replace('/ab*a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 6. </b><b class="D">Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку,
            которая найдет строки aa, aba по шаблону: буква 'a', буква 'b' один раз или ниодного, буква 'a'.</b></p>
    <?php
    $str = 'aa aba abba abbba abca abea';
    echo preg_replace('/ab?a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 7. </b><b class="D">Дана строка 'ab abab abab abababab abea'. Напишите регулярку,
            которая найдет строки по шаблону: строка 'ab' повторяется 1 или более раз.</b></p>
    <?php
    $str = 'ab abab abab abababab abea';
    echo preg_replace('/(ab)+/', '!', $str);
    ?>
</fieldset>
<br>


<p><b class="D1"> - на экранировку</b></p>

<fieldset>
    <p><b class="T">Task 8. </b><b class="D">Дана строка 'a.a aba aea'. Напишите регулярку, которая найдет
            строку a.a, не захватив остальные.</b></p>
    <?php
    $str = 'a.a aba aea';
    echo preg_replace('/a\.a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 9. </b><b class="D">Дана строка '2+3 223 2223'. Напишите регулярку, которая найдет
            строку 2+3, не захватив остальные.</b></p>
    <?php
    $str = '2+3 223 2223';
    echo preg_replace('/2\+3/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 10. </b><b class="D">Дана строка '23 2+3 2++3 2+++3 345 567'. Напишите регулярку,
            которая найдет строки 2+3, 2++3, 2+++3, не захватив остальные (+ может быть любое количество).</b></p>
    <?php
    $str = '23 2+3 2++3 2+++3 345 567';
    echo preg_replace('/2\++3/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 11. </b><b class="D">Дана строка '23 2+3 2++3 2+++3 445 677'. Напишите регулярку,
            которая найдет строки 23, 2+3, 2++3, 2+++3, не захватив остальные.</b></p>
    <?php
    $str = '23 2+3 2++3 2+++3 445 677';
    echo preg_replace('/2\+*3/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 12. </b><b class="D">Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку,
            которая найдет строки *q+, *qq+, *qqq+, не захватив остальные.</b></p>
    <?php
    $str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
    echo preg_replace('/\*q+\+/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 13. </b><b class="D">Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку,
            которая найдет строки *+, *q+, *qq+, *qqq+, не захватив остальные.</b></p>
    <?php
    $str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
    echo preg_replace('/\*q*\+/', '!', $str);
    ?>
</fieldset>
<br>


<p><b class="D1"> - на жадность</b></p>

<fieldset>
    <p><b class="T">Task 14. </b><b class="D">Дана строка 'aba accca azzza wwwwa'. Напишите регулярку,
            которая найдет все строки по краям которых стоят буквы 'a', и заменит каждую из них на '!'.
            Между буквами a может быть любой символ (кроме a).</b></p>
    <?php
    $str = 'aba accca azzza wwwwa';
    echo preg_replace('/a.+?a/', '!', $str);
    ?>
</fieldset>
<br>


</body>
</html>

