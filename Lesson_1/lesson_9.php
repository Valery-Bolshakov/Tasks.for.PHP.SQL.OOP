
<h3>Занятие №9. Практика на комбинации стандартных функций в PHP:</h3>

<?php
/**Практика на комбинации стандартных функций PHP*/


echo 'Task 1 - Дан массив с числами. Найдите среднее арифметическое его элементов
 не используя цикл', "<br/> \n";
$arr = range(1, 5);
//print_r($arr);
echo array_sum($arr) / count($arr);
echo '<hr><br>';

echo 'Task 2 - Найдите сумму чисел от 1 до 100 не используя цикл', "<br/> \n";
$arr = range(1, 100);
echo array_sum($arr);
echo '<hr><br>';

echo 'Task 3 - Выведите столбец чисел от 1 до 100 не используя цикл', "<br/> \n";
$arr = range(1, 100);
//echo implode("<br>\n", $arr), "<br>\n";
echo '<hr><br>';

echo 'Task 4 - Заполните массив 10-ю иксами не используя цикл', "<br/> \n";
$arr = array_fill(0, 10, 'x');
print_r($arr);
echo '<hr><br>';

echo 'Task 5 - Заполните массив 10-ю случайными числами от 1 до 10 так, чтобы
они не повторялись. Цикл использовать нельзя', "<br/> \n";
$arr = range(1, 10);
shuffle($arr);
print_r($arr);
echo '<hr><br>';

echo 'Task 6 - Найдите факториал заданного числа не используя цикл', "<br/> \n";
$int = 5;
$arr = range(1, $int);
echo array_product($arr);
echo '<hr><br>';

echo 'Task 7 - Дано число. Найдите сумму цифр этого числа не используя цикл', "<br/> \n";
$int = 2367;
$arr = str_split($int);
echo array_sum($arr);
echo '<hr><br>';

echo 'Task 8 - Дана строка. Сделайте заглавным последний символ этой строки
не используя цикл', "<br/> \n";
$str = 'laksdhg';
echo strrev(ucfirst(strrev($str)));
echo '<hr><br>';

echo 'Task 9 - Дан массив с числами. Получите из него массив с квадратными корнями
этих чисел не используя цикл', "<br/> \n";
$arr = range(1, 5);
$result = array_map('sqrt', $arr);
print_r($result);
echo '<hr><br>';

echo 'Task 10 -  Заполните массив числами от 1 до 26 так, чтобы ключами этих чисел
были буквы английского алфавита: ["a"=>1, "b"=>2...].
Сделайте это не используя цикл', "<br/> \n";
$arr_1 = range(1, 26);
$arr_2 = range('a', 'z');
$new_arr = array_combine($arr_2, $arr_1);
print_r($new_arr);
echo '<hr><br>';

echo 'Task 11 - Дана строка с числами 1234567890. Найдите сумму
пар чисел: 12+34+56+78+90. Решите задачу, не используя цикл', "<br/> \n";
$str = '1234567890';
$arr = str_split($str, 2);
//print_r($arr);
echo array_sum($arr);
echo '<hr><br>';




