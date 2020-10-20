<?php
/**
 * Time: 3:55
 */
?>

<h3>Занятие №15. Задачи на приемы работы с циклами на PHP:</h3>

<?php
echo 'Task 1. С помощью цикла for сформируйте строку \'123456789\' и запишите ее в переменную $str.', "<br><br>";

$str = '';
for ($i = 1; $i < 10; $i++) {
    $str .= $i;
}
echo '$str = ' . $str;
echo '<hr><br>';


echo 'Task 2. С помощью цикла for сформируйте строку \'987654321\' и запишите ее в переменную $str.', "<br><br>";

$str = '';
for ($i = 9; $i >= 1; $i--) {
    $str .= $i;
}
echo '$str = ' . $str;
echo '<hr><br>';


echo 'Task 3. С помощью цикла for сформируйте строку \'-1-2-3-4-5-6-7-8-9-\' 
и запишите ее в переменную $str.', "<br><br>";

$str = '-';
for ($i = 1; $i < 10; $i++) {
    $str .= $i . '-';
}
echo '$str = ' . $str;
echo '<hr><br>';


echo 'Task 4. Нарисуйте пирамиду букв Х', "<br><br>";

$str = '';
for ($i = 0; $i < 9; $i++) {
    $str .= 'x';
    echo $str . '<br>';
}
echo '<hr><br>';


echo 'Task 5. С помощью двух вложенных циклов нарисуйте следующую пирамидку(1, 22, 333....)', "<br><br>";

for ($i = 1; $i < 10; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo $i;
    }
    echo '<br>';
}
echo '<hr><br>';


echo 'Task 6. Нарисуйте пирамиду букв (xx, xxxx, xxxxxx, ....)', "<br><br>";
$str = '';
for ($i = 0; $i < 6; $i++) {
    $str .= 'xx';
    echo $str . '<br>';
}
echo '<hr><br>';

?>






















