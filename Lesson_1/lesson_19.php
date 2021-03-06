<?php
/**
 * Time: 23:29
 */
?>

<h3>Занятие №19. Продвинутая работа с пользовательскими функциями в PHP:</h3>
<h4>Значения по умолчанию</h4>

<?php

echo 'Task 1. Сделайте функцию cut, которая первым параметром будет принимать строку, а вторым параметром - сколько 
первых символов оставить в этой строке. Второй параметр должен быть необязательным и по умолчанию принимать 
значение 10.', "<br><br>";
//substr(строка, откуда, [сколько]);
//substr_replace(где меняем, на что меняем, с какого символа, [сколько символов]);
$str = '123456789qweasd';

function cut($str, $len = 10)
{
    echo substr_replace($str, '', $len);
}

cut($str, 5);
echo '<hr><br>';
?>

<h4>Работа с рекурсией</h4>

<?php
echo 'Task 0. Дан многомерный массив произвольного уровня вложенности. 
Выведите всего его элементы на экран.', "<br><br>";

$arr = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
$j = count($arr);
$i = 0;

first($arr);

function first($arr)
{
    global $i;
    global $j;

    if (!empty($arr[$i])) {
        echo array_shift($arr[$i]) . '<br>'; //выводим первый элемент массива
        first($arr); //это рекурсия
    }
    if (empty($arr[$i]) and $i < $j) {
        $i++;
        first($arr);
    }
}

echo '<hr><br>';


echo 'Task 2. Дан массив с числами. Выведите последовательно его элементы используя рекурсию и не 
используя цикл.', "<br><br>";
$arr = [1, 2, 3, 4, 5, 6];

function get_elem($arr)
{
    echo array_shift($arr) . '<br>';
    if (!empty($arr)) {
        get_elem($arr); //рекурсия
    }
}

get_elem($arr);
echo '<hr><br>';


echo 'Task 3. Дано число. Сложите его цифры. Если сумма получилась более 9-ти, опять сложите его цифры. 
И так, пока сумма не станет однозначным числом (9 и менее).', "<br><br>";
$num = 2383;
echo 'Допустим задано число: ' . $num . '<br>';

function get_sum($num)
{
    global $num;
    $num = array_sum(str_split($num, 1));
    if ($num <= 9) {
        echo 'Итоговое сложение чисел равно: ' . $num;
    } elseif ($num > 9) {
        get_sum($num); // запускаем рекурсию
    }
}

get_sum($num);
echo '<hr><br>';


?>





















