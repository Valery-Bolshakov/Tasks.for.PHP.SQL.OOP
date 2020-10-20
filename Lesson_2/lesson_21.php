
<h3>Занятие №21. Задачи на отработку циклов и функций в PHP:</h3>

<h4>Отработка циклов:</h4>

<?php
echo 'Task 1. Выведите с помощью цикла столбец чисел от 1 до 6', "<br><br>";
for ($i = 1; $i < 7; $i++) {
    echo $i . '<br>';
}
echo '<hr><br>';


echo 'Task 2. Выведите с помощью цикла столбец четных чисел от 1 до 10', "<br><br>";
for ($i = 1; $i < 11; $i++) {
    if (($i % 2) == 0) {
        echo $i . '<br>';
    }
}
echo '<hr><br>';


echo 'Task 3. Найдите с помощью цикла сумму чисел от 1 до 10', "<br><br>";
for ($i = 1, $j = 0; $i < 11; $i++) {
    $j += $i;
}
echo $j;
echo '<hr><br>';


echo 'Task 4. Найдите с помощью цикла сумму квадратов чисел от 1 до 15', "<br><br>";
for ($i = 1, $j = 0; $i < 16; $i++) {
    $j += $i * $i;
}
echo $j;
echo '<hr><br>';


echo 'Task 5. Найдите с помощью цикла сумму корней чисел от 1 до 15. Результат округлите до двух знаков 
после дробной части.', "<br><br>";
for ($i = 1, $j = 0; $i < 16; $i++) {
    $j += sqrt($i);
}
echo round($j, 2);
echo '<hr><br>';


echo 'Task 6. Найдите с помощью цикла сумму тех чисел от 1 до 100, которые делятся на 7.', "<br><br>";
for ($i = 1, $j = 0; $i <= 100; $i++) {
    if (($i % 7) == 0) {
        $j += $i;
    }
}
echo $j;
echo '<hr><br>';


echo 'Task 7. Заполните массив 10-ю иксами с помощью цикла.', "<br><br>";
$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $arr[] = 'x';
}
var_dump($arr);
echo '<hr><br>';


echo 'Task 8. Заполните массив числами от 1 до 10 с помощью цикла.', "<br><br>";
$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $arr[] = $i;
}
print_r($arr);
echo '<hr><br>';


echo 'Task 9. Заполните массив числами от 10 до 1 с помощью цикла.', "<br><br>";
$arr = [];
for ($i = 10; $i > 0; $i--) {
    $arr[] = $i;
}
print_r($arr);
echo '<hr><br>';


echo 'Task 10. Заполните массив 10-ю случайными числами от 1 до 10 с помощью цикла.', "<br><br>";
$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $arr[] = mt_rand(1, 10);
}
var_dump($arr);
echo '<hr><br>';


echo 'Task 11. С помощью цикла создайте строку из 6-ти символов, состоящую из случайных чисел от 1 до 9.', "<br><br>";
$str = '';
for ($i = 1; $i <= 6; $i++) {
    $str .= rand(1, 9);
}
echo $str;
echo '<hr><br>';


echo 'Task 12. Дан массив с числами. С помощью цикла найдите сумму элементов этого массива.', "<br><br>";
$arr = range(1, 6);
$sum = 0;
foreach ($arr as $elem) {
    $sum += $elem;
}
echo $sum;
echo '<hr><br>';


echo 'Task 13. Дан массив с числами. С помощью цикла найдите сумму квадратов элементов этого массива.', "<br><br>";
$arr = range(1, 6);
$sum = 0;
foreach ($arr as $elem) {
    $sum += $elem * $elem;
}
echo $sum;
echo '<hr><br>';


echo 'Task 14. Дан массив с числами. С помощью цикла найдите корень из суммы квадратов элементов этого массива. 
Результат округлите в меньшую сторону до целых.', "<br><br>";
$arr = range(1, 6);
$sum = 0;
foreach ($arr as $elem) {
    $sum += $elem * $elem;
}
echo floor(sqrt($sum));
echo '<hr><br>';


echo 'Task 15. Дан массив с числами. Найдите сумму тех элементов массива, которые больше 0 и меньше 10.', "<br><br>";
$arr = range(7, 12);
$sum = 0;
foreach ($arr as $elem) {
    if ($elem > 0 and $elem < 10) {
        $sum += $elem;
    }
}
echo $sum;
echo '<hr><br>';


