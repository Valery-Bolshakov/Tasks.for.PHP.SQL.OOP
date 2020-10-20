<?php
/**
 * Time: 3:26
 */
?>

<h3>Занятие №17. Задачи на правильное использование пользовательских функций:</h3>

<?php
echo '<hr><br>';


echo 'Task 1. Сделайте функцию isNumberInRange, которая параметром принимает число и проверяет, что оно больше нуля 
и меньше 10. Если это так - пусть функция возвращает true, если не так - false.', "<br><br>";

function is_number_in_range($num)
{
    if ($num > 0 and $num < 10) {
        return true;
    } else {
        return false;
    }
}

var_dump(is_number_in_range(4));
echo '<hr><br>';


echo 'Task 2. Дан массив с числами. Запишите в новый массив только те числа, которые больше нуля и меньше 10-ти. Для 
этого используйте вспомогательную функцию isNumberInRange из предыдущей задачи.', "<br><br>";

$arr = [2, -9, 8, 3, -4, -5, 9];
$new_arr = [];
foreach ($arr as $elem) {
    if (is_number_in_range($elem)) {
        $new_arr[] = $elem;
    }
}
var_dump($new_arr);
echo '<hr><br>';


echo 'Task 3. Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число 
и возвращает сумму его цифр.', "<br><br>";

function get_digits_sum($num)
{
    return array_sum(str_split($num, 1));
}

echo get_digits_sum(345);
echo '<hr><br>';


echo 'Task 4. Найдите все года от 1 до 2019, сумма цифр которых равна 13. Для этого используйте вспомогательную 
функцию getDigitsSum из предыдущей задачи.', "<br><br>";

$arr = range(1, 2019);
$arr_year = [];
foreach ($arr as $elem) {
    if (get_digits_sum($elem) == 13) {
        $arr_year[] = $elem;
    }
}
print_r($arr_year);
echo '<hr><br>';


echo 'Task 5. Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: 
четное оно или нет. Если четное - пусть функция возвращает true, если нечетное - false.', "<br><br>";

function is_even($num)
{
    if ($num % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

var_dump(is_even(12));
echo '<br>';
var_dump(is_even(13));
echo '<hr><br>';


echo 'Task 6. Дан массив с целыми числами. Создайте из него новый массив, где останутся лежать только четные из этих
чисел. Для этого используйте вспомогательную функцию isEven из предыдущей задачи', "<br><br>";

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$arr_even = [];
foreach ($arr as $elem) {
    if (is_even($elem)) {
        $arr_even[] = $elem;
    }
}

var_dump($arr_even);
echo '<hr><br>';


echo 'Task 7. Сделайте функцию getDivisors, которая параметром принимает число и возвращает массив его делителей
(чисел, на которое делится данное число).', "<br><br>";

function get_divisors($num)
{
    $arr_divisors = [];
    for ($i = $num; $i > 0; $i--) {
        if ($num % $i == 0) {
            $arr_divisors[] = $i;
        }
    }
    return $arr_divisors;
}

var_dump(get_divisors(21));
echo '<hr><br>';


echo 'Task 8. Сделайте функцию getCommonDivisors, которая параметром принимает 2 числа, а возвращает массив их общих
делителей. Для этого используйте вспомогательную функцию getDivisors из предыдущей задачи.', "<br><br>";

function get_common_divisors($num_1, $num_2)
{
    $new_arr_1 = get_divisors($num_1);
    $new_arr_2 = get_divisors($num_2);
    $arr_common_divisors = [];
    foreach ($new_arr_1 as $item) {
        foreach ($new_arr_2 as $elem) {
            if ($item == $elem) {
                $arr_common_divisors[] = $elem;
            }
        }
    }
    return $arr_common_divisors;

}

var_dump(get_common_divisors(666, 333));


?>



















