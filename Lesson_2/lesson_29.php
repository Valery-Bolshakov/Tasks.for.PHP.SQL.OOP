<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Занятие №29</title>
</head>
<body>

<p><b class="T1">Занятие №29. </b><b class="D1">Задачи на регулярные выражения PHP. Часть 4</b></p>

<p><b class="T1">Задачи для решения:</b></p>
<p><b class="D1"> - На позитивный и негативный просмотр</b></p>

<!--
(?= )  (?! )  - вперед
(?<= ) (?<! ) - назад
-->
<fieldset>
    <p><b class="T">Task 1. </b><b class="D">С помощью позитивного и негативного просмотра найдите все строки по
            шаблону буква b, затем 3 буквы a и поменяйте 3 буквы a на знак '!'. То есть из 'baaa'
            нужно сделать 'b!'. </b></p>
    <?php
    $str = 'xaaa baaa';
    echo preg_replace('/(?<=b)aaa/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 2. </b><b class="D">С помощью позитивного и негативного просмотра найдите все строки
            по шаблону любая буква, но не b, затем 3 буквы a и поменяйте 3 буквы a на знак '!'. То есть из,
            к примеру, 'waaa' нужно сделать 'w!', а 'baaa' не поменяется.</b></p>
    <?php
    $str = 'xaaa baaa saaa';
    echo preg_replace('/(?<!b)aaa/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 3. </b><b class="D">С помощью позитивного и негативного просмотра найдите все строки
            по шаблону 3 буквы a, затем буква b и поменяйте 3 буквы a на знак '!'. То есть из 'aaab'
            нужно сделать '!b'.</b></p>
    <?php
    $str = 'aaax aaab aaas';
    echo preg_replace('/aaa(?=b)/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 4. </b><b class="D">С помощью позитивного и негативного просмотра найдите все строки
            по шаблону 3 буквы a, затем любая буква, но не b и поменяйте 3 буквы a на знак '!'.
            То есть из, к примеру, 'aaaw' нужно сделать '!w', а 'aaab' не поменяется.</b></p>
    <?php
    $str = 'aaax aaab aaas';
    echo preg_replace('/aaa(?!b)/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 5. </b><b class="D">Дана строка со звездочками 'aaa * bbb ** eee * **'.
            Замените на '!' только одиночные звездочки, но не двойные.</b></p>
    <?php
    $str = 'aaa * bbb ** eee * **';
    echo preg_replace('/(?<= )\*(?= )/', '!', $str), '<br>';
    echo preg_replace('/(?<!\*)\*(?!\*)/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 6. </b><b class="D">Дана строка со звездочками 'aaa * bbb ** eee *** kkk ****'.
            Замените на '!' только двойные звездочки, но не одиночные или тройные и более.</b></p>
    <?php
    $str = 'aaa * bbb ** eee *** kkk ****';
    echo preg_replace('/(?<!\*)\*{2}(?!\*)/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 7. </b><b class="D">С помощью позитивного и негативного просмотра
            найдите две одинаковые идущие подряд буквы и первую поменяйте на '!'.</b></p>
    <?php
    $str = 'HHgrtuPPdhFFsGG';
    echo $str, '<br>';
    echo preg_replace('/([a-zA-Z])(?=\1)/', '!', $str);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 8. </b><b class="D">С помощью позитивного и негативного просмотра
            найдите две одинаковые идущие подряд буквы и вторую поменяйте на '!'.</b></p>
    <?php
    $str = 'HHgrtuPPdhFFsGG';
    echo $str, '<br>';
    echo preg_replace('/(?<=([a-zA-Z]))\1/', '!', $str);
    ?>
</fieldset>
<br>


<p><b class="D1"> - На preg_replace_callback</b></p>

<fieldset>
    <p><b class="T">Task 9. </b><b class="D">Дана строка с целыми числами. С помощью регулярки
            преобразуйте строку так, чтобы вместо этих чисел стояли их квадраты. </b></p>
    <?php
    $str = 'a11sw8rgu3mghg9oi';
    echo $str, '<br>';
    echo preg_replace_callback('/\d+/', 'func', $str);

    function func($arr)
    {
        $result = pow($arr[0], 2);
        return $result;
    }

    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 10. </b><b class="D">Дана строка с целыми числами. Найдите числа, стоящие в кавычках
            и увеличьте их в два раза. Пример: из строки 2aaa'3'bbb'4' сделаем строку 2aaa'6'bbb'8'. </b></p>
    <?php
    $str = "2aaa'3'bbb'4'ggg4";
    echo $str, '<br>';
    echo preg_replace_callback('/(?<=\')\d+(?=\')/', 'func1', $str);

    function func1($arr)
    {
        $result = $arr[0] * 2;
        return $result;
    }

    ?>
</fieldset>
<br>


</body>
</html>

