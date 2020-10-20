
<h3>Занятие №3. Основы работы с массивами:</h3>

<?php
/* echo "hello, world \n";
$a = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
var_dump($a);
$a = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
echo $a[3]; //выведет 'ср'


$arr = ['Привет, ', 'мир', '!'];
echo $arr[0].$arr[1].$arr[2], "\n";

$arr = [
    'ru'=>['голубой', 'красный', 'зеленый'],
    'en'=>['blue', 'red', 'green'],
];
echo $arr['ru'][0];
*/


echo "Работа с массивами:", "   <br/> \n";
echo "Tasks - 1, 2, 3, 4, 5", "   <br/> \n";
$arr=['a', 'b', 'c'];
// var_dump($arr);
echo  $arr[0], "   <br/> \n";
echo  $arr[1], "   <br/> \n";
echo  $arr[2], "   <br/> \n";

echo "...   <br/> \n";
$arr[3] = 'd';
echo $arr[0].'+'.$arr[1].', '.$arr[2].'+'.$arr[3], "   <br/> \n";

echo "...   <br/> \n";
$arr = [2, 5, 3, 9];
$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
echo 'Переменная $result = ', $result, "   <br/> \n";

echo "...   <br/> \n";
$arr1[] = 1; $arr1[] = 2; $arr1[] = 3; $arr1[] = 4; $arr1[] = 5;
// var_dump($arr1);
echo '<hr><br>';


echo "Ассоциативные массивы:", "   <br/> \n";
echo "Tasks - 6, 7, 8, 9, 10", "   <br/> \n";

$arr = ['a' => 1, 'b'=>2, 'c'=>3];
echo "элемент с ключом 'c' равен ", $arr['c'], "   <br/> \n";
echo "...   <br/> \n";

echo "сумма элементов массива равна ", $arr['a'] + $arr['b'] + $arr['c'], "   <br/> \n";
echo "...   <br/> \n";

$arr = ['kolia' => '1000$', 'ivan' => '500$', 'vitaliy' => '1500$'];
echo 'salary ivan = ', $arr['ivan'], "   <br/> \n";
echo "...   <br/> \n";

$week = [1 => 'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
echo 'текущий день недели - ', $week[4], "   <br/> \n";
echo "...   <br/> \n";

$day = 6;
echo 'день соответствующий переменной day - ', $week[$day], "   <br/> \n";
echo '<hr><br>';


echo "Многомерные массивы:", "   <br/> \n";
echo "Tasks - 11, 12, 13", "   <br/> \n";

$arr = [
    'cms' => ['joomla', 'wordpress', 'drupal'],
    'colors' => ['blue' => 'голубой', 'red' => 'красный', 'green' => 'зелёный']
];
echo $arr['cms'][0], "   <br/> \n";
echo $arr['cms'][2], "   <br/> \n";
echo $arr['colors']['green'], "   <br/> \n";
echo $arr['colors']['red'], "   <br/> \n";
echo "...   <br/> \n";

$week = [
    'ru' => [1=>'пн', 'вт', 'ср'],
    'en' => [1=>'Monday', 'Tuesday', 'Wednesday']
];

echo $week['ru'][1], "   <br/> \n";
echo $week['en'][3], "   <br/> \n";
echo "...   <br/> \n";

$lang = 'en';
$day = 2;
echo $week[$lang][$day], "   <br/> \n";


?>






