echo 'Task 16. Дан массив с числами. Проверьте, что в нем есть 3 одинаковых числа подряд.', "<br><br>";
$arr = [1, 2, 3, 3, 3, 4, 6, 9, 11];
$flag = false;
for ($i = 0, $j = 1, $k = 2; $arr[$k] <= count($arr); $i++, $j++, $k++) {
    if ($arr[$i] == $arr[$j] and $arr[$i] == $arr[$k]) {
        $flag = true;
    }
}

if ($flag === true) {
    echo 'Есть';
} else {
    echo 'Нет';
}
echo '<hr><br>';


echo 'Task 17. С помощью цикла сформируйте строку 1223334444... и так далее до заданного числа.', "<br><br>";
$str = '';
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        $str .= $i;
    }
}
echo $str;
echo '<hr><br>';


echo 'Task 18. Дан многомерный массив. С помощью цикла выведите строки в формате имя-зарплата.', "<br><br>";
$arr = [
    0 => ['name' => 'Коля', 'salary' => 300],
    1 => ['name' => 'Вася', 'salary' => 400],
    2 => ['name' => 'Петя', 'salary' => 500],
];

foreach ($arr as $elem) {
    echo $elem['name'] . '-' . $elem['salary'] . '<br>';
}
echo '<hr><br>';


echo 'Task 19. Заполните двумерный массив случайными числами от 1 до 10. В каждом подмассиве должно быть 
по 10 элементов. Должно быть 10 подмассивов.', "<br><br>";
$arr = [];
for ($i = 0; $i <= 9; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $arr[$i][] = mt_rand(1, 10);
    }
}
var_dump($arr);
echo '<hr><br>';


echo 'Task 20. Напишите свой аналог функции ucfirst.', "<br><br>";
$str = 'hello';
$first = substr($str, 0, 1);
$str = strtoupper($first) . substr($str, 1, strlen($str));
echo $str;
echo '<hr><br>';


echo 'Task 21. Напишите свой аналог функции strrev. Решите задачу двумя способами', "<br><br>";
$str = 'hello!';
$arr = array_reverse(str_split($str));
$str = implode($arr);
echo 'first: ' . $str, '<br>';


$str1 = 'hello!';
$str2 = '';
$str_len = strlen($str1);

for ($i = $str_len; $i > 0; $i--) {
    $str2 .= substr($str1, $i - 1, 1);
}
echo 'second: ' . $str2, '<br>';


$str1 = 'hello!';
$str2 = '';
$str_len = strlen($str1);

for ($i = $str_len; $i > 0; $i--) {
    $str2 .= $str1[$i - 1];
}
echo 'third: ' . $str2, '<br>';
echo '<hr><br>';


echo 'Task 22. Напишите свой аналог функции strlen', "<br><br>";
$str1 = 'hello!';

$arr = str_split($str1);
$i = 0;
foreach ($arr as $elem) {
    $i++;
}
echo strlen($str1) . ' - ' . $i . '<br>';

$str1 = 'hello!';
$str_len = count(str_split($str1));
echo $str_len;
echo '<hr><br>';


echo 'Task 23. Поменяйте в строке большие буквы на маленькие и наоборот.', "<br><br>";
$str = 'QwErTy';
$str1 = '';
$arr = str_split($str);
foreach ($arr as $elem) {
    if (ord($elem) >= 97 and ord($elem) <= 122) {
        $str1 .= strtoupper($elem);
    } else {
        $str1 .= strtolower($elem);
    }
}
echo 'было - ' . $str . ', <br> стало - ' . $str1;
echo '<hr><br>';


echo 'Task 24. Преобразуйте строку var_text_hello в varTextHello. 
Скрипт должен работать с любыми стоками такого рода.', "<br><br>";
$str = 'var_text_hello';
$str1 = '';
$arr = explode('_', $str);
foreach ($arr as $elem) {
    if ($elem == $arr[0]) {
        $str1 .= $elem;
    } else {
        $str1 .= ucfirst($elem);
    }
}
echo 'было - ' . $str . ', <br> стало - ' . $str1;
echo '<hr><br>';


echo 'Task 25. С помощью только одного цикла нарисуйте следующую пирамидку.', "<br><br>";
for ($i = 1; $i <= 9; $i++) {
    echo str_repeat($i, $i), '<br>';
}
echo '<hr><br>';


