
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Занятие №27</title>
</head>
<body>

<p><b class="T1">Занятие №27. </b><b class="D1">Задачи на регулярные выражения PHP. Часть 2</b></p>

<p><b class="T1">Задачи для решения:</b></p>
<p><b class="D1"> - на символ {}</b></p>

<fieldset>
    <p><b class="T">Task 1. </b><b class="D">Дана строка 'aa aba abba abbba abbbba abbbbba'. Напишите регулярку,
            которая найдет строки abba, abbba, abbbba и только их.</b></p>
    <?php
    $str = 'aa aba abba abbba abbbba abbbbba';
    echo preg_replace('/ab{2,4}a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 2. </b><b class="D">Дана строка 'aa aba abba abbba abbbba abbbbba'. Напишите регулярку,
            которая найдет строки вида aba, в которых 'b' встречается менее 3-х раз (включительно).</b></p>
    <?php
    $str = 'aa aba abba abbba abbbba abbbbba';
    echo preg_replace('/ab{0,3}a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 3. </b><b class="D">Дана строка 'aa aba abba abbba abbbba abbbbba'. Напишите регулярку,
            которая найдет строки вида aba, в которых 'b' встречается более 4-х раз (включительно).</b></p>
    <?php
    $str = 'aa aba abba abbba abbbba abbbbba';
    echo preg_replace('/ab{4,}a/', '!', $str);
    ?>
</fieldset>
<br>


<p><b class="D1"> - на символ \s, \S, \w, \W, \d, \D</b></p>

<fieldset>
    <p><b class="T">Task 4. </b><b class="D">Дана строка 'a1a a2a a3a a4a a5a aba aca'. Напишите регулярку,
            которая найдет строки, в которых по краям стоят буквы 'a', а между ними одна цифра.</b></p>
    <?php
    $str = 'a1a a2a a3a a4a a5a aba aca';
    echo preg_replace('/a\da/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 5. </b><b class="D">Дана строка 'a1a a22a a333a a4444a a55555a aba aca'. Напишите регулярку,
            которая найдет строки, в которых по краям стоят буквы 'a', а между ними любое количество цифр.</b></p>
    <?php
    $str = 'a1a a22a a333a a4444a a55555a aba aca';
    echo preg_replace('/a\d+a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 6. </b><b class="D">Дана строка 'aa a1a a22a a333a a4444a a55555a aba aca'.
            Напишите регулярку, которая найдет строки, в которых по краям стоят буквы 'a', а между ними
            любое количество цифр (в том числе и ноль цифр, то есть строка 'aa').</b></p>
    <?php
    $str = 'aa a1a a22a a333a a4444a a55555a aba aca';
    echo preg_replace('/a\d*a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 7. </b><b class="D">Дана строка 'avb a1b a2b a3b a4b a5b abb acb'. Напишите регулярку,
            которая найдет строки следующего вида: по краям стоят буквы 'a' и 'b', а между ними - не число.</b></p>
    <?php
    $str = 'avb a1b a2b a3b a4b a5b abb acb';
    echo preg_replace('/a\Db/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 8. </b><b class="D">Дана строка 'ave a#b a2b a$b a4b a5b a-b acb'. Напишите регулярку,
            которая найдет строки следующего вида: по краям стоят буквы 'a' и 'b', а между ними - не буква
            и не цифра.</b></p>
    <?php
    $str = 'ave a#b a2b a$b a4b a5b a-b acb';
    echo preg_replace('/a\Wb/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 9. </b><b class="D"> Дана строка 'ave a#a a2a a$a a4a a5a a-a aca'. Напишите регулярку,
            которая заменит все пробелы на '_'</b></p>
    <?php
    $str = 'ave a#a a2a a$a a4a a5a a-a aca';
    echo preg_replace('/\s/', '_', $str);
    ?>
</fieldset>
<br>


<p><b class="D1"> - на символ [], '^' - не, [a-zA-Z], кириллицу</b></p>

<fieldset>
    <p><b class="T">Task 10. </b><b class="D">Дана строка 'aba aea aca aza axa'. Напишите регулярку,
            которая найдет строки aba, aea, axa, не затронув остальных.</b></p>
    <?php
    $str = 'aba aea aca aza axa';
    echo preg_replace('/a[bex]a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 11. </b><b class="D">Дана строка 'aba aea aca aza axa a.a a+a a*a'. Напишите регулярку,
            которая найдет строки aba, a.a, a+a, a*a, не затронув остальных.</b></p>
    <?php
    $str = 'aba aea aca aza axa a.a a+a a*a';
    echo preg_replace('/a[b.+*]a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 12. </b><b class="D">Напишите регулярку, которая найдет строки следующего вида:
            по краям стоят буквы 'a', а между ними - цифра от 3-х до 7-ми.</b></p>
    <?php
    $str = 'aba a5a aca a4a axa a3a a6a a7a';
    echo preg_replace('/a[3-7]a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 13. </b><b class="D">Напишите регулярку, которая найдет строки следующего вида:
            по краям стоят буквы 'a', а между ними - буква от a до g.</b></p>
    <?php
    $str = 'aba a5a aca aaa axa a3a aga a7a';
    echo preg_replace('/a[a-g]a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 14. </b><b class="D">Напишите регулярку, которая найдет строки следующего вида:
            по краям стоят буквы 'a', а между ними - буква от a до f и от j до z. </b></p>
    <?php
    $str = 'a.a a5a aca a+a axa a3a aja aza';
    echo preg_replace('/a[a-fj-z]a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 15. </b><b class="D">Напишите регулярку, которая найдет строки следующего вида:
            по краям стоят буквы 'a', а между ними - буква от a до f и от A до Z.</b></p>
    <?php
    $str = 'a.a a5a aca a+a aGa a3a aja aKa';
    echo preg_replace('/a[a-fA-Z]a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 16. </b><b class="D">Дана строка 'aba aea aca aza axa a-a a#a'. Напишите регулярку,
            которая найдет строки следующего вида: по краям стоят буквы 'a', а между ними - не 'e' и не 'x'.</b></p>
    <?php
    $str = 'aba aea aca aza axa a-a a#a';
    echo preg_replace('/a[^ex ]a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 17. </b><b class="D">Дана строка 'wйw wяw wёw wqw'. Напишите регулярку, которая найдет
            строки следующего вида: по краям стоят буквы 'w', а между ними - буква кириллицы.</b></p>
    <?php
    $str = 'wйw wяw wёw wqw';
    echo preg_replace('/w[а-яё]w/u', '!', $str);
    ?>
</fieldset>
<br>


<p><b class="D1"> - на символ [a-zA-Z] и квантификаторы</b></p>

<fieldset>
    <p><b class="T">Task 18. </b><b class="D">Дана строка 'aAXa aeffa aGha aza ax23a a3sSa'. Напишите регулярку,
            которая найдет строки следующего вида: по краям стоят буквы 'a', а между ними - маленькие латинские
            буквы, не затронув остальных.</b></p>
    <?php
    $str = 'aAXa aeffa aGha aza ax23a a3sSa';
    echo preg_replace('/a[a-z]+a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 19. </b><b class="D">Дана строка 'aAXa aeffa aGha aza ax23a a3sSa'. Напишите регулярку,
            которая найдет строки следующего вида: по краям стоят буквы 'a', а между ними - маленькие и
            большие латинские буквы, не затронув остальных.</b></p>
    <?php
    $str = 'aAXa aeffa aGha aza ax23a a3sSa';
    echo preg_replace('/a[a-zA-Z]+a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 20. </b><b class="D">Дана строка 'aAXa aeffa aGha aza ax23a a3sSa'. Напишите регулярку,
            которая найдет строки следующего вида: по краям стоят буквы 'a', а между ними - маленькие латинские буквы
            и цифры, не затронув остальных.</b></p>
    <?php
    $str = 'aAXa aeffa aGha aza ax23a a3sSa';
    echo preg_replace('/a[a-z0-9]+a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 21. </b><b class="D">Дана строка 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ'. Напишите
            регулярку, которая найдет все слова по шаблону: любая кириллическая буква любое количество раз.</b></p>
    <?php
    $str = 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ';
    echo preg_replace('/[а-яА-ЯёЁ]+/u', '!', $str);
    ?>
</fieldset>
<br>


<p><b class="D1"> - на символ '^', '$'</b></p>

<fieldset>
    <p><b class="T">Task 22. </b><b class="D">Дана строка 'aaa aaa aaa'. Напишите регулярку, которая
            заменит первое 'aaa' на '!'</b></p>
    <?php
    $str = 'aaa aaa aaa';
    echo preg_replace('/^aaa/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 23. </b><b class="D">Дана строка 'aaa aaa aaa'. Напишите регулярку, которая
        заменит последнее 'aaa' на '!'.</b></p>
    <?php
    $str = 'aaa aaa aaa';
    echo preg_replace('/aaa$/', '!', $str);
    ?>
</fieldset>
<br>


<p><b class="D1"> - на символ '|'</b></p>

<fieldset>
    <p><b class="T">Task 24. </b><b class="D">Дана строка 'aeeea aeea aea axa axxa axxxa'. Напишите регулярку,
            которая найдет строки следующего вида: по краям стоят буквы 'a', а между ними - или буква 'e'
            любое количество раз или по краям стоят буквы 'a', а между ними - буква 'x' любое количество раз.</b></p>
    <?php
    $str = 'aeeea aeea aea axa axxa axxxa';
    echo preg_replace('/a(e+|x+)a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 25. </b><b class="D">Дана строка 'aeeea aeea aea axa axxa axxxa'. Напишите регулярку,
            которая найдет строки следующего вида: по краям стоят буквы 'a', а между ними -
            или буква 'e' два раза или буква 'x' любое количество раз.</b></p>
    <?php
    $str = 'aeeea aeea aea axa axxa axxxa';
    echo preg_replace('/a(ee|x+)a/', '!', $str);
    ?>
</fieldset>
<br>


<p><b class="D1"> - на символ \b, \B</b></p>

<fieldset>
    <p><b class="T">Task 26. </b><b class="D">Дана строка 'xbx aca aea abba adca abea'. Напишите регулярку,
            которая вокруг каждого слова вставит '!' (получится '!xbx! !aca! !aea! !abba! !adca! !abea!'). </b></p>
    <?php
    $str = 'xbx aca aea abba adca abea';
    echo preg_replace('/\b/', '!', $str);
    ?>
</fieldset>
<br>


<p><b class="D1"> - на символ обратный слеш \</b></p>

<fieldset>
    <p><b class="T">Task 27. </b><b class="D">Дана строка 'a\a abc'. Напишите регулярку, которая
            заменит строку 'a\a' на '!'.</b></p>
    <?php
    $str = 'a\a abc';
    echo preg_replace('/a\\\\a/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 28. </b><b class="D">Дана строка 'a\a a\\a a\\\\\a'. Напишите регулярку,
            которая заменит строку 'a\\\\\a' на '!'.</b></p>
    <?php
    $str = 'a\a a\\a a\\\\\a';
    echo preg_replace('/a\\\\{3}a/', '!', $str);
    ?>
</fieldset>
<br>


<p><b class="D1"> - на экранировку посложнее</b></p>

<fieldset>
    <p><b class="T">Task 29. </b><b class="D">Дана строка 'bbb /aaa\ bbb /ccc\'. Напишите регулярку,
            которая найдет содержимое всех конструкций /...\ и заменит их на '!'.</b></p>
    <?php
    $str = 'bbb /aaa\ bbb /ccc\ ';
    echo preg_replace('/\/[a-z]+\\\\/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 30. </b><b class="D">Дана строка 'bbb <b> hello </b>, <b> world </b> eee'.
            Напишите регулярку, которая найдет содержимое тегов <b> и заменит их на '!'.</b></p>
    <?php
    $str = 'bbb <b> hello </b>, <b> world </b> eee';
    echo preg_replace('/<b>(.+?)<\/b>/', '!', $str);
    ?>
</fieldset>
<br>


</body>
</html>