echo 'Task 26. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть не 5 рядов, 
а произвольное количество, оно задается так: $str = \'xxxxxxxx\'; - это первый ряд пирамиды.', "<br><br>";
$str = 'xxxxxxxx';
for ($i = 1; $i <= strlen($str); $i++) {
    echo substr($str, 0, $i) . " - $i ряд", '<br>';
}
echo '<hr><br>';


echo 'Task 27. Дан массив с произвольными числами. Сделайте так, чтобы элемент повторился в массиве количество 
раз, соответствующее его числу. Пример: [1, 3, 2, 4] превратится в [1, 3, 3, 3, 2, 2, 4, 4, 4, 4].', "<br><br>";
$arr = [1, 3, 2, 4];
$arr1 = [];
foreach ($arr as $item) {
    for ($i = 1; $i <= $item; $i++) {
        $arr1[] = $item;
    }
}
print_r($arr1);
echo '<hr><br>';


echo 'Task 28. Дан массив с произвольными целыми числами. Сделайте так, чтобы первый элемент стал ключом второго 
элемента, третий элемент - ключом четвертого: [1, 2, 3, 4, 5, 6] превратится в [1=>2, 3=>4, 5=>6].', "<br><br>";
$arr = [5, 2, 7, 4, 8, 6];
print_r($arr);
echo '<br>';
$new_arr = [];
for ($i = 0; $i < count($arr); $i += 2) {
    $new_arr[$arr[$i]] = $arr[$i + 1];
}
print_r($new_arr);
echo '<hr><br>';


echo 'Task 29. Дана строка. Удалите из этой строки четные числа.', "<br><br>";
$str = '987654321';
echo $str, '<br>';
$new_str = '';
for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] % 2 != 0) {
        $new_str .= $str[$i];
    }
}
echo $new_str;
echo '<hr><br>';


echo 'Task 30. Дана строка. Поменяйте ее первый символ на второй и наоборот, третий на четвертый и наоборот, пятый 
на шестой и наоборот и так далее. То есть из строки \'12345678\' нужно сделать \'21436587\'.', "<br><br>";
$str = '12345678'; //21436587
for ($i = 0, $j = 1; $i < strlen($str); $i += 2, $j += 2) {
    $a = $str[$i];
    $b = $str[$j];
    $str[$i] = $b;
    $str[$j] = $a;
}
echo $str, '<br>';

$str = '12345678';
$newStr = array_reverse(str_split(strrev($str), 2));
echo implode('', $newStr);
echo '<hr><br>';


echo 'Task 31. Сделайте аналог функции array_unique.', "<br><br>";
//Функция array_unique осуществляет удаление повторяющихся элементов (дублей) из массива.
$arr = [1, 2, 3, 3, 4, 4, 5];
function get_arr_unique($arr)
{
    $new_arr = [];
    foreach ($arr as $elem) {
        if (in_array($elem, $new_arr) == false) {
            $new_arr[] = $elem;
        }
    }
    return $new_arr;
}

print_r(get_arr_unique($arr));
echo '<hr><br>';


echo 'Task 32. Сделайте функцию, противоположную функции array_unique.', "<br><br>";
$arr = [1, 2, 3, 3, 4, 4, 5];
function get_un_unique($arr)
{
    $new_arr = [];
    for ($i = 0; $i < count($arr); $i++) {
        $elem = $arr[$i];
        unset($arr[$i]);
        if (in_array($elem, $arr)) {
            $new_arr[] = $elem;
        }
        $arr[$i] = $elem;
    }
    return $new_arr;
}

var_dump(get_un_unique($arr));
echo '<hr><br>';


echo 'Task 33. Напишите скрипт, который проверяет, является ли данное число простым.', "<br><br>";
$elem = 11;
$flag = false;
for ($i = 2; $i < $elem; $i++) {
    if ($elem % $i == 0) {
        $flag = true;
        break;
    }
}

if ($flag == false) {
    echo 'Простое число';
} else {
    echo 'Сложное число';
}
echo '<hr><br>';


echo 'Task 34. Дан массив. Запишите в новый массив только те строки, которые начинаются с http:.', "<br><br>";

$arr = ['http://google.com', 'https://youtube.com', 'https://vk.com'];
$new_arr = [];
foreach ($arr as $elem) {
    if (strpos($elem, 'http:') !== false) {
        $new_arr[] = $elem;
    }
}
var_dump($new_arr);

?>

































